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
define( 'DB_NAME', 'nexos-dev' );

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
define( 'AUTH_KEY',         '@,F(&GT@<E#X&!*m^IJ#+*ua9G^yl1o$FA Y6vUq:%.}r{.eSgU>POIkb*XYlUJ[' );
define( 'SECURE_AUTH_KEY',  'Pa/~imfdqY}e1[0z{)zG(wAfJ=#[}[d>d 4^Fn4LjmMSY^p1]w}3s46T!~+CKOn$' );
define( 'LOGGED_IN_KEY',    'Q9%p~|dF63g|T@SuVwEedLg*.y+$y?>WEuQI6;{q@V4-1[TbBp*&@NVnBogBF/nc' );
define( 'NONCE_KEY',        'z3BsN|!&4hv]AjY%./Ful/>/bz?)ue&+mFa(@J8<gvcka DSwSi2+5;m|_X2F%$/' );
define( 'AUTH_SALT',        'T!nYQu;]NQFA&arxt6WEaVhKQe#45AMbijtp>.-^rFK/s;>3~eL72+f]0GH#LVzV' );
define( 'SECURE_AUTH_SALT', 'nvw$a3wi+YWU: dS7YeeN$OreSqwX~McJV#@t&(aYGFKW,N$7nzah[s]LXi1J~fe' );
define( 'LOGGED_IN_SALT',   '3FqtY ^#j#R`XG,ifxrv&*>ZM(,[9:CdJb^k#)DUBnFWr>Ju?HMy8pJwWN8pI/?`' );
define( 'NONCE_SALT',       'kZSCk-xP+cY8wcA 0f-p4qU&qu{9+>Y)QU7kbgjtw%^E3JK *79G;y0R>U O&=4>' );

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
