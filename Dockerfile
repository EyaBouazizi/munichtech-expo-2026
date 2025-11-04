FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev nodejs npm

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Set working directory
WORKDIR /var/www/html

# Copy composer binary
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy project files
COPY . .

# Install Laravel dependencies & build Tailwind
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

# Expose port
EXPOSE 9000

# Start command
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=9000"]
