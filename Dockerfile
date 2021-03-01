# Use the official PHP image.
# https://hub.docker.com/_/php
FROM php:8.0.2-apache

# Configure PHP for Cloud Run.
# Precompile PHP code with opcache.
RUN docker-php-ext-install -j "$(nproc)" opcache
RUN set -ex; \
  { \
    echo "; Cloud Run enforces memory & timeouts"; \
    echo "memory_limit = -1"; \
    echo "max_execution_time = 0"; \
    echo "; File upload at Cloud Run network limit"; \
    echo "upload_max_filesize = 32M"; \
    echo "post_max_size = 32M"; \
    echo "; Configure Opcache for Containers"; \
    echo "opcache.enable = On"; \
    echo "opcache.validate_timestamps = Off"; \
    echo "; Configure Opcache Memory (Application-specific)"; \
    echo "opcache.memory_consumption = 32"; \
  } > "$PHP_INI_DIR/conf.d/cloud-run.ini"

# Copy in custom code from the host machine.
WORKDIR /var/www/html
COPY src/ ./

RUN a2enmod rewrite
# Use the PORT environment variable in Apache configuration files.
# https://cloud.google.com/run/docs/reference/container-contract#port
RUN sed 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf
RUN sed 's/DocumentRoot \/var\/www\/html/DocumentRoot \/var\/www\/html\n  \<Directory \“\/var\/www\/html\”\>\n  AllowOverride All\n  \<\/Directory\>\n/g' /etc/apache2/sites-available/000-default.conf

# Configure PHP for development.
# Switch to the production php.ini for production operations.
# RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
# https://github.com/docker-library/docs/blob/master/php/README.md#configuration
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

RUN sed '/pdo_mysql/s/^;//g' "$PHP_INI_DIR/php.ini"
RUN sed '/pdo_sqlite/s/^;//g' "$PHP_INI_DIR/php.ini"


RUN apt-get update

RUN apt-get install wget -y

RUN wget https://dl.google.com/cloudsql/cloud_sql_proxy.linux.amd64 -O cloud_sql_proxy
RUN chmod +x cloud_sql_proxy

RUN mkdir ./cloudsql; 
RUN chmod 777 ./cloudsql

RUN ./cloud_sql_proxy -instances=finances-jdfraire:us-central1:root=tcp:3306 -credential_file="json/finances-jdfraire.json" &