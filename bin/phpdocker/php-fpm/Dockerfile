FROM phpdockerio/php73-fpm:latest

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install  php7.3-mysql php-redis php-xdebug php7.3-bcmath php7.3-dba php7.3-enchant php7.3-gd php-gearman php7.3-gmp php-igbinary php-imagick php7.3-imap php7.3-ldap php7.3-odbc php7.3-phpdbg php7.3-soap php-ssh2 \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*