#!/usr/bin/env sh
set -e set -x

echo "DATABASE_URL: $DATABASE_URL"

# Wyciągnij usera i hosta z DATABASE_URL (postgresql://user:pass@host:port/db)
export DATABASE_USER=$(echo "$DATABASE_URL" | sed -E 's|^[a-z]+://([^:/@]+):.*@\S+/.*|\1|')
export DATABASE_HOST=$(echo "$DATABASE_URL" | sed -E 's|^[a-z]+://[^:/@]+:[^@]+@([^:/@]+):?.*|\1|')

echo "DATABASE_HOST: $DATABASE_HOST"
echo "DATABASE_USER: $DATABASE_USER"

# Czekaj aż PostgreSQL będzie gotowy
until pg_isready -h "$DATABASE_HOST" -U "$DATABASE_USER"; do
  echo "Waiting for Postgres at host: $DATABASE_HOST with user: $DATABASE_USER…"
  sleep 1
done

# Safe directory dla git
git config --global --add safe.directory /app

# Instalacja zależności
composer install --no-dev --optimize-autoloader --no-interaction --no-progress

# Utwórz bazę, jeśli nie istnieje
php bin/console doctrine:database:create --if-not-exists

# Wykonaj migracje
php bin/console doctrine:migrations:migrate --no-interaction

# Załaduj fixture’y (jeśli masz bundle’a)
if php bin/console | grep -q doctrine:fixtures:load; then
  php bin/console doctrine:fixtures:load --no-interaction
fi

# Czyszczenie i podgrzewanie cache w prod
if [ "${APP_ENV:-prod}" = "prod" ]; then
  echo "🗑 Czyszczenie cache…"
  php bin/console cache:clear --env=prod --no-warmup
  php bin/console cache:warmup --env=prod
fi

# Start serwera (prod vs dev)
if [ "${APP_ENV:-prod}" = "prod" ]; then
  exec php -S 0.0.0.0:8000 -t public
else
  exec symfony server:start --no-tls --port=8000
fi
