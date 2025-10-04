# Dockerfile (php-fpm)
FROM php:8.1-fpm

# Install system deps
RUN apt-get update && apt-get install -y \
    git unzip libpng-dev libonig-dev libxml2-dev libzip-dev zip curl libjpeg-dev libpng-dev \
 && docker-php-ext-configure gd --with-jpeg \
 && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip sockets

# Install redis extension (optional)
RUN pecl install redis || true && docker-php-ext-enable redis || true

# Install composer (copy from official composer image)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Create app directory
WORKDIR /var/www/html

# Copy composer files to install dependencies at build time (faster builds)
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-interaction --optimize-autoloader || true

# Copy the rest of the app
COPY . .

# Set permissions (will be adjusted later if needed)
RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache || true

EXPOSE 9000

# default php-fpm run (official entrypoint covers it)
CMD ["php-fpm"]
