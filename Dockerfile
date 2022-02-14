# 2301864581 - Fabian Ferristo Tirtabudi #

FROM php:7.4.15-apache

RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R o-wx /var/www/html/

RUN docker-php-ext-install mysqli

COPY index.php /var/www/html/