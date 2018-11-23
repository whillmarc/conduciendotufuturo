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
define('DB_NAME', 'ctf');

/** MySQL database username */
define('DB_USER', 'typ');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         'K9jH50&%{Wk)<PN6zP]JU@5N*)dSM{Lx|y%F&eeFPFn{(U_n}_(&Qqq 2[//L mB');
define('SECURE_AUTH_KEY',  '-x,U/n:U -2sKn}o-f$5~,HEt:hEJSe<Js;DT9QZY;OO;(V ]|/?rXZ0n&kCl8.B');
define('LOGGED_IN_KEY',    'y+(Tb>UE/&)q9PQ^|}!opOp`bB<S;4rl$r.9>)Uv|hvxnI|sdO/_92O[R/;7U0G?');
define('NONCE_KEY',        '0JFYX1&aqE>imx[UYB2yoJqx~L.g.k{J)h~{}3lV-pT;f}2Gv~L!f1:M;:TTMV6U');
define('AUTH_SALT',        ';2%`rOds8B+T_+WyFTkLKhjD++]gH+0 JOguT+`Y^cM-^.]PelNft%Mcezk6}=:J');
define('SECURE_AUTH_SALT', '(Qk`tg(1<NSBCXE8Nb-/6zIdCQX>+W5//Tg|WMGE@vMw-5.VsEHvR[Eq0@K`N-u6');
define('LOGGED_IN_SALT',   '1,8;g=gx6|IxF]RouLy^^:?UM8QTEJwK{Q)+c5C^rw-@P[jQ6gy&5PgRZ|lWkFE.');
define('NONCE_SALT',       'A_#L|?f@9WM]rRB*kM~X2=98_ c*<=N ,n*Me3FJY&2FGcMN}+4g09O@[N[2BX[6');

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

/** FTP fix */
define('FS_METHOD', 'direct');
