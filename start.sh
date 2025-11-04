#!/usr/bin/env bash
set -e

# Ensure Laravel reads current env vars
php artisan config:clear || true
php artisan route:clear || true
php artisan view:clear || true

# Run migrations in production (Postgres)
if [ "${DB_CONNECTION}" = "pgsql" ]; then
  php artisan migrate --force || true
fi

exec apache2-foreground


