# Use PHP 8.3 with Apache
FROM php:8.3-apache

# System dependencies
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev libzip-dev sqlite3 libsqlite3-dev \
    && docker-php-ext-install pdo_mysql pdo_sqlite mbstring exif pcntl bcmath gd zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install PHP dependencies
RUN composer install --optimize-autoloader --no-dev

# Node.js & build frontend
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && npm install \
    && npm run build

# Permissions
RUN chmod -R 777 storage bootstrap/cache

# SQLite setup
RUN mkdir -p database \
    && touch database/database.sqlite \
    && chmod 777 database/database.sqlite

# Environment
COPY .env.example .env
RUN php artisan key:generate --force

# Laravel config cache clear
RUN php artisan config:clear \
    && php artisan cache:clear

# Set Apache DocumentRoot
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Listen on Render port
ENV APACHE_RUN_PORT=$PORT
EXPOSE $PORT

# Start Apache
CMD ["apache2-foreground"]
