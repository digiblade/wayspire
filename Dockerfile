# Dockerfile - PHP-FPM for Laravel (PHP 8.1)
FROM php:8.1-fpm

# Install system deps and PHP extensions
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev libzip-dev libicu-dev \
 && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip intl \
 && rm -rf /var/lib/apt/lists/*

# Install composer from official composer image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy application code (useful for building vendor assets at build time)
COPY . /var/www/html

# Try to install composer deps (will succeed if composer.json present)
RUN composer install --no-dev --optimize-autoloader --no-interaction || true

# Permissions (www-data)
RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 755 /var/www/html

EXPOSE 9000
CMD ["php-fpm"]
