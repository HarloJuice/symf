FROM php:8.1.0-fpm-alpine

# Install packages
RUN apk add --no-cache curl git build-base zlib-dev oniguruma-dev autoconf bash
RUN apk add --update linux-headers

# Install and enable Xdebug
RUN pecl install xdebug && docker-php-ext-enable xdebug
COPY ./docker/php-fpm/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

# Додайте команду для копіювання драйвера MySQL в контейнер
COPY ./docker/php-fpm/mysql-connector.jar /path/to/destination/mysql-driver.jar

# Встановіть необхідні пакети для драйвера MySQL
RUN apk add --no-cache mysql-client
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli

# Configure non-root user
ARG PUID=1000
ARG PGID=1000
RUN apk add --no-cache shadow

# Source code
COPY ./ /var/www
WORKDIR /var/www

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

CMD php-fpm

EXPOSE 9000
