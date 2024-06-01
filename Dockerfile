# Usar la imagen base de PHP con Apache
FROM php:7.4-apache

# Instalar Node.js y npm
RUN curl -sL https://deb.nodesource.com/setup_14.x | bash - && \
    apt-get install -y nodejs

# Instalar sass
RUN npm install -g sass

# Habilitar el módulo rewrite de Apache
RUN a2enmod rewrite

# Crear un archivo de configuración para el sitio por defecto
RUN echo '<VirtualHost *:80>\n\
    DocumentRoot /var/www/html\n\
    <Directory /var/www/html>\n\
        Options Indexes FollowSymLinks\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

# Instalar extensiones necesarias de PHP (incluyendo mysqli)
RUN docker-php-ext-install pdo_mysql mysqli

# Copiar script de inicialización MySQL
COPY mysql-init.sh /docker-entrypoint-initdb.d/

# Instalar y habilitar Xdebug
RUN pecl install xdebug-2.9.8 && docker-php-ext-enable xdebug

# Configurar Xdebug
RUN echo "zend_extension=xdebug.so" >> /usr/local/etc/php/php.ini \
    && echo "xdebug.mode=debug" >> /usr/local/etc/php/php.ini \
    && echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/php.ini \
    && echo "xdebug.client_port=9003" >> /usr/local/etc/php/php.ini \
    && echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/php.ini


# Exponer el puerto 80 para Apache
EXPOSE 80
