FROM php:7.2-fpm

WORKDIR /var/www/html

RUN apt-get update && \
    apt-get install -y libzip-dev autoconf build-base \
    libgcc libstdc++ libx11 glib libxrender libxext libintl libressl-dev zlib1g-dev && \
    docker-php-ext-install -j$(nproc) zip bcmath pdo pdo_mysql opcache
