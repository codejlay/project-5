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
define('DB_NAME', 'le_red_bread');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'zfWP2z}J2m6F-l2<uniO_&Pv(~USPA}WcJ.=$Kz>C-`aK{j[c!559rV8HK+2g9B~');
define('SECURE_AUTH_KEY',  './bp.$*(tUhB;7Jp?Ecc(una}N0k8#H)&agSD%g4Uz-8jJ=|lZ+2>f3F;{b]Lr>X');
define('LOGGED_IN_KEY',    '-3Yc8i1Q8-;0 +Ev-k@~-PPatLq1St{#e,&UH^]hJVKQK&g+tzP)kmMIN!eA58U=');
define('NONCE_KEY',        'Zf$!3MkEWN@k$CC^;$iV.~d.BhEm9$?bJ3],}.ca@~-iT6;VvTI<&Y`dIUT**GtF');
define('AUTH_SALT',        'XgU=fxg%t/ !~hf%%Yp)]eskK>r%n?^nLQy^/-N;Te,sn[1%+m@Qf~[}ll~?+w)P');
define('SECURE_AUTH_SALT', '|K3Q)-EwEmt(K=nLR6l/l-~4^P>$kMrsdlb,O8jtL`:KA-b%+ruokBZ&ZDkQ*F-I');
define('LOGGED_IN_SALT',   '-NqT~P?4kxMymfgeU(X.]T@m*$9+BQ-:B.&>7onmZ3@LQWCt@_tU~ >+(/{u*|YE');
define('NONCE_SALT',       '}yAN;B>;K7ba,B#1Z osg0$8R%lj%3R.B3$c bA%|Pt+1mG|lEABbxf+iPbC3 1%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jkl_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
