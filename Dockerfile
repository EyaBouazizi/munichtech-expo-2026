FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev libzip-dev \
    && curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql pdo_pgsql mbstring exif pcntl bcmath gd zip

# Set working directory
WORKDIR /var/www/html

# Copy composer binary
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy composer files first for better Docker layer caching
COPY composer.json composer.lock* ./

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Copy package files
COPY package.json package-lock.json* ./

# Install Node dependencies
RUN npm ci --prefer-offline --no-audit

# Copy application files
COPY . .

# Build assets
RUN npm run build

# Set permissions
RUN chmod -R 775 storage bootstrap/cache

# Expose port (Render uses $PORT env var, defaults to 10000)
EXPOSE 10000

# Start command
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-10000}

