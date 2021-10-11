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
define( 'DB_NAME', 'vigor_crossfit' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define('AUTH_KEY',         'Gy#f]eq%Jr^,P-9}G)-+rkq|ow9`xSJ|D<njG$K<:-Hhc4m02H8z$O89Rlev?MI:');
define('SECURE_AUTH_KEY',  '$P-wbcG]0& hlgM! @C!+I!b{(#W*SYs|=DR`n1==FeaU3f|bLN$Q@` #k}%$Pai');
define('LOGGED_IN_KEY',    '`W8> CT` x|JSvy>ct-?QcLI(GC$+Y8a?<fHnclr(>K w,L9 <v%E$o,9s8d*S-`');
define('NONCE_KEY',        '-3C|^hCXf;4)Ey3t&xwMLaTHaOg&5|Xo(}4yT+Z[rW(x1a?hZQ$ylPV*L&XND}^`');
define('AUTH_SALT',        'wVewg{x0|+zyQ`%{^z[$V-:[SKGUIFjIsOOO)W*LuBiq$?#<eG!P.{?b&xC;`#iC');
define('SECURE_AUTH_SALT', 'zIWf^fp7Ri8S~U=e%hP duWNUXCJ$$K=$fb] #2K#EmY+o^_Jq;Uh,;nFodmzq7M');
define('LOGGED_IN_SALT',   '4?:vDHm2&Kd!*d uMy{`)WBn+hK**;VK3#7$~?ai23r9ry=/r|Y)%jEbUOEpWX-9');
define('NONCE_SALT',       'Zt)bR;{ik/Ivf~p~+@v>5Ixr|cQN;(-O{.+`&HKC#$iK2X/gXm+lZf?GSRD86 ~N');

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
