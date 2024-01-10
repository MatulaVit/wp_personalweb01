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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_personalweb01' );

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
define( 'AUTH_KEY',         'g,$Q %>qD9J0BPXo&K_I{{oAjt00i-}_4<0pJ{hBSxa9.}UkC_giu99QQ!V rN^^' );
define( 'SECURE_AUTH_KEY',  'uy,[JZb+(rdgMB>wnxQq:%2JNhC<Z9^1Q8m&@!:OiLIO,J|^D[rc4R.(ie0Xz-xM' );
define( 'LOGGED_IN_KEY',    'zQj>9Oz[E&1VXXB~B]|Db0SX$nx`x:<NOXHnZ#!A*AagV]% pN`bmH_8!,swpO<@' );
define( 'NONCE_KEY',        '!u9c2=.m0AmVxkhcyE*|oAL,..9}ft1)LXfp43.iBx82s4@;!o(vDi]wd{;/CI~~' );
define( 'AUTH_SALT',        ',gd6T,Z]KFBx3MeQ;6wU_K@i$^als}U=$TZ~%+QJXFoRLle9~L%g$86?*0+n&fM[' );
define( 'SECURE_AUTH_SALT', '/ /Ym0%8yMcq2V_mK4b=f>^So@%hDZ:[grMK5i)<Ht{e|E#B9ub!;&-gL9mFY`EZ' );
define( 'LOGGED_IN_SALT',   '<Qeo8;5v[;%nE/2S4tA5c>xUCzALS]OY/^K1$yneF3bBCS>F~<+XzG]JPb81lA}5' );
define( 'NONCE_SALT',       'a]Vp<f>P!)Nql%%8;@]tST9GyC3E+wqy]nq,d/D@P.C>((p*cMi#d!h|e/^(,ow}' );

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
