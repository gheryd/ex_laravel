FROM php:7.3.4-apache

RUN apt-get update && apt-get install -y apt-utils
RUN apt-get install -y git libzip-dev zip libxml2-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-configure zip --with-libzip
RUN docker-php-ext-install zip

RUN mkdir -p /var/www/host_php
WORKDIR /var/www/host_php

RUN composer global require "laravel/installer=~1.1"

ENV PATH="~/.composer/vendor/bin:${PATH}"
