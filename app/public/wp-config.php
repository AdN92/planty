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
define( 'AUTH_KEY',          'iy{X[q%$.B2B[hbAkHU|bn-Z))Xd>iH5AvD+4?FbC]Gz_fBP:(Duy(sB$<A>`zYJ' );
define( 'SECURE_AUTH_KEY',   'R>zgoa!u%u>Gr>*r$@J!fCSj%G15G}2APxW/{vAkQgeZ(vmIrtkDabpLFPPtZXLl' );
define( 'LOGGED_IN_KEY',     '%&lC.3Uy~:BxAD`1!37nc,Pxw Qv8Qv^4-YSE9KfSe9]Vdmz/&pEqF`MJKx)^2fI' );
define( 'NONCE_KEY',         'p2bn2b5OTn9y+w0L:)KX3|<?jABAQe.eR JwuI!F7-TusnK1I|Nn9NJ!cspFT(:$' );
define( 'AUTH_SALT',         'E_W9&Hz/8=!$71s[ehTx}lw3TC(r!@9=48r~P?}1?4CKfc62 q-9_B.vBCR/@o~L' );
define( 'SECURE_AUTH_SALT',  'y6kDbeMNWweY,B*O%yR!#|6O=lD<QbMjAa-?D>R79cOjWg#]PV)EL2 AX{.D~K~m' );
define( 'LOGGED_IN_SALT',    '08b*0ap&sH>ob$HKdzo9xRgVs>@JP1, =&X1k]4]-|J.6NLVMK:d]XP?-v4~!TpL' );
define( 'NONCE_SALT',        '}t,5BsXX0K7#HE0I /SPu!d_X3EN)@EZ^yaINv{;bC<4d%-L;U,?PIQuBA|yD%^X' );
define( 'WP_CACHE_KEY_SALT', '.f]Cc9C1c$x i?`6i1dI-BP9iE^h;+%F8%R/l^/VrC?I5lguWZ2,G!kM`.u<.^ST' );


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
