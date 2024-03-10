<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mandeladsa' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'N3t?PM?}it+z]X&|F ?D[SWmJoK2|Q+PeyA+C=N+y&]x!tqA70ifC)PKb`,S;h[Y' );
define( 'SECURE_AUTH_KEY',  '}AjI 32j4 `b/JvwN$vG#>CF0n&Nw MxL[CWP8aDqQj6)`cib^Zb#N%$}u0]y[q$' );
define( 'LOGGED_IN_KEY',    '_JY.10`B~/,8p}ZcApF;Ri;iQPxl$m6NM+cS{h>Jzj6*]*o+o0#G?#u%y|bY-|:0' );
define( 'NONCE_KEY',        'r#5j21qr}mqSfrvco%at$&hOrkx]/_7+tx%NT]{0MQs]$,Zuj5=XJg%$.~077, L' );
define( 'AUTH_SALT',        'S-`g)r,tE(C):!Av].g=tq5pf|:9L97OMotr&B op-5cZoo(3%`o9MQIt~5*A*/!' );
define( 'SECURE_AUTH_SALT', 'coK=-@JNmM)Q:ofC+Ain@~CUJ-^KJs&1v.K8AgQR0~Q0};QUUjCk$0EXJi0{=4rp' );
define( 'LOGGED_IN_SALT',   'P~o;f}jy-x.rUP/c>5y:$UxHG=@-jpd|Ovvb2P0<Y<YL|h]_O[R:$,MnGmQOymQV' );
define( 'NONCE_SALT',       'atz7bK/-1WS{u*V{Au@}DFG^b-y=Bme&tVz+2_4@OZQ,RPVBk)ir<`^ .Rzzkn/9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'md_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
