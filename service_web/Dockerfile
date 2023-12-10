FROM php:8.0-apache

ARG XDEBUG=false
RUN if [ "${XDEBUG}" = true ]; then \
        pecl install xdebug && docker-php-ext-enable xdebug; \
        { \
            echo "[xdebug]"; \
            echo "xdebug.mode=develop,debug,coverage"; \
            echo "xdebug.discover_client_host = true"; \
            echo "xdebug.client_host=172.17.0.1"; \
            echo "xdebug.client_port = 9003"; \
            echo "xdebug.max_nesting_level = 512"; \
            echo "xdebug.start_with_request=yes"; \
        } >> "$PHP_INI_DIR"/conf.d/xdebug.ini \
    ;fi

ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN apt-get update \
    && docker-php-ext-install pdo_mysql \
    && apt-get install -y --no-install-recommends git \
    && apt-get install -y --no-install-recommends zip unzip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
