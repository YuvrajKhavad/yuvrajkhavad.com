<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'yuvrajkhavad');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'ALRw&bj6jB]R_Z{=BHIV{3]9cK1r|}sU(^xYpk.C}?q1iKi4C{^:=,-$S6d-k#[]');
define('SECURE_AUTH_KEY',  '~w%x}W|WwkF-AVykr~Gp8Iih{+bguPBs$5Fh^Re2YZH3>oE/&g0K#6e-,u^5FWP5');
define('LOGGED_IN_KEY',    '2k,{]x@(|~xL!6[51mq^2,2)=B6%!/11b-X_w?:$#`ST?y^N%R3rt&?Fh~sf bZ|');
define('NONCE_KEY',        'ry0EP!W-L~LviiEe;U(1!Klc-Ye`#-{w[mlz0S[I/3d/}pg=m=-R]@RqKv+o[SS4');
define('AUTH_SALT',        'Ij+gHk=}ha7K46- ov*>qdFrSJ,/-4]WGj?Aj{L-vzY&m2 KRnHC#b`q1ez}q}5+');
define('SECURE_AUTH_SALT', '^:}?,+F&fy7)}P|f,Oau*`01r2E%7lK|A9s1_cy*Vv[|0>l;I  nIo_F+N^@agD_');
define('LOGGED_IN_SALT',   'i.xS|Pk{}gh8|`a%Ac_$1l8nF5BGT[6-Kv1k<f;>S_(XLJnv}a%kHD]|||v2dp4F');
define('NONCE_SALT',       '3_EQRbn3-W54C+G<sF9>3s.N5n?|[`TCv=_@.vCvGze-j&taSdy_,zI_65kDGKLi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
