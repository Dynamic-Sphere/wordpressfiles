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
define( 'DB_NAME', 'ok9c44253549873' );

/** MySQL database username */
define( 'DB_USER', 'ok9c44253549873' );

/** MySQL database password */
define( 'DB_PASSWORD', 'C|3kx4dZ3dV#R' );

/** MySQL hostname */
define( 'DB_HOST', 'ok9c44253549873.db.44253549.8c8.hostedresource.net:3310' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'XQ4cpYnUsMNXZs!N2 4K' );
define( 'SECURE_AUTH_KEY',  'UqgP@w$/9#+-WGkn-ZWI' );
define( 'LOGGED_IN_KEY',    'B/+36aXGn9K(SNM#LP-g' );
define( 'NONCE_KEY',        'b-N+8DqNrjKnAWkK=/mO' );
define( 'AUTH_SALT',        'DBr0+wt/vAjzIFGG$PJ!' );
define( 'SECURE_AUTH_SALT', '8IpJ0gITPv##R$!rBVxV' );
define( 'LOGGED_IN_SALT',   '4JF%-50/M$b5mzcwW8Lv' );
define( 'NONCE_SALT',       'j1R3H8CS Y&T5wJYY7BE' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_yk0t038f1b_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'WP_CACHE', true ); // Added by Hummingbird
require_once( dirname( __FILE__ ) . '/gd-config.php' );
define( 'FS_METHOD', 'direct' );
define( 'FS_CHMOD_DIR', (0705 & ~ umask()) );
define( 'FS_CHMOD_FILE', (0604 & ~ umask()) );


define( 'FORCE_SSL_ADMIN', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define( 'WP_HOME', 'https://dynamicsphere.in' );
define( 'WP_SITEURL', 'https://dynamicsphere.in' );

define( 'WP_MEMORY_LIMIT', '256M' );