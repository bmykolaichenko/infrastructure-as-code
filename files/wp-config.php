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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'wp_user' );

/** MySQL database password */
define( 'DB_PASSWORD', '({Ln3R]DMe]1f5X');

/** MySQL hostname */
define( 'DB_HOST', '167.71.252.155' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$4H!:Kp_jr|.bzwh}L?PL)=4;mU:`Z<fRl+N%!6a+41|uT9UNDKIHT$L|,6ZBp++');
define('SECURE_AUTH_KEY',  'NK7#_9FM-Z7k|UTX<+pe0EMmV8<n^Ixa`+B4~:f3[d.+:ln]S^Qp4QydU^WiC}KK');
define('LOGGED_IN_KEY',    '>,-)PW>`1]1ZrxE/5u!0EgTX;V]$GPDr}mQtcr+J|?CTCLcRZmO`+b}]|N.,qz }');
define('NONCE_KEY',        '2><8<}/);-qGUc+`]=,u,q$LuDW%3*397(yg!;]v^cdok`n-Zr8|p0XQ7{[Fdqyq');
define('AUTH_SALT',        'Sv8&4(]A^}V%[j6o:MQWga[ ?+E|8 bp*+1bV*Zl76NZ/$NUJb)+EIp,i29iY=k5');
define('SECURE_AUTH_SALT', '_E{bq.}8BDsjFRa}rnZ6Noehi2TT<k>z@G-a!,!HINg;&T-.MOI(r`8Yn{PA%{Z>');
define('LOGGED_IN_SALT',   'Vn]U^gB+na|`>e)&iwjw9tU|OY`M2w.b;iw|p-z|={Y]ofvL,FQ%5PCjk(leY*w-');
define('NONCE_SALT',       'rn7TS,:.&vytv269pJ-U&W%Z>]+Y8]^EP2w&QeILH.w88:6b!U<3^O`YH;PT*ZpG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
