FROM php:8.3-apache

# copy source files
COPY ./public /var/www/html
RUN chown -R www-data:www-data /var/www/html
