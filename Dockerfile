FROM php:8.1-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip curl libonig-dev libpng-dev libjpeg-dev libfreetype6-dev

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_sqlite mbstring zip exif pcntl

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy project files
COPY . .

# Install PHP deps & optimize
RUN composer install --no-dev --optimize-autoloader

# Generate app key
RUN php artisan key:generate

# Run migrations
RUN php artisan migrate --force

# Expose port
EXPOSE 10000

# Start the app
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
