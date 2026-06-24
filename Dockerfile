FROM php:8.2-apache

RUN a2enmod rewrite

COPY docker/apache.conf /etc/apache2/sites-available/000-default.conf
RUN a2ensite 000-default.conf

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN docker-php-ext-install mysqli pdo pdo_mysql