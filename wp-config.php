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
define('DB_NAME', 'roguenotion');

/** MySQL database username */
define('DB_USER', 'roguenotion');

/** MySQL database password */
define('DB_PASSWORD', 'T3henay41@Bastards');

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
define('AUTH_KEY',         '|CpS43xTG#|e<vJSP{|@wiP[gm)v+I2WZyn&=~/l}0f<O$V.(Ct>_db9`6JAo&*K');
define('SECURE_AUTH_KEY',  '{T#HwmLTn@b3ADqS1E8h@L&jW!4G1:wR&Oqh08Eg+jg`=(aaWrEqj@c&J>HHSXI~');
define('LOGGED_IN_KEY',    'yP7}W|n{vZWjI=GHq)t iXVQL@9=FlCgq%=UV`M%<mZc>&P.lw9f+,QkiF`lYKwj');
define('NONCE_KEY',        'Xc,(YG~%f9%7RBI|x/R{YV~p~>Tf|BgAUvulJ{jpM(t _hfq8-5tC@Vgehr`rH-Z');
define('AUTH_SALT',        'S+*n81<iV/Tj^?QGL<OVB2-/-(9Oa6PV-n|ri63]&h,f#ggN~T-~TrRpQB#*c}9}');
define('SECURE_AUTH_SALT', '^!KW<J9t>J@347cF+1^3*S%Dg$,KY?Brx|^Ag#T&L]<`)ux1[#+W%K6HKO*nN7~%');
define('LOGGED_IN_SALT',   'kXreq~M #klKODbVi0]Ux/;fm]^5|S?.@ut}dR5;v[4ZR4L;C~%VHE}95C&qWkf6');
define('NONCE_SALT',       'fDEw/+Id[e_*C.(.z|}x{l#1?XfhsxyO9.wFgEGE.0iikY)=kd%DU`ELH_T.o:#f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '713wp_';

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
