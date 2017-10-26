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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '5fhvO;:RD7aD|v, Z`n%z bz2byM]!*=t5~yj~SP,dumzWIj qr8EkaLSjojqIvx');
define('SECURE_AUTH_KEY',  'u-NuR|9!m>C`mIFsTH+qas+nW^?,oY.$W7lj^=:EW[_GD!F(*I(z0!*,kkmfZqP#');
define('LOGGED_IN_KEY',    'OP8o34MP8UM@`2OB3.EbvS;0=ny<C:q=CMA]~QAPqq3(*cG(N0]C]/a#WoRog:C?');
define('NONCE_KEY',        'y8d8(]tG<,t}(8@6C0b3{P1UNJM_^I zh@FHnAPjuK>94N_KWKz%+^urn19Kk,Fg');
define('AUTH_SALT',        'XPIvdgdXn2,|yzBtc%Pv3aH]KozIS;h3#kq)?Ln`t= R(X`PQjzY1Y(R!&}YUq+j');
define('SECURE_AUTH_SALT', '=!oY=wDeP;|JV+Z;&W}WQ.JNB[!b&EDjKwZX&;dw @/&+ud8XZA?7$iF^mFA-|_K');
define('LOGGED_IN_SALT',   '1mM|E0y)-^lXcA-D$jk16LsmS*ToC(A^u,W@pp7]cg)wRF_.oLj}`TV.aTy&:MZc');
define('NONCE_SALT',       'uJ_UHokoAOLABz+y[&0wdT(O~7Hz VR6^NXS?]3?p{=={S=)wF=6R,KzPv7/]PO^');

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
