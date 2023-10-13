<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ')#`xm,DLC?`6,43S*MI8(oA6X@+k)JnZQ,hc,+&FV:AUr1=`}bkH/-JT#jjUxMiX' );
define( 'SECURE_AUTH_KEY',   'Jh])Ysi7!B4> ;6Mpyt5,|A0;+VBwb/iGbh2Y_xeCr^LU8J,2c-@s}aa;6]YtA~,' );
define( 'LOGGED_IN_KEY',     'gmrgI7-|wQ6vMDDSI}>&pGjJCAP^{OdOjY)!Yp7H4Dgy>R9^Q8)D+TJ$_+K-vqU$' );
define( 'NONCE_KEY',         'y|R<7#1-BUW>a!b(5~pQeaWJ`E:;md(c-7Ja=(XJ>W{1, t&5CS7I1wfiGGD=/(<' );
define( 'AUTH_SALT',         '?(sy6O6Dx4]*/9/{,KJntDJEdEA+%Q~uC%8pYNmrc-x,?[QUUY0|#` hF.<+QiR%' );
define( 'SECURE_AUTH_SALT',  'E-R-v!{w;DtsOV^$X-s5ec97CS]_0%Fl&&2H2yF(A:6eO)CoMe`7+a92[REVKc`8' );
define( 'LOGGED_IN_SALT',    'Ng?FIu,%>UBO!:4HKeb4*r;c&0nx|{15if3$F9@0L1QSV2M3hRgkV,$QQ_e*?R{*' );
define( 'NONCE_SALT',        'C&/O~sAS[`0s_!Bz!z;[%kkNkW)NI=/|7.w)tYU!l7qsrikotpGuXMA`FrN~/U<.' );
define( 'WP_CACHE_KEY_SALT', 'ld`^vkOfj/BG|YBh}_Xf6T<f]bC8<wd>~h!7/g),4AaY6C08[j<os)]#84fYHr(=' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
