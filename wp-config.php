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
define('DB_NAME', 'simbit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Simbit09&');

/** MySQL hostname */
define('DB_HOST', 'simbitgt.com');

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
define('AUTH_KEY',         '~kGjLfBF5So:|(a*YJc$wo0Ou;jBrjhxlngP%5S`U`zti`PUutNM;c*%on/[XbXC');
define('SECURE_AUTH_KEY',  'gd)1v^^@<[mua ~6$*i!<=m{}cm S5{$@9H5_>=PlO5#FNX+/}_KfkfO 44=B$6K');
define('LOGGED_IN_KEY',    'I&=R;(*j[{(0om`e*l)],qabtGR9P214O<M%(q`/s6I7PL ]<h0BZC1U-!uAx3HR');
define('NONCE_KEY',        '[]8&!GE3!B YBQqm7~X@#C%G$dYb4|Mko)EzWILm+?48O{9g>]eHe&LjHF=)oL?q');
define('AUTH_SALT',        'lUT4/|+:*PjaC^I,7Zh-$zB-?@7&4`EUgJrX+lX)8zImp6,>E$<hx%^.KDA9g_hN');
define('SECURE_AUTH_SALT', ')UW8uxZ_4Heo~DDp/NUI0{m`NNG?Tpx`g1Zl)C,6ds|JGso~T3uEQss0_=Crfh.U');
define('LOGGED_IN_SALT',   ' (8e=8Zb:(2DMHb5NTHqPm6qy>mttS-i@XtVGTPhD@9N=8[O^7atmQa_=o6>LW4Z');
define('NONCE_SALT',       'TuD!V;4,qO4/EIp)A,pFCgKU5R*XEBq_;~J{<GL#y`QV$kwRc|-zF?q5dgT#`RVX');

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
