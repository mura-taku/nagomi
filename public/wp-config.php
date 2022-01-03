<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'N2weAvZbuhkjrCp5tfRBZrm9y1uF232+UdloWmd+oFIZjILJi+Tkv9dxvqy0HexWOlds647YmTSZ08sUlqhfvA==');
define('SECURE_AUTH_KEY',  'vNw1h4qIeSYEKyReVA2hrSNphUvv48Atui83sRCzJy7NfeaydZPSD8Ua4klN5jVGIXUzOandq4yXHxTGxXGmNA==');
define('LOGGED_IN_KEY',    '+rci5ZCuxBUTqdepueg3V9ufVmnFXkKohhVLrJaSIDPi4yT/rdwtqXDbxEwIXqGdcrAkK7haP4ATE4ZhhkB8HQ==');
define('NONCE_KEY',        'gcaoiDA9oI7fHG4EnzHhfhdly0WVzV9Hmd395adqds2ilaIn1HLvmlYEL4PrJDvcZOB7vZV9sLrlqO7WfoPioA==');
define('AUTH_SALT',        'RSBbmUNtIlV+gwNf7SnfeLrextOITqrlPiKqGlxA0MWcYjH2CGP/QdqtbaXK3MssYb8uoaof4U0ySIWerCo5SA==');
define('SECURE_AUTH_SALT', 'E4oRoU89jq95xUWz5w5JbIYjEFdTNrcZly/B+8I8zZlfjAWuhMRQ6t9N3NXybNDS4If/a3Z4zojl4IUUjrSj2Q==');
define('LOGGED_IN_SALT',   'xiTyriE27ihtcVkB7fUaD8dEj/uDyBAjAswyGnSoGKMeLMh4sCOOXQAGzxv9BNZXXkiPKZR3JqmvFxmkJtbmEQ==');
define('NONCE_SALT',       'FH4bECzd66+IBaFfu5Jk2VssJeOPWZ0g9RoIgI+Eu8GN6kCLFrDEAOyiYYXiQnb0+2DXfyBgnECFu3QxUfEIWA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
