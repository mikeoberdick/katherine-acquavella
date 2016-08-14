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
define('DB_NAME', 'kaDBpsaam');

/** MySQL database username */
define('DB_USER', 'kaDBpsaam');

/** MySQL database password */
define('DB_PASSWORD', 'R1ooxXflLU');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '2EuqbMAYMB7>yj^vfQrcQBY>z0,vg@ncNkUF4NC}@zkVsgRCZJ8[G1!w:~olVG1od');
define('SECURE_AUTH_KEY',  'B00^zj,UJgRF40Cr}@sc@oZVG0!C[@o|-kVVGw:~sh~tCaO9[K5#x1_SpaL9WH2_');
define('LOGGED_IN_KEY',    ';+qePmbL6T.u{$qbymXIjQEM7<yufQnYM7vfUFcQB}J3jvrcUrcN7YJ4,!rczoYJ');
define('NONCE_KEY',        'RG88[~o[~olVG1OD:_9]-p#xheO9]H5#+2_xi*PDePA]L6<.ueTqbL6XI6nX<$nb');
define('AUTH_SALT',        't*tpeSDeP*6<+m<+mXuE;L6{+yjXIfQEM7<yufQrbQEcM$7}$r>YMjUN7UF0}@nY');
define('SECURE_AUTH_SALT', 'H;#+xiXLmXHE2.x2.u{+mbyjTIfQA{M7<,ufUrbMBYM7>,vj,zjgQB}NB}@4>zk!R');
define('LOGGED_IN_SALT',   'x_xlWSe;L9]+2_xi*tePmX#E;*q{+mXyiTEbMA{<yj^ufQnbM7UE3,B{$3,yj^rfQ');
define('NONCE_SALT',       'S__~x2pmeH;<XiT*$<XEU^rjgF0}Y,!B8JokdC8|!hdK-#~O5K-hD_*xi;A6bmj3');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
