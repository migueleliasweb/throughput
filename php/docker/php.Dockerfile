FROM php:7.1.8-fpm-alpine

COPY app.php .
COPY composer.json .
COPY composer.lock .
ADD https://getcomposer.org/download/1.5.1/composer.phar /usr/local/bin

RUN chmod a+x /usr/local/bin/composer.phar && composer.phar install -o
