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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'maca');

/** MySQL database username */
define('DB_USER', 'adminTqfX38f');

/** MySQL database password */
define('DB_PASSWORD', 'FWcpNtmgM3ZA');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** ELIMINAR ESTO CUANDO ESTÉ ARRIBA**/
//define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'n=xU5L~q!H=]?R-<u*|Y:}c|(}>P+zKy5q^)pf_5sh  X(y1#[krdF-Kxq_4JG >');
define('SECURE_AUTH_KEY',  '5%J6[JS:mtS^s5dJKd} -RDYe/c?>p7N>p;jj962:1RmQQ_gGux)=WgR>-^=[V3=');
define('LOGGED_IN_KEY',    '$P2O&R|QlAW0R|R0@k||p8].S$[2Vc{H&!fXMV_lACMxR?mpO+3RWIC0_2Y(?,6v');
define('NONCE_KEY',        'IXbMBJ+N:q=~^2z7=o7<`8(x1URF 8xhLNE.;.y~zOD/6t8KvjoU` rUkpSq0W^c');
define('AUTH_SALT',        '=:M.Ak?ajEB0*].US`oNjBeUKV,-hAPX%]bCj5-|7v9[qPRG6CIXi.:Uq2#JNE*U');
define('SECURE_AUTH_SALT', 'VzLZ[Q]`Im4GGA]GG.47BOC{7=!M+eF+bWz#8#h[vVT:[8HI=V3n >dd8A/Z%2Ia');
define('LOGGED_IN_SALT',   '&>j/ivTIDgR$:g6Y2Q{H%R[5Iq(q=Y:u,g6y*xlKLJgUZ}`{]XW@LgLz8ELw5y`J');
define('NONCE_SALT',       'WFy:Ak[oIwjU<@65{_lIx$dBgD|63xjHi7OFt:mo:;gg<Y`$;hacLI}S(>xaUTIN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
