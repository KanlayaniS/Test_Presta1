FROM prestashop/prestashop:latest

# Copy project files
COPY ./Project /var/www/html

# Remove the install directory
RUN rm -rf /var/www/html/install

# Remove the admin directory
RUN rm -rf /var/www/html/admin

# Set permissions for www-data user on additional directories
RUN chown -R www-data:www-data /var/www/html

# Expose any other ports that the app may rely on
EXPOSE 80