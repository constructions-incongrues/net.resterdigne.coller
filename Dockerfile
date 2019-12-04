FROM composer:1.9.1 as composer
FROM php:7.2.24-fpm-alpine3.10

COPY --from=composer /usr/bin/composer /usr/local/bin/composer

WORKDIR /usr/local/src

COPY ./src /usr/local/src

RUN composer install
