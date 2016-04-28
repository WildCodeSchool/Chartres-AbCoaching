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
define('DB_NAME', 'abcoaching');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'azerty1234');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=5d]S03R3[-i7g7/Vp9Hg[Y7bC|}Rs0fqT~jx!`U+$ f``C>9s%`x_~l-Q &)BJ9');
define('SECURE_AUTH_KEY',  'SrxnL8W*H_|uc JE@c;BSCN?8A)-r|xnt5yGZ4IOO4cNceI!:QIrCH=.xn!DQyfU');
define('LOGGED_IN_KEY',    'i?MKU+Nv.-sn?1*VPJ8ZggI!Hn$zV~6H)b|G}S:4Hf^caSj&r-* wea/sAk)TBx~');
define('NONCE_KEY',        'bn6_Qw6-2 nnN^v[etwdb)6Hk|$`50CjS6~vGVn8I=UvhK5q02@[j^Y`2vrnq_k3');
define('AUTH_SALT',        'i3N_,%.ZgS7?B.&QH]6}FN]t3|X=Q}hE^8X8o@Lu(7M}nn`g}uDO3n6(9pM$$]IY');
define('SECURE_AUTH_SALT', '=|y]7^A3;9AI+J.21;Oo-O{E`=mmCu0?e03Y9m;XN~xbl9Zs`hB0HVDy]`6$edy=');
define('LOGGED_IN_SALT',   ';b(lj%)2MP%ztS/t$NPr^dWQJj96HMU/{47acmd#<X&pI}?1P7Qn+=zQi^J}PcQP');
define('NONCE_SALT',       '`VbsrgQ=%^tAhEP7oR4=cpHq<!6,io.FK*oY82&*Q4>G61WdEz5piRHK7?JoD31C');

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
