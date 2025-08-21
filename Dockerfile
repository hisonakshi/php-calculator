# Use official PHP with Apache
FROM php:8.2-apache

# Copy all project files into Apache's web root
COPY . /var/www/html/

# Expose port 80 to the outside world
EXPOSE 80
