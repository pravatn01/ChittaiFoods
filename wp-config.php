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
define( 'DB_NAME', 'if0_35394515_wp488' );

/** Database username */
define( 'DB_USER', '35394515_1' );

/** Database password */
define( 'DB_PASSWORD', ']7uSp]07G1' );

/** Database hostname */
define( 'DB_HOST', 'sql204.byetcluster.com' );

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
define( 'AUTH_KEY',         'jnlyswuc1uwunneke3jz4k3z03h6frbox9a3nyoltgp8w6kdd54jfkbcb5oksgg2' );
define( 'SECURE_AUTH_KEY',  'arjq8w8yn7chhpeozozq3x0rbqrxomgrjzhpebs7yfcmkclfliso4ihqzu8zlyxu' );
define( 'LOGGED_IN_KEY',    'a42nckhuhldppg9nkctt9jlr9c3ukpqn13sdnvanuzhsathaqglvufsfpiemmdcg' );
define( 'NONCE_KEY',        'zskzcpewzmfm7raxnrmyyhophae3aesmrcpivl48028z2n6ddubafzevz6it3kxu' );
define( 'AUTH_SALT',        'p31bgeilthb6nnkjvtlekzqbtm9vfl4yc8ia7xzcc8ymfjuj5nd9u0tezpynvnb3' );
define( 'SECURE_AUTH_SALT', 'sc3wbazjbqvc1tyy6vs0da80xvpkqfskvvwgynoyytcatdas4wo7gkzbvhseuaud' );
define( 'LOGGED_IN_SALT',   'vwqnlwjag8hy0ubztfxbgkktdfnia4awi1r28wcnsimb2fec1u6hbta0mk6cive6' );
define( 'NONCE_SALT',       'xgxjebgqogqpzuewfq38w5xfgcybbgvw21snalw3fnnrxnllwdcjqmjkk2s7pc86' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpq8_';

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
