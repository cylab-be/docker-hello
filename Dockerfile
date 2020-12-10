FROM php:7.4-apache

# copy source files
COPY ./public/* /var/www/html/
