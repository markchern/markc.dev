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
define('DB_NAME', 'markcDBmxiia');

/** MySQL database username */
define('DB_USER', 'markcDBmxiia');

/** MySQL database password */
define('DB_PASSWORD', 'JdPsjJBm');

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
define('AUTH_KEY',         '66.y<Pjbn3E7M3{Bn$r$IUMc>7Sh;H9Lx#*;apiPeTe;92Ht.+{XieuATk-KdROh1');
define('SECURE_AUTH_KEY',  '^fr3IBU^>7n^vr^McYn7NBUJz}>@0gzo<+xm*PHaXqi2LAATIy.*3{buqf$MAXT');
define('LOGGED_IN_KEY',    '@Go~wh8OCS_w[IbQ^3,7n^vr,UJfcQj3MB7QJz}>80gzrgzNBURkY>Bti+LeTPi2');
define('NONCE_KEY',        'nnzg+]Wmeui;D6Lx{Amyq*LbTjEAQul-o8RKGZ[~:[Csh-w]~OhdSl5OD9S_x]#9');
define('AUTH_SALT',        'Z4JZ|4{AmaqiyETmbI6Iu.${bqn$IXQEU^3>7r^9:Hw]~-;eSli+p9SPDW#9;]Dt');
define('SECURE_AUTH_SALT', 'VXi;E6Mu.$<Tmbq6MEU^<u,y,QfYn3I_2etm+DSL2HAP+].;XmeuALf<6{6iy:C[');
define('LOGGED_IN_SALT',   '6l-p9SODW#9:#9p_wt#WOheSl5OD9S_x]#92i+pm*LeSv|VJgcRk4NC8R!v[|8:cw');
define('NONCE_SALT',       ',yr3F{F}7^nz}z^nUnzgJUBUcJ0@,6_;+ip.pWeLeqWAL2LTA<t*;+<uau*mPbHbI');

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
