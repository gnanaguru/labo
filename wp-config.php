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
define('DB_NAME', 'labo');

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
define('AUTH_KEY',         '~FivSmZ~C^:[^/vjO+dmIdR@#3owZ#Q1g5^ofvH(6|vy(w512<O{k>BheT4{V1H2');
define('SECURE_AUTH_KEY',  '&xiR{rAJDq|q&ojQJTX9(y p@kRiroCgu BBN?^+<Xa?:4Vwr%iPZk0$@o!tn8<d');
define('LOGGED_IN_KEY',    '&>h{wWf$82Bit7YU5 LD!Y9(JYtq+F0Q_&NVivvtSkI]qvlaPJfVV{6u/mzu0N(0');
define('NONCE_KEY',        'gt^S=*w^hJ$vBpEoY.BYn$q07VT<+_7Q,]ZZhi_FnpWwHZn8b<>jzhFH|NvKRn-7');
define('AUTH_SALT',        '#xAPT4nVA%kM6c.J^E6[xZb,$-qu%sgCds.HMt0!=#2d7P[w4~@q~)3b-q.8k@eX');
define('SECURE_AUTH_SALT', '?gqrc~Mm&x?PBIX3$S?h?-}KcZh]mqv0.L(>Sag(p&2metuTRS8]cu0r r.&d`_W');
define('LOGGED_IN_SALT',   'a~|5HhXC;xS*aY-<&)h H(|5h1d1d]|mBIG.!hbUu2yb#M<.XdthEIGsV_!`^g`H');
define('NONCE_SALT',       'O;0$FtV!3?*nI:R?wfcCU;:];Eo-EV3KlHJO=RtSn2dd%RwyT0,?0CF`dXu,PPP;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_labo_';

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
