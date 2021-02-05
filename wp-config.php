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
define( 'DB_NAME', 'text_dbwala' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '^,QpGm=0.XnVs>K<WjEO$RVbkFh:.BF$R)y-c.N#DkF|iy&Ab<yX5Po_S0jLVo1D' );
define( 'SECURE_AUTH_KEY',  '7;HN!Dg_]0f%wT~olkB>6[LwB_-0E8YPu/uPjvnCrpkeN69lz*^vPz;#=hmhf7YF' );
define( 'LOGGED_IN_KEY',    'c*ZeJBRSgYjF,a)1sf+2sNc:DkNk ;>2~#Ci0gJ`i&*^%_k2Q<Z[}+lJ]s5l{<)d' );
define( 'NONCE_KEY',        '#(]oPuJaG9vgga;S*MNF<b:?FZ]&sIp~vR1>V,tA*{_!iaNQ~)Ypz2)V)v(bP~T|' );
define( 'AUTH_SALT',        '@B%_:s:KVpJfs~Wu -JS`nk:p}z2C]_y20QPgEiw_YLMj:4 ff*##kF v&?Zix-V' );
define( 'SECURE_AUTH_SALT', '&Gbh|^M5NvNjo*@N8>?~92- v2 ^d3@3ey_Z+jtYp&+&~}K`P^uzVswVh)-4=Ypr' );
define( 'LOGGED_IN_SALT',   '`4diLc?e uFJD9Ks(mS dP1>hZ2cj,^t$ 8T52n=fw#9td(g qka>mJg5Q2|th0A' );
define( 'NONCE_SALT',       'J>Zq;zD+P,S$6#eYG]TT&l2,ZFLO-l}ghp,PzlRpfe-#>gY%:s7O[fwl@`5s9@q8' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
