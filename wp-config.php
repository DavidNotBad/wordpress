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
define('DB_NAME', 'davidnotbad');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '9Tb&K]a>+o7XOp=LrLC)+ c^q~UBCF=PdUE//mY!ryuoCW#gh;QO$ 1GQvlF4qNv');
define('SECURE_AUTH_KEY',  'GY`.e_BgDZb7OVlaCPCa7qx9}(dqm77IgRMsbjZ(dPx1_+sInlg`| a& TzD&ar(');
define('LOGGED_IN_KEY',    'OQ?1$8E:F6OIF?ua4Q-x5i 3}dg7t?c!!+3exteDa(Y{;vdp.lZ}4X*7N-Cce&yr');
define('NONCE_KEY',        'ev]Yf$HKH<XMXsRQv|/5bt*WrHA#@-)z/:^#kz3fo7QfO3w$,7:+0+F_uauX&r,&');
define('AUTH_SALT',        '?XOe`<@5h8N<NUgI$]/b:>]OfJ&HPnzEuwd2)x`x>hf)&v*,C;A7W8fn2W=&I)}0');
define('SECURE_AUTH_SALT', 'a{~O}Cnoo@Rj2tq/`cW_J~Td(^E[E3a$H]d{oiWF3I*0.m?9ksaAI*jhMvSYiH9)');
define('LOGGED_IN_SALT',   '}+Ta7uNh}pZnfqIT>t@?;-vW!*<7- M&yfIRF4|Vh[HhZ=_]K~o;4szs4MP*zCNt');
define('NONCE_SALT',       'E9G7{mIrWN?]M[*3[24kiVfe_6 3;WS*&@.kC41dc/V~;Uaym$`a:O4BT[KQFf${');

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
