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
define('DB_NAME', 'jumpdesign');

/** MySQL database username */
define('DB_USER', 'jumpdesign');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'mU0zbZ.n)WkgAGKo~yhGJn+m~Zr%j_Fj-/wB]cC mBtKE5Br%se#zt+nhd)c)z3;');
define('SECURE_AUTH_KEY',  '0V^:5o|h5KH-qMc$%+Rzd(53vp ~%>#(Ncpmu:/x=^h^12Vz|#@yh !?:0++jkbe');
define('LOGGED_IN_KEY',    '_YxBj+R~jO.,Doc,B$PU{R5NTi*|m-,@`5(}(Q@$-N/+HsASmdV }i%Q?9}0eV^f');
define('NONCE_KEY',        'jDmSA6UVO7P;efQ$F+[r`^j-$yoj.PF~*r2Sc0Iu4G~rf|~+2yW&ZyD_p?3A2~/T');
define('AUTH_SALT',        'EQ>uVl%<oeua_6+|$X;My[1G=78g(*:q=h&S}j*I<R08%p&$et6oL!C:TWeP{6T>');
define('SECURE_AUTH_SALT', '`+oc-o{2xH}]Fa0F4{s}<,im;8S;L;?c_?#j<!ygIyzAjC`((9/cW|J|~H!wg)+c');
define('LOGGED_IN_SALT',   '~tPhE*1qu^;[mCG@fz;sN|{nKtToMg21^xfgF| )z niM`qxUnS%C51#Wn;*8?#/');
define('NONCE_SALT',       'v?[Cxx!UJ-7-(4@p$~^OZ69N:r=;hD!fSQ>@JlAZ$^yyl`]U|cwHe~Ko[2qD#-US');

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
