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
define( 'DB_NAME', 'db_khajaexpress' );

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
define( 'AUTH_KEY',         'x4.|I;$7J43~%.kk~tZ+[@4M,+]ITc&Eo%khR;R7(~6!6J(u%W9_{:U*&R v7}.r' );
define( 'SECURE_AUTH_KEY',  'eE_$F_6rXKl[fhuhy4*erY:V,~keLoExP-v^2G4=RZQQPxuE@VoFag{.A/VFy;IX' );
define( 'LOGGED_IN_KEY',    '!Ws~b;SN_7Um=_y{+@:=/tYb#KEGv_)>>3W41t-PV$O)4iv]3t bl.sI0IMYZ+`a' );
define( 'NONCE_KEY',        'Vf]_N5L L2Wu5apRFL<x]E=Ps}>e.dV,sukF9a}r/ho(4.R.#.}_?*0z,^`}R]DT' );
define( 'AUTH_SALT',        '}xJ>cmUWW!eZOA0}-YqN `2z](QQSV5i?gx2GTd$%0]&a:5!bYbO$?yz00ff,+N[' );
define( 'SECURE_AUTH_SALT', 'a`.qh/EExy~USMoM9.djOTabD.PO_}:f9vSl.CB8PYw9|sYTzQ= dCr!Y*bQ7{}c' );
define( 'LOGGED_IN_SALT',   '1du))U& cegT<9POpSWJpMc9^+pjAI-rCDZJ;IszTLO}oaF@j2Y*eV`vK~D+O~ba' );
define( 'NONCE_SALT',       '<vv)$wugo{Gt#k,TZ&}Z<Bx>Ixlt0XYu g]V4;4-m,q^sbDjsWta7!]m-=n,U(Nn' );

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
