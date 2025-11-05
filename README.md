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

```
munichtech-expo-2026/
│
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── AddonController.php
│   │   │   ├── ContactController.php
│   │   │   ├── EmployerController.php
│   │   │   ├── JobSeekerController.php
│   │   │   ├── PageController.php
│   │   │   ├── SpeakerController.php
│   │   │   └── SponsorController.php
│   │   │
│   │   └── Middleware/
│   │
│   └── Models/
│       └── Ticket.php
│
├── database/
│   ├── migrations/
│   │   └── 2025_11_03_165320_create_tickets_table.php
│   │
│   └── database.sqlite
│
├── resources/
│   ├── css/
│   │   ├── app.css
│   │   ├── app.js
│   │   └── bootstrap.js
│   │
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       │
│       ├── pages/
│       │   ├── about.blade.php
│       │   ├── agenda.blade.php
│       │   ├── contact.blade.php
│       │   ├── event-details.blade.php
│       │   ├── exhibitors.blade.php
│       │   ├── expo-zones.blade.php
│       │   ├── home.blade.php
│       │   ├── speakers.blade.php
│       │   ├── sponsors.blade.php
│       │   ├── talent-hub.blade.php
│       │   ├── tickets.blade.php
│       │   └── workshops.blade.php
│       │
│       ├── partials/
│       │   ├── footer.blade.php
│       │   └── header.blade.php
│       │
│       ├── tickets/
│       │   └── create.blade.php
│       │
│       └── welcome.blade.php
│
└── .env
```

---

## Features

### Pages

-   Home
-   About
-   Agenda
-   Speakers
-   Sponsors
-   Exhibitors
-   Expo Zones
-   Workshops
-   Talent Hub
-   Tickets
-   Contact

### Controllers

-   **PageController**: Main page routing
-   **ContactController**: Contact form
-   **SpeakerController**: Speaker management
-   **SponsorController**: Sponsor management
-   **EmployerController**: Employer management
-   **JobSeekerController**: Talent hub
-   **AddonController**: Additional features

### Database Models

-   **Ticket**: Ticket booking management

---

## Installation / Local Setup

1. Clone the repository:

```bash
git clone https://github.com/EyaBouazizi/munichtech-expo-2026.git
cd munichtech-expo-2026
```

2. Install PHP dependencies:

```bash
composer install
```

3. Install Node dependencies and build frontend assets:

```bash
npm install
npm run build
```

4. Copy .env and set up environment variables:

```bash
cp .env.example .env
php artisan key:generate
```

5. Run migrations:

```bash
php artisan migrate
```

6. Serve locally:

```bash
php artisan serve
```

---

## Deployment (Railway)

Environment variables to set in Railway:

```env
APP_ENV=production
APP_DEBUG=false
APP_KEY= YourKey
APP_URL=https://munichtech-expo-2026-production-4cec.up.railway.app
DB_CONNECTION=sqlite
DB_DATABASE=/data/database.sqlite
```

Build command in Railway:

```bash
composer install --no-dev --optimize-autoloader && php artisan config:cache && php artisan route:cache && php artisan view:cache
```

Start command in Railway:

```bash
bash -lc "touch /data/database.sqlite && php artisan migrate --force && (php artisan storage:link || true) && php -S 0.0.0.0:$PORT -t public"
```

---

## Time Spent & Assumptions

-   Total time spent: ~12 hours
-   Assumptions:
    -   Using Railway for free hosting with SQLite for simplicity

---

## Form Functionality

-   Ticket form: fully functional, saves data to the `tickets` table in the database
-   Other forms (contact, registration, etc.): currently show front-end confirmation but do not persist data in the database

---
