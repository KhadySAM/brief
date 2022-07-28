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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'brief' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'UlR@V19!(d1KIT-Dsgk0$1,Ew2yc!NGv9Fn:B=46+kV4*e;P]3ZYiBi0JnFc0MU|' );
define( 'SECURE_AUTH_KEY',  'c]=GiL4Y9fRo%wA>=QZd_<C+:+s)Jt_:/V|}wq=hSWW|FnxCl#O$VoTsxjuu,2!]' );
define( 'LOGGED_IN_KEY',    '!d>9<?HeeI.itwy;|Qe/4y(b45s1U2Aq3<8W|owEb(?B3]4-!4*ziFMp2{Kvnx5R' );
define( 'NONCE_KEY',        '~,9WzQ^GF52jC&d6agMFX@BS$4{=8>n0bN@aUPDRtfR}7+/<]jgHF{[_,i3js<eZ' );
define( 'AUTH_SALT',        ' ]A(U+Bg>WsD6%X ksS]0OvySjF/o%)L(|duN`qdseRjSP`*x`;Y9=8]^@.<>tR9' );
define( 'SECURE_AUTH_SALT', 'DP_A[+oaB>vGxx=`(u0GkI:H}Lf4RdDcBR$O`{_C[fWsST,-)EHs<{OCkZ|i:7H|' );
define( 'LOGGED_IN_SALT',   'op[JWXrt)ogO2nbKQ_:SSH-%5ffmW%7}O(`/:H^O0uX%<nC}n;B%VEalI,#U+whP' );
define( 'NONCE_SALT',       'E5R`WDb`AL-3%ipGWGSPGvHvusIWY5~_PL3|Ug;$LL8n:Y7iwFw;]$5-I6cu/z!3' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
