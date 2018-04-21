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
define('DB_NAME', 'wp_mazzaglia');

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
define('AUTH_KEY',         '|$Sp/nf/?i2Z@%O f)G.[n8ZEc.6.VmUDGb)7ZqwEkKD+[gG`990&iI}Xy&0C.SX');
define('SECURE_AUTH_KEY',  'b_Lw>1]=fVGnwY?nH+yJb+ u41Y[uv_Gn/N|kyni@p>fyEb6~da^/ZpjY*SZoolr');
define('LOGGED_IN_KEY',    '{Czy5E 5PkBELUcIgn7% $z;QR2xrVOX~jx8nQD$ebhOh`Qex)Q&L7vlYj)@y)>p');
define('NONCE_KEY',        'TO@Ahf+~y`{G0.yhx2B/[loAJ^_TZ1>P{Zirmk~D>k|5>P5Q+lbp5rb;kqY>_*:w');
define('AUTH_SALT',        '>>}-^0k_,<dRf&*kl)8q%UoBz;K mjJQ|S9qM>@Q^v^u1l@_<rA]=9W:$p^y|[^P');
define('SECURE_AUTH_SALT', '&3]i0905/H,Mkno[`k2?p(HAxLKUc+2%g4=81aZ6l.4EN!IGDR_Pe(5]Evn+7L|_');
define('LOGGED_IN_SALT',   '<`} 10t!;i<i0:U,K*4<aAC*e&WXq#oZBG(IJ9ji]D.K[#@]XoaTwus2<.WWA$PA');
define('NONCE_SALT',       '}8Y*%>1?.yMgrs%,,@LY#S=QTa%qR`~9$W{J!r<U|e 3PP;f n_^KjflkWPq&n-9');

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
