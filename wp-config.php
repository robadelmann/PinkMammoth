<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home5/pinkmamm/public_html/prod/pinkmammoth/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'pinkmamm_wp1');

/** MySQL database username */
define('DB_USER', 'pinkmamm_wp1');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gjj7BUsuXuY7jhwKzpq0piVKgkPXMzN6OxpTvYvFM7Rhd9C58II1r1XlNqTusj5x');
define('SECURE_AUTH_KEY',  'l58D8rd3SUAQ7CnChUeRkV8XPRnapLFiOG4zSUXWhoFiy19XL5PEFb53sGgrRD6Q');
define('LOGGED_IN_KEY',    'OJ6IU4tzB4POftAAcvIdNxWj0UXUOXam3b58OdPGsmJE3sMZDfP7Vq8YEa3tw39N');
define('NONCE_KEY',        'cwDtqjIFDjTGDSrl79b2mSF9lBPs0AQdWui5aECnbrklI69tfEEE9bAjbTrA2taH');
define('AUTH_SALT',        'YbwBLzlzXKjPKQmp5GV5GZNs8HaglSSH3wpniNFmkPDO3Zf4M2VhAr21X4AS6IUW');
define('SECURE_AUTH_SALT', 'CuoaH17USYmCUpqZfk92TEWnfMPnYmWFeNghZxXvoM4qXzOYzT61AKf5GGQmIKXI');
define('LOGGED_IN_SALT',   'kPKLsgluhIHWreiyoCW5YcWcmn0YVcMR5aKMX9pzikKcmQLjn9VEju9MicnXLA2N');
define('NONCE_SALT',       'GHKc3DyGz6udUKScnzQ7Q3uYV4cKXnueN6OVr80XbWcGoM0WhIAC7alpXWFFfykT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
