FROM php:8.0-cli-alpine

RUN apk update && apk add unzip

ENV COMPOSER_ALLOW_SUPERUSER 1

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

WORKDIR /app