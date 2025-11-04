# Munichtech Expo 2026

A Laravel-based web application for the Munichtech Expo 2026 event. This project is deployed on **Railway** and uses **SQLite** as the database.

---

## Live Demo

[https://munichtech-expo-2026-production-4cec.up.railway.app](https://munichtech-expo-2026-production-4cec.up.railway.app)

---

## Tech Stack

-   PHP 8.2 + Laravel 10
-   SQLite
-   Node.js & npm (for frontend assets)
-   Tailwind CSS
-   Apache (inside Docker container)
-   Railway (hosting)

---

## Project Structure

├─ app/ # Laravel application logic
├─ bootstrap/
├─ config/
├─ database/
│ └─ migrations/
├─ public/
├─ resources/
│ └─ views/
├─ routes/
├─ storage/
├─ .env
└─ .env.example

---

## Installation / Local Setup

1. Clone the repository:

```bash
git clone https://github.com/EyaBouazizi/munichtech-expo-2026.git
cd munichtech-expo-2026
```

## Install PHP dependencies:

composer install

## Install Node dependencies and build frontend assets:

npm install
npm run build

## Copy .env and set up environment variables:

cp .env.example .env
php artisan key:generate

## Run migrations:

php artisan migrate

## Serve locally:

php artisan serve

## Deployment (Railway)

-   Environment variables to set in Railway:

APP_ENV=production
APP_DEBUG=false
APP_URL=https://munichtech-expo-2026-production-4cec.up.railway.app
DB_CONNECTION=sqlite
DB_DATABASE=/data/database.sqlite

## Start command in Railway:

bash -lc "touch /data/database.sqlite && php artisan migrate --force && (php artisan storage:link || true) && php -S 0.0.0.0:$PORT -t public"

## Notes

Tailwind CSS CDN warning may appear in the browser console in production. To fix, install Tailwind as a PostCSS plugin or via the Tailwind CLI.
