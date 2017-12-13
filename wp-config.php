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
define('DB_NAME', 'brenna-exam');

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
define('AUTH_KEY',         'M}b~x+G*};%)j,bYld%$n`~QQWLr0U`TU_(fwS/>BUA!tf31W>jT8uzTF_Xw_VP!');
define('SECURE_AUTH_KEY',  'IPpB)>Yt9`7J-66ZU!/Ys>kGjWP!Oo}G1Fk3:M;{21OwT)AT+_HXQ$t5QE MS+0P');
define('LOGGED_IN_KEY',    '~+lc; g{S?yHH>$E/?<~|Ik8%56x$~V~u3E_EB*woaKxR<<I&55<N*8MHVTuzfI/');
define('NONCE_KEY',        'Vh;K*WC8MNVjpB+*<fuQ330mNsFZXzY=.@VUD)Q5?zE/Ugl/S:lz%& #1)k8rXS`');
define('AUTH_SALT',        'RNyEda?VWBa:98;NRsFU:!cB<~ay(,c!|v;am&Y7eS|;2#C&2]w%gL}hpf^Il]f5');
define('SECURE_AUTH_SALT', 'h:B_RTTM@v#*f:~L(SEe5=;dK%hYk0mom_L|T6Gw)$2`8TOLnp?VQt&z*K=Z$;nI');
define('LOGGED_IN_SALT',   'LeE|?{90RsNj&xD<U}Hk&=)7l:I^I/`RVl)7 op*s|6y3i hhB3SJ>]T%Te,gOAF');
define('NONCE_SALT',       '4#5L6A;3bPB5<jVI.+icGKA-=hrduBSn~]c&5*IKI]^SE9gc}CA:d&kJ%xC9&0Mw');

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
