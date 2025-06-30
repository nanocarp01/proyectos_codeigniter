FROM php:8.1-apache

# Instalar extensiones necesarias
RUN apt-get update && apt-get install -y libicu-dev \
    && docker-php-ext-install intl mysqli pdo pdo_mysql

# Configurar DocumentRoot
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf /etc/apache2/apache2.conf

# Activar mod_rewrite
RUN a2enmod rewrite

# Copiar el proyecto al contenedor
COPY . /var/www/html/

# Cambiar permisos
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Exponer el puerto 80
EXPOSE 80
