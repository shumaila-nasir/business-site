<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'business-site' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3brBkfs8PuFF5Q00bD5EUkurYZaTNYSYq8WRdAYwHS4GO2QlbIpzbTBI0isRGBLe' );
define( 'SECURE_AUTH_KEY',  '9rrraiUhmcSua9o0Cm1P8uZKA9zwTrkBVL191Dw5bugAANqjc1lSsIXuBCK6JT6R' );
define( 'LOGGED_IN_KEY',    '3U3McOsYxjk0ST1NTe5qjwm34kv6Nu89w2DO48ILFAOuseTsDlLRk1vMlVHMX7I6' );
define( 'NONCE_KEY',        '2RFkqgwhRoXBUjkjwjN8WauU1VNo69UQmIS3gqvO9KW7yWYXTe8gXn70OvwRfuuc' );
define( 'AUTH_SALT',        'S3RRPQduGRAJuQaiLN1aFi8KDlWV4tnSL2PHz2GgHVEHl6BOpTDY7UZq0dG4L96T' );
define( 'SECURE_AUTH_SALT', '4vs6dSkO3S0ONAmwvlLVR0C0V8SeyPx0iaOxO2NUgFz2iSZRi4Drm5KfXe399ZxS' );
define( 'LOGGED_IN_SALT',   'mjqBcwOYCxhhactf5vI0EwuYTsXRS1mjugBrDMG3QQzCUISoWCeNhFhvJZSogKxn' );
define( 'NONCE_SALT',       'BZEd9yBrNScCEnBG9ThtP61tRSrRNfcf4UvOkIlNvJcm2v4vHFhpx0snSIimYb9J' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
