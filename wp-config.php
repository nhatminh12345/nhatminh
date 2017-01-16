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
define('DB_NAME', 'nhatminh12');

/** MySQL database username */
define('DB_USER', 'nhatminh12');

/** MySQL database password */
define('DB_PASSWORD', 'minh123456');

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
define('AUTH_KEY',         '$kEtC=0J@w0Ci|aABg@1kSuGCh?$KaW%#!<K hm|eDmXq^=T}ZlcWEm[meip,Qz@');
define('SECURE_AUTH_KEY',  '$$J}a>H7DjxE_K=b!7i$^y&N@el|x4&54Yx%.?c[1HYs>n=%^&W1XwY!0r(fZEF3');
define('LOGGED_IN_KEY',    '/_*yCOO~Q&|~l#G>6CKfz~>*6cfl/7Z}WC8^H] 5Cms!pW3m[^Y$t@.TC[KyF|Nw');
define('NONCE_KEY',        '=1_$W8O?ZjcDK:<~zV0=Yst94?j>$PCuedbgD%kuHx7DK9:,_3T|~DNLX8K{&5W7');
define('AUTH_SALT',        'ysU7KxI2t`Ezg+P+$O4rd:F@mdK1,AchW+!c&R6]H7pF}D($@RFuwe!;(ZnR>T* ');
define('SECURE_AUTH_SALT', '_Si}/LR P~x {b20v%~Gv([F*BfG+Io]9M30V8McuOaXS}o[<5tJ=>pF0idC2Qc(');
define('LOGGED_IN_SALT',   'MaUXXg0,u%)ja0$LlWzX/*s@O%a-=*i><4#)Tgi$T;JEEeyuf1!#SNmo>IzN73*e');
define('NONCE_SALT',       'dO5/)~]_Y!tzh^~:6rCdK4S$nPsd 8(L=f55!#|4yp|M/n`#ck-=`28QnQn`l4CB');

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
