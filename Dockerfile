# -------------------------
# 1) Stage: build assets
# -------------------------
FROM node:18-alpine AS assets

WORKDIR /usr/src/app
COPY package.json package-lock.json webpack.config.js ./
RUN npm ci
COPY assets/ ./assets/
COPY public/style/ ./public/style/
RUN npm run build

# -------------------------
# 2) Stage: PHP + Symfony CLI
# -------------------------
FROM php:8.2-cli-bullseye

# Nie narzucamy tu APP_ENV/DATABASE_URL – zostaną podane przez Render albo .env.local
ENV COMPOSER_ALLOW_SUPERUSER=1 \
    SYMFONY_ALLOW_APP_SHELL=1

WORKDIR /app

# 2.1 System libs + PHP exts + MySQL + PostgreSQL clients + netcat
RUN apt-get update \
 && apt-get install -y --no-install-recommends \
      git unzip zip curl \
      bash nano procps openssl \
      libpng-dev libjpeg62-turbo-dev libfreetype6-dev \
      zlib1g-dev libxml2-dev libicu-dev libzip-dev libonig-dev \
      default-mysql-client postgresql-client libpq-dev netcat-openbsd \
 && docker-php-ext-configure gd --with-freetype --with-jpeg \
 && docker-php-ext-install -j$(nproc) \
      gd intl zip opcache pdo_mysql pdo_pgsql \
 && rm -rf /var/lib/apt/lists/*

# 2.2 Composer
COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

# 2.3 Symfony CLI (jeśli potrzebujesz w kontenerze)
RUN curl -sS https://get.symfony.com/cli/installer | bash \
 && mv /root/.symfony*/bin/symfony /usr/local/bin/symfony

# 2.4 Instalacja zależności PHP (bez scripts, bo w prod)
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress --no-scripts

# 2.5 Reszta kodu aplikacji
COPY . .

# 2.6 Wrzucamy zbudowane assety
COPY --from=assets /usr/src/app/public/build public/build

# 2.7 Uprawnienia
RUN chown -R www-data:www-data /app

# 2.8 Entrypoint
COPY entrypoint.sh /app/entrypoint.sh
RUN chmod +x /app/entrypoint.sh

ENTRYPOINT ["/app/entrypoint.sh"]
