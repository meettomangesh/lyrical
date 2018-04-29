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

 define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lyrical');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'gSQkc|a:xNA9.G/j~.n$}~I)6o*;N|aBGQ7PgC``@n33|Ky%Ym<#3X^nw@Sp{9bk');
define('SECURE_AUTH_KEY',  'E`*31KFS=UGO7h;INjKd^JC]9z|x_w)+*e1l4?p9_ZPO9Ne1$|gAZG!#c1yKJ-%Y');
define('LOGGED_IN_KEY',    'f,1ma[6r,/BdfSG)]k),@Rp_gi238*[HSxT(1/]K!C?p~^AsR]%XN5eM}wSgMS[7');
define('NONCE_KEY',        'M{A2!kmHt;t{q<$%5S-[/[z=iKz6PIA894oG!PtnIt^+{Z(V[s$+=iVs8V.$*A#T');
define('AUTH_SALT',        '9 ~]~Wni&Lee1kCcbE^~*v]ze{5ybkyA^zb:<:2Jd.SIjHUVjuDN1%{]EPg{Cs+g');
define('SECURE_AUTH_SALT', '%T#Oza/K6O-a:I{DS$MQXe5cJo`>&20|L.wVBm?~np{f-#QLP<^@V$ApM[}TGE77');
define('LOGGED_IN_SALT',   '4=:v5>WeVfE;^LN 0SF]7.BDPd-]D9638^CZ|(sN /(_|K8kjyLfBP3M9x(Z:(`o');
define('NONCE_SALT',       'P5vRMZaD0/>sSnQVoZ/EQ<^@%SD5g~Cl>5g$pU:t1#R=.@nN{^_^uG.0n?ud^U&;');

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
