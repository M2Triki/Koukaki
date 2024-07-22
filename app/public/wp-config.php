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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '[zafLWW^ze(-B$WoE@|?2.jT]7Ud@[bHRJnDw.{f<Pm1?I3BC+dVC4&95xGWWNx8' );
define( 'SECURE_AUTH_KEY',   'J-YEVz:xR6>.(96PHYhNUkHn{EOhI/PTPj(ZuX_{7+g?)I1$=3 |ky<NQ4<[Yu9L' );
define( 'LOGGED_IN_KEY',     'z}g+urflnCL_w|ja`@4`9S~v0{HT-RTNm9 1O(<Xe-(N,;dI=6K-n2CDdxv|~KCN' );
define( 'NONCE_KEY',         '.Pk#U[|Le/-``XgBWi0X0A.[4j^AXrC@LT?WyXZEyuS^%kcG~a+ qe0IzjS(8f0V' );
define( 'AUTH_SALT',         'Goov%:]gA>L.~aWc{rS$,#6?obtG|y*e5s7s0*`x9eF2d:vKYdubt6()v*s4}(5Y' );
define( 'SECURE_AUTH_SALT',  'm-ja>O`$SqRa>wLPYN8;#bZ ~]h@0Qaw8!qL{W*Gmu}{RY.Iu@L:@->=|U q1D@$' );
define( 'LOGGED_IN_SALT',    'PEbQ3QNBHN3U#,y7:{tn>B#9WjaEoM?vUOs`:jy_<VKsBxeU)e2k1HH|wt2i/Sb*' );
define( 'NONCE_SALT',        '@r~e94Tz#^U7pAG!xH{o:Q,,eAarh=o{#kqHGY/>)j2=}-nh{Nc}p/f(MHX;2v:i' );
define( 'WP_CACHE_KEY_SALT', 'vlG-V=}_HM%E^akDioqHv83<XsSb`X}!)8z]:~o#r!DK fS V+KG,gTw|XlgXJ}7' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
