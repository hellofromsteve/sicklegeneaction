# --- Stage 1: PHP Dependencies (Composer) ---
FROM composer:latest AS composer_base
WORKDIR /app
COPY composer.* ./
COPY . .
# We use --no-scripts to prevent Laravel from booting during the build phase
RUN composer install --no-interaction --no-progress --no-scripts

# --- Stage 2: Build Assets (Vite) ---
FROM node:22-bookworm-slim AS build
WORKDIR /app
COPY package*.json ./
RUN npm install --include=optional && \
    npm install @rolldown/binding-linux-x64-gnu
COPY --from=composer_base /app .
RUN npm run build

# --- Stage 3: Production Server (PHP + Nginx) ---
FROM php:8.2-fpm-bookworm

# 1. Install system dependencies & PHP extensions
RUN apt-get update && apt-get install -y \
    nginx \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    libpq-dev \
    curl \
    && docker-php-ext-install pdo_pgsql gd zip

WORKDIR /var/www/html

# 2. Copy the App code
COPY . .
# 3. Copy Vendors and Build Assets
COPY --from=composer_base /app/vendor ./vendor
COPY --from=build /app/public/build ./public/build

# 4. Critical Permissions Fix
# We chown the whole directory to ensure Nginx and PHP-FPM can talk
RUN chown -R www-data:www-data /var/www/html

# 5. Nginx Configuration
COPY .docker/nginx.conf /etc/nginx/sites-available/default
# Remove default symlink if it exists and create new one
RUN rm -f /etc/nginx/sites-enabled/default && \
    ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default

# 6. Logging & PID Directory Fixes
RUN mkdir -p /var/log/nginx /var/run/nginx /var/cache/nginx && \
    chown -R www-data:www-data /var/log/nginx /var/run/nginx /var/cache/nginx && \
    ln -sf /dev/stdout /var/log/nginx/access.log && \
    ln -sf /dev/stderr /var/log/nginx/error.log

EXPOSE 80

# 7. Robust CMD
# We clear the cache before caching to ensure old build-time paths are gone
CMD ["sh", "-c", "php-fpm -D && (php artisan migrate --force || true) && php artisan cache:clear && php artisan config:clear && php artisan route:clear && php artisan view:clear && nginx -g 'daemon off;'"]
