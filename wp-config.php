<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define('DB_NAME', 'mochisweet');
define('DB_NAME', 'cambridgecasual_wp4');


/** MySQL database username */
define('DB_USER', 'test');

/** MySQL database password */
define('DB_PASSWORD', '!1qaz@2wsx');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'fG|_3;qP9RIhuQ+/7j8O;p|R1-pBl^?v;H0ddy #w[A=/HT#j17@9z##l|K-5hy(');
define('SECURE_AUTH_KEY',  '&s4xzCQtx:*!-sik|-BY@#Eq`=4Fcvoqi/}-:@#+h}+?;?>0E@aKjC*@@+da2eBR');
define('LOGGED_IN_KEY',    '1PjC{-:uAd1Gsp?DD[}]!KcOT-e>3uNKg/~Jl;?-Q_=0@CMpHC=W+E[y4-cxl+DZ');
define('NONCE_KEY',        'Aav(|*C7k-73V/Fv$zw/&iw:imNy7M*V S4ya2k50mS?Nj/o=dp$/F}jZj3dT2^%');
define('AUTH_SALT',        'BG}dXwkJ&zF6CHPN(}lV!+sD+8-TC-K(-X1fokp:Mm-z/,{@)!DZVg.>:^->pj|g');
define('SECURE_AUTH_SALT', '/;aG{$k[ `d<a=y1A<<yKD}%5#dEmKD`EGOqOKg!Pmyy+Xbmb}*u1AVPYE>QN*y#');
define('LOGGED_IN_SALT',   '&7R/2vbfx4cM)Y@7|85>ud|L,l1.`@xpy6zi[:N[|+GL*I{HYnXN4-f9wiF$l(9i');
define('NONCE_SALT',       'fJM@WOH7C~Bf,x[cx[k+$rF*?o~E!O-Omxm-E&{cM1+WImfOOkN2anY@JarS3 W<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cc_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

// folder contains the resized images from knt_image_resize() in /library/knt.php
define('IMAGE_CACHE_FOLDER', '/imagecache/');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
