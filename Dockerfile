
FROM php:8.3-apache

# Install required system dependencies
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        git \
        unzip \
        libicu-dev \
        libzip-dev \
        libsqlite3-dev \
        libonig-dev \
        libpng-dev \
        libjpeg62-turbo-dev \
        libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j"$(nproc)" \
        pdo_sqlite \
        pdo_mysql \
        mbstring \
        bcmath \
        exif \
        gd \
        intl \
        zip \
        opcache \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set project directory
WORKDIR /var/www/html

# Copy Laravel project
COPY . .

# Install PHP dependencies
RUN composer install \
    --no-dev \
    --no-interaction \
    --prefer-dist \
    --optimize-autoloader

# Configure Apache
RUN a2enmod rewrite headers \
    && sed -i 's/Listen 80/Listen 10000/' /etc/apache2/ports.conf \
    && sed -i 's/<VirtualHost \*:80>/<VirtualHost *:10000>/' /etc/apache2/sites-available/000-default.conf \
    && sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf \
    && printf '\n<Directory /var/www/html/public>\nAllowOverride All\nRequire all granted\n</Directory>\n' >> /etc/apache2/apache2.conf

# Laravel production configuration
ENV APP_ENV=production
ENV APP_DEBUG=false
ENV DB_CONNECTION=sqlite
ENV DB_DATABASE=/var/www/html/database/database.sqlite
ENV SESSION_DRIVER=file
ENV CACHE_STORE=file
ENV QUEUE_CONNECTION=sync

# Create SQLite database and writable directories
RUN mkdir -p \
    storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    bootstrap/cache \
    database \
    && touch database/database.sqlite \
    && chown -R www-data:www-data storage bootstrap/cache database

# Render port
EXPOSE 10000

# Start Laravel migrations and Apache
CMD ["sh", "-c", "php artisan migrate --force && apache2-foreground"]
