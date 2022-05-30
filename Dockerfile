# Set master image
FROM php:7.4-fpm-alpine

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Install Additional dependencies
RUN apk update && apk add --no-cache \
    build-base shadow vim curl \
    php7.4 \
    php7.4-fpm \
    php7.4-common \
    php7.4-pdo \
    php7.4-pdo_mysql \
    php7.4-mysqli \
    php7.4-mcrypt \
    php7.4-mbstring \
    php7.4-xml \
    php7.4-openssl \
    php7.4-json \
    php7.4-phar \
    php7.4-zip \
    php7.4-gd \
    php7.4-dom \
    php7.4-session \
    php7.4-zlib

# Add and Enable PHP-PDO Extenstions
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-enable pdo_mysql

# Install PHP Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Remove Cache
RUN rm -rf /var/cache/apk/*

# Add UID '1000' to www-data
RUN usermod -u 1000 www-data

# Copy existing application directory permissions
COPY --chown=www-data:www-data . /var/www/html

# Change current user to www
USER www-data

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
