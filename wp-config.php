<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'fahad' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         ';n5 1|V4t:2.q^XN~1Z2,$`N4w9. R9Z=+zAq/3~zN(sf>/;|&<VLkimNoV,,9eZ' );
define( 'SECURE_AUTH_KEY',  'odAx5<6_W(t[:6/*>~uP*8t1]fkf{E5I3:g6*gznjfNJJXb0Qd?GDsk:efSMC&c*' );
define( 'LOGGED_IN_KEY',    '?8?. }xce~( g2!BsW^;^Of$d[Hs*$oy,<|e^O]?:t&HdZxyswDc)K|^g^>u7UUz' );
define( 'NONCE_KEY',        'q|2Pa`<&#zV+8oW:sP*|UG:OM0gBJn!oUiN9(Uf2d9P6me*s%4KiAGEm>U>OPB|S' );
define( 'AUTH_SALT',        '62>)~1FAFiE&%8>ST;Z6/(3hjz<C>>WuE7:-N>y1Wl5S([{a3gf%onY{,< .um`5' );
define( 'SECURE_AUTH_SALT', '/!}i-nFNbHS}4X.?BM7zZC1-yJ[j>_3tJdEYnO}Iv48RjMP8?|&r{M(7;jv /XG@' );
define( 'LOGGED_IN_SALT',   'rn1R*Ecv3m>fttp4r==c],5lc:k7B3Why}hyID#& ^9#:<*&kop2rXzzJ;^6AaV ' );
define( 'NONCE_SALT',       'tir_5Ch7!kfbQ!iZqfsqS@D{aFvUGNM|^o<1<f0*?HFBj$F7eTitAJ=%h4G`^6kJ' );

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
