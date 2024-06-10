<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'ThirdTry_db' );

/** Database username */
define( 'DB_USER', 'MetalJag' );

/** Database password */
define( 'DB_PASSWORD', 'ProcDoprdeleJsouVHeslePovoleneJenNektereZnaky' );

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
define( 'AUTH_KEY',         'RX6!f;P5hPK 2]aQ:<v>V1Z{j1UWN38r/.y8U)E9e]<+hv&|0:9gD>Ic/WD|J<Im' );
define( 'SECURE_AUTH_KEY',  '0C@t?HOv.-ysKGl[*xSvoD22GK6{hZ/O.,Z|FvoCF7vmyo7e1_w^]3HXm2#^,(EP' );
define( 'LOGGED_IN_KEY',    'aPj?SBldLuEu,h^F%$~.Bl(OSp(BSJ?JR<J8>]ltZ[}M!}e)/pJW_nx7H#V_2HDD' );
define( 'NONCE_KEY',        'wX`N|ss2Hk:F?ZuGK`9}0JlIIT=DA;/Ks0-}hKv.+}Z&PBg)GJ(m3IhG|IwR u_-' );
define( 'AUTH_SALT',        'FhI(N}hX6{F;E(N}z4 _WyehbRb+A{Or2h=sM>% ,Aa_X<A5xvX7mH`V4{`^@&Xr' );
define( 'SECURE_AUTH_SALT', ')%|cY?Qd0#-9JhHsA.sa.7q0WZIf l$SW|62e[ES<fj#~q].g%|hie<K94i^UIC*' );
define( 'LOGGED_IN_SALT',   'xRy~@w_<Ra-Cog[jQQwdZ9f21+wY))1sE~5&V13R1vjb+Rt)+w~->eh;S)?UDpK;' );
define( 'NONCE_SALT',       ';ymd)eDU09a%k>m_y*)6!t)^_G/KIgaZh+cIdtf+?vkAeG~6Lvs^Z++t&^(!`5L9' );

/**#@-*/

/**
 * WordPress database table prefix.
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
