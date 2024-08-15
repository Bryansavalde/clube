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
define( 'DB_NAME', 'u938683470_cFJWe' );

/** Database username */
define( 'DB_USER', 'u938683470_CdDBO' );

/** Database password */
define( 'DB_PASSWORD', 'CcXY6ivpQj' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          ']kSSpB19:j?u[|%CU*R2w+kGL;ga&91]ow1W+}>MUT*;TT))|L4ngC(e+7-Wy^C)' );
define( 'SECURE_AUTH_KEY',   'UWOv0oho,{LtB/iZy{av^Z,e,lyw1*#Z7a5z=0<k1mJ.fQjxfMHAd}+sv*=1IUHD' );
define( 'LOGGED_IN_KEY',     'v,Mf $4BEHS>YE;d5 $5`@tW|DS@($O+zgs};KVhF(/-L.7wj7K%Za0@[n)#?^RW' );
define( 'NONCE_KEY',         'R#xh+5_{h9.YWNQU,.Y`[7fcqw)NH^?_Q`VDdHSJc57 $fl;])j)+^S]~t=P&Syd' );
define( 'AUTH_SALT',         '=i;[gRM5S*+m`Zmq-{Y6_oxOMur6RhY)]qXS<{R5N0t2P/NfpM[z0:hg]6-Z1fe~' );
define( 'SECURE_AUTH_SALT',  '[1=6!/aZ#-!lQs/t*kv8Ps*NPJrDu~P+IZQ~!Q#=9No ^3F$PEzO&T~x5j>Xi88*' );
define( 'LOGGED_IN_SALT',    'XjC_`^Z=gH&{V[lg~T:/&TtQ}k<C~uYi6&!GB*X)PD`w#CRu(qIr9((|fOW`L2uG' );
define( 'NONCE_SALT',        'cxyIMGppN?g)x`*!bj4GJiDk^fpN2.rKzEa9PG{HV!:lwymJsx6V+E};_/}jzx?m' );
define( 'WP_CACHE_KEY_SALT', 'zusz!L%hZRKJd+`@zOJvjX+a6 b{ie6gmJId|%(*{/*l}v=5dEG2B|Hw;C3SjicK' );


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
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
