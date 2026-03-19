#!/bin/bash
set -euo pipefail

# WordPress がまだ展開されていなければコピー
if [ ! -f /var/www/html/wp-includes/version.php ]; then
    echo "WordPress を /var/www/html に展開中..."
    cp -a /usr/src/wordpress/. /var/www/html/
    chown -R www-data:www-data /var/www/html
fi

# wp-config.php が存在しなければ生成
if [ ! -f /var/www/html/wp-config.php ]; then
    echo "wp-config.php を生成中..."
    cat > /var/www/html/wp-config.php <<'WPCONFIG'
<?php
define('DB_NAME',     getenv('WORDPRESS_DB_NAME')     ?: 'wordpress');
define('DB_USER',     getenv('WORDPRESS_DB_USER')     ?: 'wpuser');
define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: 'wppass123');
define('DB_HOST',     getenv('WORDPRESS_DB_HOST')     ?: 'db');
define('DB_CHARSET',  'utf8mb4');
define('DB_COLLATE',  '');

define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

$table_prefix = 'wp_';

define('WP_DEBUG',         (bool) (getenv('WORDPRESS_DEBUG') ?: false));
define('WP_DEBUG_LOG',     WP_DEBUG);
define('WP_DEBUG_DISPLAY', false);

if ( ! defined('ABSPATH') ) {
    define('ABSPATH', __DIR__ . '/');
}
require_once ABSPATH . 'wp-settings.php';
WPCONFIG
    chown www-data:www-data /var/www/html/wp-config.php
fi

exec "$@"
