# Use official PHP Apache image
FROM php:8.1-apache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Install required PHP extensions
RUN docker-php-ext-install mysqli

# Copy project files to Apache directory
COPY . /var/www/html/

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html

# Expose Apache port
EXPOSE 80

CMD ["apache2-foreground"]



