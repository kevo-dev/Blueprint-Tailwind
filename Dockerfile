FROM php:8.2-cli-alpine

# Install system dependencies
RUN apk add --no-cache nodejs npm git libpng-dev libxml2-dev zip unzip

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy application files
COPY . .

# Install PHP dependencies & build frontend assets
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

# Setup storage permissions and key
RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 10000

CMD ["sh", "-c", "php artisan config:cache && php artisan route:cache && php artisan view:cache && php artisan serve --host=0.0.0.0 --port=10000"]
