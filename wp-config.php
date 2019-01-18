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
define('DB_NAME', 'santelmopizza');

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
define('AUTH_KEY',         '(u7T22Z]}zUQ.2F*0nT{+ h5k]|Gm]oti@qAn$tpg-zBc`wV=y+P{d|#{j}^MD(h');
define('SECURE_AUTH_KEY',  'KW%e))3H }{od1UOH5v]}#oh!8_XP,Q-!Zb[ZQ~#UkHm+E_rFh>*>Xy @LxP/cK}');
define('LOGGED_IN_KEY',    '4px3Z+if15R`-9@]Hb32AsoQtbHfQ~|W}I+J=l]}^j!TCQ,$%^[1Ilqk:/ag5<Q.');
define('NONCE_KEY',        'd(}8e42AUh[o.rr7C$ )d|l^T8 pcK`cK!b5rjehqC|jwZF<),, W}v&s5<kJ@w<');
define('AUTH_SALT',        '-!0&+-y4:W7~@QXo]+F+LGNUEohv+^a}oO]dG!8B19UU0CTYA(t{xp+-|). W3:+');
define('SECURE_AUTH_SALT', 'Hz&7bOqwf$ 4^+c=1)Jo++ommfH<_kwVX5FJkz<y+}rvNS+X=p(NMEuuzKS(E2K/');
define('LOGGED_IN_SALT',   'xb-h?)EvG~t4U.Ci@iZ~Gql@6T@;?D<eAjxfP7-S9l*+iAx!+c9QkD?-Bp^X>iQG');
define('NONCE_SALT',       'EVCJ!Y#ZxC!@Y(J1OMMnNDwmXDJw|X{cV# ,Yan?AF5E;rwvGQopgx|dp!oTDlm2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpopp_';

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
