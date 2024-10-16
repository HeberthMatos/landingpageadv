FROM php:8.0-apache

# Habilitar mod_rewrite do Apache
RUN a2enmod rewrite

# Define o diretório de trabalho
WORKDIR /var/www/html/

# Copiar todos os arquivos para o diretório do Apache
COPY . .

# Expor a porta 80 para o Apache
EXPOSE 80

# Definir permissões apropriadas
RUN chown -R www-data:www-data /var/www/html

# Adicionar configurações básicas do PHP (caso precise ajustar algo no futuro)
RUN touch /usr/local/etc/php/conf.d/php.ini \
    && echo "display_errors = Off" >> /usr/local/etc/php/conf.d/php.ini \
    && echo "memory_limit = 512M" >> /usr/local/etc/php/conf.d/php.ini
