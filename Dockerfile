FROM php:8.1-cli-alpine

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /app

CMD [ "php", "-a" ]