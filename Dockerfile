FROM php:8.1.6-apache-buster

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www/html/

RUN echo "Instalando dependencias..."

RUN apt-get update && \
    apt-get install -y \
	zip unzip git libmcrypt-dev libxml2-dev libpng-dev libzmq3-dev libzip-dev libkrb5-dev libc-client-dev \
	libnotify-bin zlib1g-dev libicu-dev

RUN echo "Instalando PHP plugins..."

RUN docker-php-ext-install pdo pdo_mysql \
      && a2enmod rewrite negotiation \
      && docker-php-ext-install zip \
      && docker-php-ext-install opcache \
      && docker-php-ext-install gd

RUN sed -i "s|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g" /etc/apache2/sites-available/000-default.conf

RUN service apache2 restart