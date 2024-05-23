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
define( 'AUTH_KEY',          ';uZSX#)a!?yEko259I.FnNq@s`p=D)T/;h.%s:?o|:.<g8#:e>Ww:rZ. Mb(YSAV' );
define( 'SECURE_AUTH_KEY',   'kL)IR^$ZnD_+_}|j2gj]#!#i,1H&1Wj0(y?}1j3.9hW^@|l.65JUy(()U`MRTlz#' );
define( 'LOGGED_IN_KEY',     '[G Y.!MMHp(H!Gilk5:R?D E3o*oKfiv,d2Fq=Nu,Bx-QQlgJme8FSf`>2W2WR@u' );
define( 'NONCE_KEY',         '.- *FvlWW|O{ bTE-nsYCC1:I%DSZ?0]rzWzW5Agj#^6lhpHm.W*3K7;rL7~Y7V5' );
define( 'AUTH_SALT',         '=BCs&%Zh<lo`__$~?>b8x`4h1y-hiBDS QaJqR{l nT@+|`5<11WIlbdh@_b;P[a' );
define( 'SECURE_AUTH_SALT',  '{[=qfAd].} l6i&@G`Yt-<Opcn.)[AjZ&{[|#YH[@it|t%pg1@}Mo[~W)}>n^_q,' );
define( 'LOGGED_IN_SALT',    'b Xv=oOY+SIxWGQPD+!/*ZY_AYSBZB&RC;At(R?tB!<!3BFbKSy^|CJ.F(Ko8Dwy' );
define( 'NONCE_SALT',        'zp`hQWxyQ/0jb=#pnY.U:{x>7p[GW*lYw+3fH{_l$&&o/NQs8s(=igo}/&B[T6g)' );
define( 'WP_CACHE_KEY_SALT', ')]mB=XW%Hw5=O8pl`i7{qPX(HrBmn5aaR48&BV<^J[AW`DW14+@O3%l-cc>^;|1-' );


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
	define( 'WP_DEBUG', true );
	define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
