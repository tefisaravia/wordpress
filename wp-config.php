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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!Bld5b9{M$Vpea&UX0.? X OaiySfojLBf,vEz/Sz4O243*=bZAN7ypIQh&2;(x/' );
define( 'SECURE_AUTH_KEY',  '/Sv2?$qp[r^>ZXfu/JP)p0g#Dbj6Z)LX.)?Sr@H{u2:$_RT-xIfUv1;!`& :Wgf%' );
define( 'LOGGED_IN_KEY',    'F3H{$bp}vMQ|8);i2|-Hpu&KSi@fd@/}bYh!,9%=% Txv;i`+-:fcx_ARE^aL% J' );
define( 'NONCE_KEY',        'o5W0~F .r4v+DF@RmGimw=uv n1Vr9Z-Mu?>L]zL:Km{!Hz1[a4neW=~HFpc5YcH' );
define( 'AUTH_SALT',        'RYqq{[L:!~t-&I+`ctx+NG<q{~Qn+0Mo]VRtc5Hub&HZ:&HAY]bU-U]`_c[%I+=f' );
define( 'SECURE_AUTH_SALT', 'zF4yE,&g5zc3B+BZ.:W(kmb&5qF1t~6z9-=#EkV0j:#gV$^FDtVWG;Q@z#|b&F)P' );
define( 'LOGGED_IN_SALT',   'LDoT//r?tE4Rk[N#4tw<LvR|BtdG@,{B&X7k_A/#c4r~YZ8tIbw.@KXZ~Z5Saz8~' );
define( 'NONCE_SALT',       'T0@ #m/5zl7YV8vck+BL)BTpVpK_SK$xTtJPV:6k~&[Ly(F(%PuoEYE+rAI`cG&S' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
