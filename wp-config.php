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
define('DB_NAME', 'coco');

/** MySQL database username */
define('DB_USER', 'coco');

/** MySQL database password */
define('DB_PASSWORD', 'OrpMc7uBFPqJCV6z');

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
define('AUTH_KEY',         'm*fDwHX+nAs6a^cirMV=V5X?b -5tYjyTol<FQ)ha4h.b~d!cTk aIti5X@}-Zf^');
define('SECURE_AUTH_KEY',  's0C}Ox|Wq:`/|vHo50&v y&(]sky8vcw&&8kI4Fb(e&Bj0:}6wecHM)`&ce#;zHN');
define('LOGGED_IN_KEY',    '  Shd]WVf/UhMU,z8>bpvpA,7wK$8h_Au5gA[a6ivUXfk)#Sp6;O%e9e)%U^yD]F');
define('NONCE_KEY',        'Yr3xu2n>HiCryU;S~ K0f14x^<R9|Pe(>AHAK10(Op=RIs4^hpNBF!feHpHtg}f{');
define('AUTH_SALT',        ' UAhcfz*Ir{Z*C85 72LVq?-E%q+pLjCt18 + qxX+P5-60qCTD5|BQ}np@fY.+R');
define('SECURE_AUTH_SALT', 'Z(<*0%x9!B!xh`S3^Rtb[]SiW?S+edc`C_BRb#+!b8:L8dXClHq%5c8tf7vjJIU-');
define('LOGGED_IN_SALT',   'r+wVN-#l=Hbn`udQdXIy#`YuAyg>>+QSVDQ~K$=E!~%8>%(R)a:%#V_jpMl268<I');
define('NONCE_SALT',       'FnIvxl^Y6++tC|_W[8|8h H:A3FKO^@Z#9tJR3^|BDYs0D_V,tS>E{12/siFwJ=~');

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
