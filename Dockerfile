FROM php:7.2-apache
WORKDIR /var/www/html
RUN docker-php-ext-install pdo pdo_mysql
EXPOSE 3000
EXPOSE 8000