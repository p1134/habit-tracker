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

# 2.0 Prod env
ENV APP_ENV=prod \
    APP_DEBUG=0 \
    COMPOSER_ALLOW_SUPERUSER=1 \
    SYMFONY_ALLOW_APP_SHELL=1

WORKDIR /app

# 2.1 System libs + PHP exts + MySQL client + netcat
RUN apt-get update \
 && apt-get install -y --no-install-recommends \
      git unzip zip curl \
      libpng-dev libjpeg-dev libfreetype6-dev \
      libxml2-dev libicu-dev libzip-dev libonig-dev \
      bash nano procps openssl zlib1g-dev \
      default-mysql-client netcat-openbsd \
 && docker-php-ext-configure gd --with-freetype --with-jpeg \
 && docker-php-ext-install -j$(nproc) gd intl zip opcache pdo_mysql \
 && rm -rf /var/lib/apt/lists/*

# 2.2 Composer binary
COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

# 2.3 Symfony CLI (if needed)
RUN curl -sS https://get.symfony.com/cli/installer | bash \
 && mv /root/.symfony*/bin/symfony /usr/local/bin/symfony

# 2.4 Install PHP deps (without scripts)
COPY composer.json composer.lock ./
RUN composer install --optimize-autoloader --no-interaction --no-progress --no-scripts

# 2.5 Copy application code
COPY . .

# 2.6 Copy built assets
COPY --from=assets /usr/src/app/public/build public/build

# 2.7 Fix permissions
RUN chown -R www-data:www-data /app

# 2.8 Entrypoint
COPY entrypoint.sh /app/entrypoint.sh
RUN chmod +x /app/entrypoint.sh

ENTRYPOINT ["/app/entrypoint.sh"]
