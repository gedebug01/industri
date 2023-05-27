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
define( 'DB_NAME', 'industrial-wp' );

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
define( 'AUTH_KEY',         '9zerT+{~u(`,Li=XP1W#`W|a=m=IZ8WjZ3YG_kS;pCw47wnH2`Q_A@rVJ Z[NKBT' );
define( 'SECURE_AUTH_KEY',  'Ciz_Ud{sDacBw6xF3<P`Z]vP&^6{NkOul/r!2zZ^iTR@maQGfkxjf[D&I~LE]8Lq' );
define( 'LOGGED_IN_KEY',    '!JN3;#GPcF^-sMf7Gq)~^(Llc5_m}|#BF:bxroxNNWt n2Yr*iTfVgJD#bpi1e6k' );
define( 'NONCE_KEY',        '`89GBQW$A*/Q7V;oXtY%9 6_7R?gw@&,LE*5D*HjkX5d]je@AuZ6jLS.yEluKox|' );
define( 'AUTH_SALT',        '%TQ]&_bM.13D[KOsply02DG+SI-hk}`*uM:-RGDt7XaGJ~B7{v>7Q5t[QsIQ/G$P' );
define( 'SECURE_AUTH_SALT', '7+~`K,`2U),&Y$E[bV`x9g@vWy`[~q%npu!.)KX9T>&,NWs95!T0qVN<YjCa4YW`' );
define( 'LOGGED_IN_SALT',   'N{QgoC>e15fA|AP1{P3{q!72G_P@:W`?xl0()5Tn:hkrKGI1W*L-r.6k;O$h-?pD' );
define( 'NONCE_SALT',       'rfk_#agf(;tlQLVD4Wv9AF<6Y7&P?Panxa4m&k@NyF*x|h_!y6A)@?,uN42P</%e' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'iwp_';

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
