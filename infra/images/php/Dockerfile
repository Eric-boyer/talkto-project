FROM php:8.3-fpm-bullseye

ENV DEBIAN_FRONTEND noninteractive

## Installation des utilitaires
RUN apt-get update && apt-get install -y \
    curl vim nano default-mysql-client git zip \
    libmagickwand-dev --no-install-recommends

## Config Timezone
RUN rm /etc/localtime && ln -s /usr/share/zoneinfo/Europe/Paris /etc/localtime

## PHP Extensions & Composer
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/
RUN install-php-extensions gd pdo_mysql intl zip bcmath sockets redis xsl && install-php-extensions @composer
RUN install-php-extensions exif
# RUN install-php-extensions imagick
RUN install-php-extensions opcache brotli apcu
# Installer Node.js, npm et Yarn
RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash - && \
    apt-get install -y nodejs && \
    npm install -g yarn
# Installer Node.js 18, npm et Yarn
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs && \
    npm install -g yarn

## PHPCS
RUN curl -OL https://squizlabs.github.io/PHP_CodeSniffer/phpcs.phar && mv phpcs.phar /usr/local/bin/phpcs && chmod u+x /usr/local/bin/phpcs

## WHTMLTOPDF
RUN curl -LO https://github.com/wkhtmltopdf/packaging/releases/download/0.12.6-1/wkhtmltox_0.12.6-1.buster_amd64.deb && \
    apt-get update && apt-get install -y --no-install-recommends ./wkhtmltox_0.12.6-1.buster_amd64.deb && \
    rm wkhtmltox_0.12.6-1.buster_amd64.deb

WORKDIR /var/www/app

