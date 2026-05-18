FROM richarvey/nginx-php-fpm:latest

WORKDIR /var/www/html

COPY . .

ENV WEBROOT=/var/www/html/public

RUN apk add --no-cache \
    nodejs \
    npm \
    git \
    unzip \
    libzip-dev \
    oniguruma-dev \
    icu-dev

RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs

RUN npm install
RUN npm run build

RUN php artisan config:clear
RUN php artisan route:clear
RUN php artisan view:clear
RUN php artisan storage:link || true

RUN chmod -R 775 storage bootstrap/cache
