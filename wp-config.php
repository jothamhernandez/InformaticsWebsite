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
define('DB_NAME', 'informatics');

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
define('AUTH_KEY',         '1u1`cZf`/Yc3*k+!0TVA9&b4:M`jK0LIWA|SBKsJl}!=0Wu0>uLwUTj2l3ilg7k2');
define('SECURE_AUTH_KEY',  '&{euKX!3PRMr>5#j:OxFon..59|D~sLcGbkxf^Hx;R+`OYk)Yb#}^;qFi=YNn;zq');
define('LOGGED_IN_KEY',    'OEVN=+(i)oAMUQ8WHd {<TYYns[2i7l5u$TjwQgoz$FvqZflp:n^sv=i>/xvOkSE');
define('NONCE_KEY',        'PK/n .$@Q4a|}]J%Wd8_{bX;k89gi)@,za=uM4EK1%58w=hGLWws;!xK0!kR+YMP');
define('AUTH_SALT',        ';&3G_Gy7QOYzJ74y9Jz-*.1CC>cl1nQIse0(j vY sVX-!2dwTDbq0V9`?E*BgU7');
define('SECURE_AUTH_SALT', 'dT`@0ofht5e}JkjQ6C-:mY%ZR7x!|}-$Z2gwaEAP0q{hnp(Ll[!Xd=Rp~hMawqVk');
define('LOGGED_IN_SALT',   '|7e+3`.A8L>eN.xKkT*5b0whzq;[_1AMY|+AaD[h1)I@y6]u0ctem&CvbRX?J>7>');
define('NONCE_SALT',       '~MIt[F-^7~qx/<H;/a}&9:#SDcU.UAm^2uA.,J<I%DD2axceGTgWVw1}=mjr fv*');

define('FS_METHOD','direct');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'info_';

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
