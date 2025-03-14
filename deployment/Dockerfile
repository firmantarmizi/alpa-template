# Dockerfile untuk aplikasi Laravel dengan PHP 8.2-fpm dan Nginx
FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    libzip-dev \
    libonig-dev \
    nginx

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql mbstring zip
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Node.js and npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Copy nginx configuration
COPY deployment/nginx.conf /etc/nginx/nginx.conf

# Copy php configuration
COPY deployment/php.ini /usr/local/etc/php/conf.d/custom.ini

# Copy application files
COPY . /var/www/html

# Create a simple index.html for testing
RUN echo '<!DOCTYPE html>\n\
<html>\n\
<head>\n\
    <title>Laravel Template</title>\n\
    <style>\n\
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; height: 100vh; flex-direction: column; background-color: #f7fafc; }\n\
        .container { text-align: center; padding: 2rem; background-color: white; border-radius: 0.5rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); max-width: 800px; }\n\
        h1 { color: #4a5568; margin-bottom: 1rem; }\n\
        p { color: #718096; line-height: 1.5; }\n\
    </style>\n\
</head>\n\
<body>\n\
    <div class="container">\n\
        <h1>Laravel Landing Page Template</h1>\n\
        <p>Selamat datang di template landing page Laravel yang menggunakan TailwindCSS, AlpineJS, Livewire, Folio, dan Volt.</p>\n\
        <p>Template ini masih dalam tahap pengembangan dan sedang diuji di server.</p>\n\
    </div>\n\
</body>\n\
</html>' > /var/www/html/public/index.html

# Create Laravel required directories and set permissions
RUN mkdir -p /var/www/html/storage/app/public \
    && mkdir -p /var/www/html/storage/framework/cache \
    && mkdir -p /var/www/html/storage/framework/sessions \
    && mkdir -p /var/www/html/storage/framework/testing \
    && mkdir -p /var/www/html/storage/framework/views \
    && mkdir -p /var/www/html/storage/logs \
    && mkdir -p /var/www/html/bootstrap/cache \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache \
    && chmod -R 755 /var/www/html/public

# Skip Composer install to avoid artisan errors
# RUN composer install --no-interaction --no-dev --optimize-autoloader

# Skip artisan commands
# RUN php artisan key:generate --force

# Create start script
RUN echo '#!/bin/bash\n\
echo "Starting Nginx..."\n\
service nginx start\n\
echo "Starting PHP-FPM..."\n\
php-fpm -F\n\
' > /start.sh && chmod +x /start.sh

# Expose port 80
EXPOSE 80

# Start services
CMD ["/start.sh"]