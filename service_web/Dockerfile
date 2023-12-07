FROM php:8.1.26-apache

RUN apt-get update \
    && docker-php-ext-install mysqli \
    && apt-get install -y --no-install-recommends git \
    && apt-get install -y --no-install-recommends zip unzip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
