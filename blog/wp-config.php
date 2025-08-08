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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nectorflare_blog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Dhee@321' );

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
define( 'AUTH_KEY',         '$82n[hfqck%B%Lg$ycsbZD.[<,JQ}3n*Ev%QE2&E{VMIQmVv{6:b:/Nm)gO?YU;{' );
define( 'SECURE_AUTH_KEY',  'WElz ~,3IKK}jW!PJ6+k+zcyc,iee)(=N8NHGI+p#qQUa9 J`oCeW,Stp<djX/Z+' );
define( 'LOGGED_IN_KEY',    'wwA4b2ZY`G!EFXdSKf%c33;g: uZ}:AnH3Q8XPDTa|CqCR&5dvX}L-RQ~sN[ArVU' );
define( 'NONCE_KEY',        'cT3 :Aoi~/5EqPyU7yvd7+F+?QPVCz&E>.dK[ec.X!NEuB`7P0li~=o`Gg_5pCMp' );
define( 'AUTH_SALT',        '@Hzr;5SS}McV}et#46^w`9G;+k]*7~d~?LTbZ|2ca>D<FRR_:-{Aa0jCw Y4wfWj' );
define( 'SECURE_AUTH_SALT', ',`a{8L=$^7zK<>F`Sh _y>;.KT9YS|iBhu_Zb0ucRS3uWmr]vyw7>Xu4JW,dL?@!' );
define( 'LOGGED_IN_SALT',   'bE/Gi6oLF%aa6=m(sa(TP]4p3pV+<NAS5wn;/{(xSI|QDWIfcE!j(m8(LI{a)edP' );
define( 'NONCE_SALT',       '$^8IXw9&6+R6ZQI:c+B 16.U0,|ka}&zTw!BSO,yRoGQ)M86wTI>-}n-rvW!gn)-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
