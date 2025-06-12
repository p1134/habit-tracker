#!/bin/sh
set -e

# 0) Czekaj aż MySQL odpowie
until mysqladmin ping -h"mysql" -uroot -proot --silent; do
  echo "Waiting for DB…"
  sleep 1
done

# 1) Safe directory dla git (usuwa warningi)
git config --global --add safe.directory /app

# 2) Zainstaluj zależności
composer install --no-dev --optimize-autoloader --no-interaction --no-progress

# 3) Utwórz bazę, jeśli nie istnieje
php bin/console doctrine:database:create --if-not-exists

# 4) Wykonaj migracje
php bin/console doctrine:migrations:migrate --no-interaction

# 5) Załaduj fixture’y, jeżeli masz DoctrineFixturesBundle w require
php bin/console doctrine:fixtures:load --no-interaction


# 6) Wystartuj serwer na 0.0.0.0:8000
exec php -S 0.0.0.0:8000 -t public public/index.php
