FROM php:8.2-cli

# Zainstaluj cron i inne zależności
RUN apt-get update && \
    apt-get install -y cron unzip git zip && \
    docker-php-ext-install pdo pdo_mysql

# Ustaw katalog roboczy
WORKDIR /var/www/html

# Skopiuj pliki aplikacji
COPY . .

# Skopiuj plik cron
COPY mycron /etc/cron.d/mycron

# Ustaw odpowiednie prawa do pliku cron
RUN chmod 0644 /etc/cron.d/mycron && \
    crontab /etc/cron.d/mycron

# Stwórz log
RUN touch /var/log/cron.log

# Komenda startowa: uruchom cron i zostaw kontener w trybie foreground
CMD cron && tail -f /var/log/cron.log
