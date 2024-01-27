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
define( 'DB_NAME', 'darmaan' );

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
define( 'AUTH_KEY',         'I9fYWdI^pc=iO`t6QKJ0Ytjw12k@N%l5ry(KV] {63kh>$3F1ij=Vn54^41}jyME' );
define( 'SECURE_AUTH_KEY',  'q*K$Tk:6$_>:bN[_zRIc??p3dvY1`s6&]WV07c3IGLjtJ&E3?.?apY]=wWvmSr<X' );
define( 'LOGGED_IN_KEY',    'q}j9-u6Yi4mbIJLlg&N10eqZn&UW`>&#;zQOjdCI|gT1+SC =hUT2kYy[7<`.M:k' );
define( 'NONCE_KEY',        ':hDCzp]{j(@aLO|AyWQ)H0J4QbtiY47[6)@grX%.1TM02!pP>0Gzvp,x`itwdNiZ' );
define( 'AUTH_SALT',        '[3^&--pc@P4<g)1h^bv:x~&P/%MNu8rRn>dR o~z{t7-D4.TK_Ao*B:}oGBrYJMV' );
define( 'SECURE_AUTH_SALT', 'Fkj^`cs<7+16!o8EB~*q zK-XV%bk#|}.i9+3p^.sci)kXXIFTwl(;p;ri_0gpjs' );
define( 'LOGGED_IN_SALT',   'wF3,dH~G&Q.p<1cAlnUHJ~Y<p!sa:c4,.{66!,D:_b,i^Ud(y4azzW!DgP7F*Q*g' );
define( 'NONCE_SALT',       '`);nTTK!j anUr_SZaX*n%h5<b#oHb_=i9E(v@i#y*YjqQ4wZ[&N#Flbn{kKU;}7' );

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
