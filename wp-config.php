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
define('DB_NAME', 'miyazakiDBduoxl');

/** MySQL database username */
define('DB_USER', 'miyazakiDBduoxl');

/** MySQL database password */
define('DB_PASSWORD', 'gJ4AxagSXJ');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '-9Odtw]:HKhp_[:GKdhp_#j@^3JQUcvz}7QYcvz}37FYccv@!4JRVos|BRUk@}0FN');
define('SECURE_AUTH_KEY',  '}m*6ATXqu;2LTXqu<{EIPbfy$,7BUXfy.6EIbfy$7AI15OSatx];HLlp_#9GKdh');
define('LOGGED_IN_KEY',    'IfuSltx~29DLemtx#9HKSat+~#9HLLemtx*2AELTmq*29DLemqx]26Ds-~|8GKRls');
define('NONCE_KEY',        '2TXqx+..2LPWqx+.s-@|8GKRlsw~1GJRksw@08GKRklpw[15DKdlpw]5CKdlow[15');
define('AUTH_SALT',        '+ADei+~25PSatx.<AILei+*2AEei+.<AEXei+Vow-:1KOhls:0KNhos|[CGSadw-:');
define('SECURE_AUTH_SALT', '~Ccv@^4BFNgnr,37FYfjr,}0JQUVovz}48FZgks}08RYck@!>CJNQjmu<{3MUXqy.');
define('LOGGED_IN_SALT',   'EbKOWpw-_5DGOWw~_[1KSVdl~#[11LSael*#;29Salt#;19Hahlt+;RVcv@![CJNV');
define('NONCE_SALT',       '+GWpt#]DHaeex+;2LPXqu<2LPWpt#;2LPWko!|8GVdh-~8CKdg-!|8CVSZtw]:GOS');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
