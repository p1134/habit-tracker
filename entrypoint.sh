#!/usr/bin/env sh
set -e

echo "DATABASE_URL: $DATABASE_URL"

if echo "$DATABASE_URL" | grep -q "^postgres"; then
  export DATABASE_USER=$(echo "$DATABASE_URL" | sed -E 's|^postgres(ql)?://([^:/@]+).*|\2|')
  export DATABASE_HOST=$(echo "$DATABASE_URL" | sed -E 's|^postgres(ql)?://[^@]+@([^:/?]+).*|\2|')
fi

echo "DATABASE_HOST: $DATABASE_HOST"
echo "DATABASE_USER: $DATABASE_USER"


# 0) Parsujemy protokół z DATABASE_URL
PROTO=$(echo "$DATABASE_URL" | sed -E 's,^(.*)://.*,\1,')
case "$PROTO" in
  mysql)
    # czekaj aż MySQL odpowie
    until mysqladmin ping -h"${DATABASE_HOST:-mysql}" -u"${DATABASE_USER:-root}" -p"${DATABASE_PASSWORD:-root}" --silent; do
      echo "Waiting for MySQL…"
      sleep 1
    done
    ;;
  pgsql|postgres)
    # czekaj aż PostgreSQL odpowie
    until pg_isready -h "${DATABASE_HOST}" -U "${DATABASE_USER}"; do
      echo "Waiting for Postgres at host: ${DATABASE_HOST} with user: ${DATABASE_USER}…"
      sleep 1
    done
    ;;
  *)
    echo "Unsupported DB PROTO: $PROTO"
    exit 1
    ;;
esac

# 1) Safe directory dla git (usuwa warningi)
git config --global --add safe.directory /app

# 2) Instalacja zależności (tylko w drugim buildzie prod nie zrobimy tego, ale zostawiamy)
composer install --no-dev --optimize-autoloader --no-interaction --no-progress

# 3) Utwórz bazę, jeśli nie istnieje
php bin/console doctrine:database:create --if-not-exists

# 4) Wykonaj migracje
php bin/console doctrine:migrations:migrate --no-interaction

# 5) Załaduj fixture’y (jeżeli masz bundle’a)
if php bin/console | grep -q doctrine:fixtures:load; then
  php bin/console doctrine:fixtures:load --no-interaction
fi

# 6) Czyszczenie i podgrzewanie cache w prod
if [ "${APP_ENV:-prod}" = "prod" ]; then
  echo "🗑 Czyszczenie cache…"
  php bin/console cache:clear --env=prod --no-warmup
  php bin/console cache:warmup --env=prod
fi

# 7) Start serwera (prod vs dev)
if [ "${APP_ENV:-prod}" = "prod" ]; then
  exec php -S 0.0.0.0:8000 -t public
else
  exec symfony server:start --no-tls --port=8000
fi
