<?php
// ** Database settings - You can get this info from your web host ** //
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'password');
define('DB_HOST', 'db');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');


// ** Authentication Unique Keys and Salts ** //
define('AUTH_KEY',         'fdc444287751b0c4cf4a18b83f35368e4288ea5a');
define('SECURE_AUTH_KEY',  '0b85b955112c84d25438012175db626cb8249c09');
define('LOGGED_IN_KEY',    '3561e34f17cbf24b532c842cca2126bbc7c596c2');
define('NONCE_KEY',        '0107087d551b40b9d9ef900eec84b8dc6723f493');
define('AUTH_SALT',        'a105505a5a01a3e8baa7889619cb8d3935a55828');
define('SECURE_AUTH_SALT', 'e945f3c3b731562d44978bf50b20be574d3594d0');
define('LOGGED_IN_SALT',   'ecb43becada17983afd807bc7ad8da8b16badc69');
define('NONCE_SALT',       'c1a1301fda6208c3dd33a8fc4e504262de2e3c3b');

// ** WordPress database table prefix ** //
$table_prefix = 'wp_';

// ** Define Site URLs ** //
// Adjust these URLs based on how you're accessing your site.
// It should match the NGINX configuration pointing to the /blog path.
define('WP_HOME', 'http://localhost/blog');
define('WP_SITEURL', 'http://localhost/blog');

// ** Debugging settings - set to true for development, false for production ** //
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);  // Do not display errors on the page
@ini_set('display_errors', 0);

// ** Reverse Proxy Compatibility ** //
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    $_SERVER['HTTPS'] = 'on';
}

// Disable file editing from the WordPress dashboard for security
define('DISALLOW_FILE_EDIT', true);

// Set the memory limit for WordPress
define('WP_MEMORY_LIMIT', '256M');

// ** Absolute path to the WordPress directory ** //
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

// ** Sets up WordPress vars and included files ** //
require_once ABSPATH . 'wp-settings.php';
