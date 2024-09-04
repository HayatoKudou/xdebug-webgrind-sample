FROM php:8.3-fpm

RUN apt-get update

COPY php8.3.ini /usr/local/etc/php/php.ini

# xdebugバージョン一覧: https://pecl.php.net/package/xdebug
# PHPバージョン互換性: https://xdebug.org/docs/compat
RUN pecl install xdebug-3.3.2
RUN docker-php-ext-enable xdebug