# Simple Dockerfile to run a plain PHP + Apache site
FROM php:8.2-apache

# Enable mod_rewrite (if needed)
RUN a2enmod rewrite

# Copy code into web root
COPY . /var/www/html/

# Set permissions (optional)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

# Default CMD is already apache2-foreground in php:apache images
