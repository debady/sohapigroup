FROM php:8.2-apache

# Copie les fichiers PHP dans le conteneur Apache
COPY . /var/www/html/

# Active mod_rewrite (utile pour les frameworks ou URL rewriting)
RUN a2enmod rewrite

# Expose le port
EXPOSE 80
