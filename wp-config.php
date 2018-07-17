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
define('DB_NAME', 'azhealthyf_db');

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
define('AUTH_KEY',         '2oAJ; }?cE#@29~Y,_C a0#2>CX)XP0ILFPXcMlX0yV^)NuOr4>h;l,II1[Bk}bI');
define('SECURE_AUTH_KEY',  '#)^#yWa]q3QXrLyj>S[4g<Unr,3V/mD|BpBPc:*`cb&_<~aaIgS/AygHl(<v#[W4');
define('LOGGED_IN_KEY',    'OdxWUU&Y:a}g0kXb07YocadMp5)=;T`wG},bqkf0e.-*q rfc<wb{0!}c ~HWhf@');
define('NONCE_KEY',        'J sfMXL[Rg<{l-8q|/_()^]<Ns85e|<NP=EU*+>8Ays`%(n)dK)2^A(RRyl6au`P');
define('AUTH_SALT',        '5QE_d,lKM~%uU7ib}^6L/Dyr#F,r09gzjKSxQ~_n)jd-,[~,mIU3g2f!5*eeWNkp');
define('SECURE_AUTH_SALT', '2[khHUwOGX/Ni OsDl]B=bsjX.X1;z-5]x/{:wt;i:1a:_}OLByi-If1kti5^ v@');
define('LOGGED_IN_SALT',   '13^=8x7}p(mW|!CxhMf`hs#vj6Pn1H;apJ*?^XFeTpL2*#HgP0Ik&&L?x%W N=`B');
define('NONCE_SALT',       'ff5JA_<cUsZB6ES@d<FV*.4tF2m9=!Fw.DFuM?$[O>A+S<aR,ReiHs:mi|wxFRa@');

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
