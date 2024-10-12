# Use an official PHP runtime as a parent image
FROM php:8.3-apache

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose the port on which the secure app will run
EXPOSE 9000

# Run Apache in the foreground
CMD ["apache2-foreground"]
