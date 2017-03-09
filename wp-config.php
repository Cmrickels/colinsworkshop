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
define('DB_NAME', 'rickelsworkshop');

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
define('AUTH_KEY',         'bk^=362 ^s.NOsciWoUPPdUvQ0JVjk{#5mlBiLSeO!o*#|*4l7L[1TwKz[X^.FoE');
define('SECURE_AUTH_KEY',  'h]/)9?D<O4iCUXiFXfiPG[2[:GQus<NkY3*&c*_t8]7wF-B$U__j/8]sR[r%C:eU');
define('LOGGED_IN_KEY',    '_GaU--HQoA4&kEXDU!&/|MZ/@TY.l#!&{!aDjVGRH3L+$J#s-Z,NG^EA6sF$-hmk');
define('NONCE_KEY',        'cxD;W` al/sQ[uVR_LB7i=xR4v;St2MhP|krs7K./@=!z.t0p.42|W#N}NlsIS>P');
define('AUTH_SALT',        '5auWb@DP9nSHm-;,z~n[RT]bVoE^]_1gul^0_{1U{zDsH:UB4%-c*6 y+)|PI}0$');
define('SECURE_AUTH_SALT', '[Wqi-3=Niyd<)&:CZ?D<EdeBeNe%=i^Fne)+f-hS6*dE/6vq:fUn{@oLp7nxSRT4');
define('LOGGED_IN_SALT',   '.yHaAuY+lJ:4QZC^#[#hmzH;MJ%K=Gc;gY`{Ub:XOI0_!p{p+rfd>%8!w 1nvfg6');
define('NONCE_SALT',       '0@E__1sYEe~W_!]&orws+E|~Wp(y1A^,[of_xkqKR%6.;;V/*KHdh&ucF,#w dm`');

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
