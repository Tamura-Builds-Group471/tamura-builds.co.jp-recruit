FROM php:8.3.21-apache

# WordPress の依存拡張をインストール
RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends \
        ghostscript \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmagickwand-dev \
        libpng-dev \
        libwebp-dev \
        libzip-dev \
        unzip \
    ; \
    docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp; \
    docker-php-ext-install -j "$(nproc)" \
        bcmath \
        exif \
        gd \
        intl \
        mysqli \
        zip \
    ; \
    pecl install imagick; \
    docker-php-ext-enable imagick; \
    rm -rf /var/lib/apt/lists/*

# Apache mod_rewrite を有効化
RUN a2enmod rewrite

# WordPress CLI インストール
RUN curl -o /usr/local/bin/wp https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    && chmod +x /usr/local/bin/wp

# WordPress 6.9.4 をダウンロード・展開
ENV WORDPRESS_VERSION=6.9.4
RUN set -eux; \
    curl -o wordpress.tar.gz -fL "https://wordpress.org/wordpress-${WORDPRESS_VERSION}.tar.gz"; \
    tar -xzf wordpress.tar.gz -C /usr/src/; \
    rm wordpress.tar.gz; \
    chown -R www-data:www-data /usr/src/wordpress; \
    mkdir -p /var/www/html

# wp-config 生成用のエントリポイントスクリプト
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-foreground"]
