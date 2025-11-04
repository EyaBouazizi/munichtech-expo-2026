# Use PHP 8.3 with Apache
FROM php:8.3-apache

# System dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev libzip-dev libpq-dev \
    && docker-php-ext-install pdo_mysql pdo_pgsql mbstring exif pcntl bcmath gd zip \
    && rm -rf /var/lib/apt/lists/*

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install PHP dependencies (no dev in production)
RUN composer install --optimize-autoloader --no-dev

# Node.js & build frontend
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && npm install \
    && npm run build \
    && rm -rf /var/lib/apt/lists/*

# Permissions
RUN chmod -R 777 storage bootstrap/cache

# Do NOT bake .env or APP_KEY into the image; use Render env vars instead.

# Clear caches at build time (runtime clear again in start script)
RUN php artisan config:clear \
    && php artisan cache:clear

# Set Apache DocumentRoot to public
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Make Apache listen on the Render-provided $PORT
RUN sed -i 's/^Listen .*/Listen ${PORT}/' /etc/apache2/ports.conf \
    && sed -i 's|<VirtualHost .*:.*>|<VirtualHost *:${PORT}>|' /etc/apache2/sites-available/000-default.conf

# Default PORT value for local runs; Render injects the real $PORT
ENV PORT=10000
EXPOSE 10000

# Startup script: clear caches, run migrations, then start Apache
COPY start.sh /usr/local/bin/start.sh
RUN chmod +x /usr/local/bin/start.sh
CMD ["/usr/local/bin/start.sh"]
