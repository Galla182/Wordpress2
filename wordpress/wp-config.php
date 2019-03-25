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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '');

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
define('AUTH_KEY',         'nQ<IE+Wdr;`q(#_,r3jlmh/zCX*_9s3mSM6~QB0e_m FIE^`{$VZk9>W3`|3 btn');
define('SECURE_AUTH_KEY',  ':r8/0f}Ugzsxyj:`i3{E8A!8OCc5.F[3a>-(Ntq+/<@8o4fXO_Uf:Rf4YPZ54*,1');
define('LOGGED_IN_KEY',    '>o$jM6^^84}*w;Jpz~{8RpiaZC4+)-:tEA%4pE&n_nM@VMC>k3q418ZrD5z70zLR');
define('NONCE_KEY',        'AO^@[ag3ELcX[)Q5<gJ]tqR0jCB2+^1BI/Xzn<vi!%)8RIduJ]_))@2~%%^sNI#x');
define('AUTH_SALT',        'PS*]O)$F?5Ccd$]h/CHC6vsn3uC6Z*{M2vR)).&,_nfwbsxLyNyW3cPyp=DLAy|8');
define('SECURE_AUTH_SALT', 'zFuEb!{<g5yM^3&J6@~m[mEk:=[*c#{e]9DZfv^:M%e);Z02t):pcD}j|c[y`8.~');
define('LOGGED_IN_SALT',   'bt.I%fQoB?Jbs|_]lalSee0{UZ^SX;}>/MUm[@F6Dt$CdmZA4lv>Df}9T%bol.R]');
define('NONCE_SALT',       '(6y@1kg ardL!Lv]nK|E@ip0QJ}io[|F .(o:CpI `TA7`Bj$J3v>aCk|,xaxBW-');

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
