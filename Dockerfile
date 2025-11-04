# ------------------------------
# Base image with PHP + Apache
# ------------------------------
FROM php:8.3-apache

# ------------------------------
# Install system dependencies
# ------------------------------
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    sqlite3 \
    libsqlite3-dev \
    && docker-php-ext-install pdo_mysql pdo_sqlite mbstring exif pcntl bcmath gd zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# ------------------------------
# Set working directory
# ------------------------------
WORKDIR /var/www/html

# ------------------------------
# Copy project files
# ------------------------------
COPY . .

# ------------------------------
# Install Composer
# ------------------------------
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN composer install --optimize-autoloader --no-dev

# ------------------------------
# Install Node.js & build frontend
# ------------------------------
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && npm install \
    && npm run build

# ------------------------------
# Set correct permissions
# ------------------------------
RUN chmod -R 775 storage bootstrap/cache

# ------------------------------
# Create SQLite database
# ------------------------------
RUN mkdir -p database \
    && touch database/database.sqlite \
    && chmod 777 database/database.sqlite

# ------------------------------
# Copy environment file if missing
# ------------------------------
RUN if [ ! -f .env ]; then cp .env.example .env; fi

# ------------------------------
# Generate Laravel app key
# ------------------------------
RUN php artisan key:generate --force

# ------------------------------
# Set Apache DocumentRoot to Laravel public
# ------------------------------
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# ------------------------------
# Expose Apache port
# ------------------------------
EXPOSE 80

# ------------------------------
# Start Apache in foreground
# ------------------------------
CMD ["apache2-foreground"]
