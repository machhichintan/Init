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
define('DB_NAME', 'gelbart');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'samcom4');

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
define('AUTH_KEY',         'lBm2+i_CBN-;/SiL-GIExewbe):xeS}Ji8hVk@@1^gxIjAxD1y6@Q/Z*?K_1T_6[');
define('SECURE_AUTH_KEY',  'gP+=0W//r}Pf2`Pt5G(~!DaW{ct1(B56LF_mX)4j9kyN$tB]cG&xj[?YMH^l8=W?');
define('LOGGED_IN_KEY',    '3i,dM)^pSI~mV?oR|*O)la7w0~DS]fi8/H94X&c)AKbO{pSsY;:ma%!)Iaz0e0%&');
define('NONCE_KEY',        'bUe/,q;}?sdBy$hM=jz&%BS^3XwAH3%Bw|T%fae:/}KoOP fKkm;X[Dn~qf;Z^hq');
define('AUTH_SALT',        'oI<h=51_T1dQ~1uP]V;6a!6*-BW+(IZKF7T>d#B-;>.f`8-V(86U0lNzAy@_$6fR');
define('SECURE_AUTH_SALT', 'o9Ho[l8GOe<E}>;`BCcYq@_Yk-`,&~l]MhTSc(~g3_V),w`YHAt|P1eH=%Q8f$RE');
define('LOGGED_IN_SALT',   'A.y&buPjjGJhm#g.nG+~T>*hP[!Oc7vk|hw=/vWW^KkMjZ9/$*g$Fk3{lTrf*8QL');
define('NONCE_SALT',       '?QK+;(snR{0S.&W8RU9SgU<@9hOSG*Dll&8+gjl)6#woLB2/09MHx#u:F4N9a[TJ');

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

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
