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
define( 'DB_NAME', 'wp472' );

/** MySQL database username */
define( 'DB_USER', 'wp472' );

/** MySQL database password */
define( 'DB_PASSWORD', '3BD-S(5p3A' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'dhxh6vuojupfwqlg9x2xeb7sma59djjd6tvjpeklifoesbzwz7yolo2g8ijryhky' );
define( 'SECURE_AUTH_KEY',  'pxfrld2x4yemglxtei9vzuawebw0qlgkh3cubq7h5wkebmbl0t9dncrsruujjzj0' );
define( 'LOGGED_IN_KEY',    'bi8bxoydlekkwh2ysr97ucizpi7noyrjqvgnppgycxjetf2nbzbwonmbvwqy4rvx' );
define( 'NONCE_KEY',        'r0h5btmkkrkiyswbdywxgdbdrzo6dwpzq3lunh93yossb917xrzuszu6dzpy5yxh' );
define( 'AUTH_SALT',        '16324qem1kocym72gz7mobjed9zlvxwvp67slbxp4ez5rhkevvyhkko5aczpmfmp' );
define( 'SECURE_AUTH_SALT', 'i3tqkrofox5qph5ofjaugdkqaqkzfzmase6uf3u8gqxed5gejvgh7k4sungmnh9e' );
define( 'LOGGED_IN_SALT',   'osskrobo4b4awswrnd3xjktxzszlcwaoyxinlvbqzpb9hrmwo6ezizeaa48vgf53' );
define( 'NONCE_SALT',       'azjhfczq2zmqatncz0alanmxxzbmbs8bcbptrvd0qkg6d7ocpfn3weyvgquy18pq' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpoo_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
