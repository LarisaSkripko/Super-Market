<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Super_Market' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'n0>&q_K)[}N%a~qDt&yiy1DA86pP3ia*@dv@^/+iT2e<)y.r~/#~V&>=K5AQ^7/!' );
define( 'SECURE_AUTH_KEY',  '&h>sved8l (x+ltYV/w%Y*|fcn*4yYu,#uxH4itWgZhCf:zF5LaFL^!?*HyvMX?c' );
define( 'LOGGED_IN_KEY',    'Z/{aeUZdLM:Fmtj|bP6>zQF JP78EWsvi7cgjjRvqorr;Il#zn=EqU>=hUC`~+NN' );
define( 'NONCE_KEY',        ')(!saqX,rh!dt,@qMd-X9Uj*/7K*hu3!`)/d)oaB<s:($6^<VXD9|37G+Ux_[sY2' );
define( 'AUTH_SALT',        'Umt2xVp#!UfOiX2mEm1Wi]#SnP|XlYE(i`cb$%VeeW>1U1>#}9Z:$qNRwY]- O a' );
define( 'SECURE_AUTH_SALT', 'mW=mBHmlB}K#^6w6Y}qr2N9ZZPc!Jyo%yh0Wit:~(Px+o)WFU@<(53B^78$OnF|)' );
define( 'LOGGED_IN_SALT',   'poXA(5}Z4cQkUc~#*bp {z4`x8!=Pf_0q9ZEo d*s3^8q7Bd8J3ViIgGgBlA:.pm' );
define( 'NONCE_SALT',       '{y9 R39g90,C9.1o)Z% ?X8<|&FXkE:-8bw5uL3cY=%H!P<id$qvsFZNSWBH;AcX' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
