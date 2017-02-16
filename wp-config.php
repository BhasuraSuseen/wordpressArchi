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
define('DB_NAME', 'archi1');

/** MySQL database username */
define('DB_USER', 'bd4c23f3d16f3f');

/** MySQL database password */
define('DB_PASSWORD', '6a2bd68d');

/** MySQL hostname */
define('DB_HOST', 'br-cdbr-azure-south-b.cloudapp.net');

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
define('AUTH_KEY',         '7pAx ,C2ryQ:?,G8Zd5`cn4Jk9(L;:@=R*6I3nesgd.z6Z=hjeUF$.[Hp7NQwC3@');
define('SECURE_AUTH_KEY',  ')yoT~=W9F![k5p|WWvnFBOw}e<l`.U=/|cdJ*_$L-niwJBhSyv.y`y.jOFLYCmQe');
define('LOGGED_IN_KEY',    'F26>P;YiT*U$.|unyd>)@@=bSj>&2PtC(<MeX< qhMs)+fJSrxh%1$jqFM7Js=&Y');
define('NONCE_KEY',        '%3T/=<$Sxw>i_mJb|)c+`r6kBA^Oql|BzBy5FyK|VK`Z+{~2[oc*|LBXHd+$&k3m');
define('AUTH_SALT',        'e(9)(ug]4}Khhf_N.as&D}3_PcF{c37;t}Kv*Jx04HEZpEG:1MZ@wN+Ze,Ugs6H%');
define('SECURE_AUTH_SALT', 'SS@`_2+>ISw*)qb^<?5Nb09w@>Wd,v:e(<Du:>%@F$~R$GZHh$R`g!;;2#TF=l4h');
define('LOGGED_IN_SALT',   '3-I~+HQL5vH|4f:k7j&>Dbf-1;rNUa2$&8x!xsUvH61ECtw!3>O|.SJ[I#<U{~f ');
define('NONCE_SALT',       'buF39<nW$>BNjn:e(0TBM6GI(@7t/.DXk{K4[z%A hY+V4qx+z<E~U7}ldgS&G6r');

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
