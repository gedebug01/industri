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
define( 'DB_NAME', 'inds' );

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
define( 'AUTH_KEY',         '4p7:S}y?Zyfe1_dg~_~4c.)Fb+h!auo@uLmv{H5WDd.1}3a%0<)P*pwZ<|4W_IT2' );
define( 'SECURE_AUTH_KEY',  'Fo$x QF9LL7S@cmP#E^0}d:vXyZ^pPq6/6i7f^v_q%m&v;_j)swq6:~C(7FuPGqc' );
define( 'LOGGED_IN_KEY',    'zx%Ja<C!gQ$BN<Zc~oY/7(N84A90<6(-5;9+wJ|9=fY!d !~|KoZ$#f@6[,vE||>' );
define( 'NONCE_KEY',        '%@OFO8UK*zQRII|2}._@sh#BcZAyUIXJpeG+n7wf-+MVk*pzo?F0:wo]@.JvVxYS' );
define( 'AUTH_SALT',        '<1sX-E:xYKNj/5%3WjTmYymjDx7CB7!i8at6P]!L}As>35tJ4Vhqs`Hld=rD0-bY' );
define( 'SECURE_AUTH_SALT', '9g `?W7;@,i[77~g*vaumChQVVn|MS2$70jV}{1GY<7{7n~gNzqY=T^M[`j&pM(H' );
define( 'LOGGED_IN_SALT',   '(}^CTZZY1IUw3}yLU_`Gy+ PqiM#q047C%zXZtyzojobFsGd(Au(>r, S[j@N]{c' );
define( 'NONCE_SALT',       'rv(,-^4u?q)@tJLlZ:J88jF(Po(A<)Ih2+>XyyOb6YC{pO)wd7{W^Jwvks#(?m_x' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ind_';

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
