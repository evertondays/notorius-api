# Dockerfile
FROM php:8.3-fpm

# Instala dependências do sistema e extensões PHP necessárias
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Instala Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Define diretório de trabalho
WORKDIR /var/www/html

# Copia arquivos do projeto (se já existir) para dentro do container
# Se você ainda vai criar o Laravel do zero, pode deixar só o WORKDIR por enquanto
COPY . /var/www/html

# Ajusta permissões (útil para storage e cache)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Porta padrão do php-fpm é 9000
EXPOSE 9000

CMD ["php-fpm"]