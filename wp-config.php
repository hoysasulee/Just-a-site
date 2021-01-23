<?php
/**
* The base configuration for WordPress
*
* The wp-config.php creation script uses this file during the
* installation. You don't have to use the web site, you can
* copy this file to "wp-config.php" and fill in the values.
*
* This file contains the following configurations:
*
* * MySQL settings
* * Secret keys
* * Database table prefix
* * ABSPATH
*
* @link https://wordpress.org/support/article/editing-wp-config-php/
*
* @package WordPress
*/

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zmermer_com' );

/** MySQL database username */
define( 'DB_USER', 'zmermer_com' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xZYMnhWJpB' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
* Authentication Unique Keys and Salts.
*
* Change these to different unique phrases!
* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*
* @since 2.6.0
*/
define( 'AUTH_KEY',         'gm_H]PYQp2se^G|W]j>BYRzu7}5mGi]Ee2kvTSCKo0U~_KC*FUH0A+@^rkISuV~b' );
define( 'SECURE_AUTH_KEY',  'Z7Sa]YW.mJV%V(gd|?<^w_*DGj&6/PVh([AK5~RiGIpra>jjUI|[gk1(X5Ufo`uk' );
define( 'LOGGED_IN_KEY',    'vas!S+Q=b`N7|Rl$Wi:aYVkbB=[h/$qkW%2xXJ#1;ht1a4y+0,SBBoaL<q5SRZSR' );
define( 'NONCE_KEY',        'D/KG{b`CCt@=<S@-]OxeVe#PP.Q*#Lv.UF(@pWD?vu|_x0ad$&1z`T#OD5gm#XOI' );
define( 'AUTH_SALT',        'q!Xphyusd1[l!b nVvl.6u2N9^@MLs48e7s>fv<6ssqSa`H26?1n2g4(E<{Ssa5X' );
define( 'SECURE_AUTH_SALT', 's9;1#afyU{h3V3h5P!5Q/*g;SC> 3)u;(m{c{HZ-~6Cg4}%d]&!grE]g]0O9(G62' );
define( 'LOGGED_IN_SALT',   'Wv<w;YYx6n$ yD&IM^wWNx.i>zojC1)ZM&q)eP8y 3xaP7Awob.haRiJs)?6}+As' );
define( 'NONCE_SALT',       'Ea39R,@/O>t%D,?h@hBFC_SA~.O:n?hf9fGW~U=4ZHg@~NP5D8*$I05&eN~w >u5' );

/**#@-*/

/**
* WordPress Database Table prefix.
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
* @link https://wordpress.org/support/article/debugging-in-wordpress/
*/
define( 'WP_DEBUG', false ); // Added by Defender

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
