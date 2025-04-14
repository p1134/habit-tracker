# Używamy oficjalnego obrazu PHP z CLI
FROM php:8.2-cli-bullseye

# Ustaw zmienne środowiskowe
ENV COMPOSER_ALLOW_SUPERUSER=1 \
    SYMFONY_ALLOW_APP_SHELL=1


# Instalacja systemowych zależności i aktualizacja bezpieczeństwa
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y \
        git \
        unzip \
        zip \
        curl \
        libpng-dev \
        libjpeg62-turbo-dev \
        libfreetype6-dev \
        libxml2-dev \
        libicu-dev \
        libzip-dev \
        libonig-dev \
        bash \
        nano \
        procps \
        openssl \
        zlib1g-dev && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Instalacja rozszerzeń PHP dla Symfony
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install -j$(nproc) gd pdo pdo_mysql xml intl zip opcache

# Instalacja Composer'a (menedżera pakietów PHP)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instalacja Symfony CLI
# Instalacja Symfony CLI
RUN curl -sS https://get.symfony.com/cli/installer | bash && \
    mv /root/.symfony*/bin/symfony /usr/local/bin/symfony

# Ustawiamy katalog roboczy
WORKDIR /var/www/html

# Kopiujemy pliki aplikacji Symfony do kontenera
COPY . .

# Naprawa uprawnień do plików w repozytorium
RUN chown -R www-data:www-data /var/www/html
RUN git config --global --add safe.directory /var/www/html
RUN composer clear-cache

# Instalacja zależności projektu (wymaga wcześniejszego posiadania pliku composer.json)
RUN composer install --optimize-autoloader

# Ustawiamy domyślny port na 8000 i uruchamiamy Symfony CLI
EXPOSE 8000
CMD ["symfony", "serve", "--no-tls", "--allow-http", "--port=8000"]