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
if (($_SERVER['HTTP_HOST'] != 'localhost:8888')&&($_SERVER['HTTP_HOST'] != 'localhost:3000')) {
	/** The name of the database for WordPress */
	define( 'DB_NAME', 's1' );

	/** MySQL database username */
	define( 'DB_USER', 's1' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'mvIiReGwraoR4wTG3nRYIsbfAiFVhQ4O2dCWu' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost:/var/run/mysqld/mysqld.sock' );

	define('WP_HOME','https://solvvy.mbzvrm4-liquidwebsites.com');
	define('WP_SITEURL','https://solvvy.mbzvrm4-liquidwebsites.com');

} else {
	/** The name of the database for WordPress */
	define('DB_NAME', 'solvvy');

	/** MySQL database username */
	define('DB_USER', 'root');

	/** MySQL database password */
	define('DB_PASSWORD', 'root');

	/** MySQL hostname */
	define('DB_HOST', 'localhost');

}

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Sa]~ -EF:/EYe]Ea=7/eBgm,}{1__t}q3:(l`%Y` v0a%?+i3p>!&WaO}3o$s+VH');
define('SECURE_AUTH_KEY',  'VgX,N=)k!|0;Rt?0geM<*X1,sw|*M ^]roHx2Py).3}A/o-T076VTMt1.xkz8J#-');
define('LOGGED_IN_KEY',    '2Ie$DipwKO%HNU`/;vn*FQLry7vb`[XDc76dNzJ]f[nJ@+h&N|n;>3xcXzq@/,y>');
define('NONCE_KEY',        ':j/x]-]:M|oPe3pT#:G4Eiz0U+8vm4gxUa$B*|WvfVrY3$7[cVycZOwJG6&+/.4-');
define('AUTH_SALT',        'XwrJjE,94~n0y(n2(uX%&*`H?:m:B9?ilg)r= [&i*mJ>-V#Od`|l$lNSz.d]-o2');
define('SECURE_AUTH_SALT', '5.CFR|cS=SyT-k+ZB_+u{&xn_etBr=i=>p|s+eHplZP&%i[A+|,SfY*gd,5oT.-/');
define('LOGGED_IN_SALT',   'ZFb{<b`5%-|i.Bt64h])0C^Kz|?xLS(={aWg41WngX[}2|LOJYgw;IBP&Ey2/UkE');
define('NONCE_SALT',       '&!=k).v$M>0wEEM|%+zhU)A)| 5;>9^83Y,ih5Jh0%IS1KT_4TxwG25Mdlsen+Fi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */

$table_prefix  = 'D8eZ9xYwa_';

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
