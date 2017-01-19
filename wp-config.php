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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'D:\wamp\www\handicraft\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'chandrahandicraft');

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
define('AUTH_KEY',         'zAVc.CHw)G:]M/yq#!`SA#,|I|nHP1.lzkC~heMeY6g*2nT8HWyPVcg&9=phY6:%');
define('SECURE_AUTH_KEY',  '84J<N:rcK0tB=]~2/H^Tokj%oJSPHw8*LVNGBk,n>_}+OV3clnrHYs0o*s#|;%?6');
define('LOGGED_IN_KEY',    'zq;NZVjgH_QgQfh13i,=[Duv40Ayp[GilWIdhIszHDd~6pHOZit6=g!M4Em&qk:?');
define('NONCE_KEY',        'Se<fcKDpZgFc7Ca,LbF2+I@3@*]KUye(p^YVDrUWn+MC3[n]/:9MLQ`PzWd+!>#4');
define('AUTH_SALT',        ',;1&[9jF!<:e/P_^RwV}nIWyv8_*a|:qpOxwUWlAC6! !_Tn/mwGp-vd}Kc7nFuq');
define('SECURE_AUTH_SALT', 'v5F%5?.(0n|8 nn]wz8p0zfdsp(mDX9(A7rv1kCS|;;Y)m.nLW6WS*C_T@}%G#?f');
define('LOGGED_IN_SALT',   'SblIpdNytDP;}x~Ga[he+$x9MYO~VpITqhZ~pODbxKCgc;pV5~bHXXP`b9I(m_Kr');
define('NONCE_SALT',       'b6gOM%j17,0vs!1Pmwbs0`{d(q&j[1^)CqBT4V6,g@oQN wdIY7xgHZFa=*WoK`,');

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
