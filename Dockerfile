# Use a imagem oficial do PHP com Apache
FROM php:8.1-apache

# Instale as extensões PHP necessárias
RUN apt-get update && apt-get install -y \
    libcurl4-openssl-dev \
    && docker-php-ext-install curl pdo pdo_mysql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Copie os arquivos da aplicação para o diretório do Apache
COPY ./index.php /var/www/html/

# Ajuste permissões
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Configure Apache para ouvir na porta 8080
RUN sed -i 's/80/8080/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Configuração do VirtualHost
RUN echo '<VirtualHost *:8080>\n\
    DocumentRoot /var/www/html\n\
    <Directory /var/www/html>\n\
        Options Indexes FollowSymLinks\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
    ErrorLog ${APACHE_LOG_DIR}/error.log\n\
    CustomLog ${APACHE_LOG_DIR}/access.log combined\n\
</VirtualHost>\n' > /etc/apache2/sites-available/000-default.conf

# Exponha a porta 8080
EXPOSE 8080

# Inicialize o Apache
CMD ["apache2-foreground"]
