FROM php:8.1.19-apache
RUN apt-get -y update \
&& apt-get install -y libicu-dev \
&& docker-php-ext-configure intl \
&& docker-php-ext-install intl

# Habilitando a biblioteca intl no container