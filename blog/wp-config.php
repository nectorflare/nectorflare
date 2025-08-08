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
// define( 'DB_PASSWORD', 'Dhee@321' );
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
define( 'AUTH_KEY',         '<cJ]I9jbB;[8!QtuJCSFO8?RBAd=F*dpR=u:D )#h[#eYwbx@9DNS:rAeBtSK)?u' );
define( 'SECURE_AUTH_KEY',  'Iwivb&@2HyV,4O.s_D^4P+l{}O9U3RXIrY2a=AAN=hs?CJs[ m7xatq(JA$tb>;1' );
define( 'LOGGED_IN_KEY',    'c,x3Ea= LkI(_nI!fNUy%o;N]S$d4!k8mX~j$L~@x(J~EEhWpz8lw(1 L*Rlj-jW' );
define( 'NONCE_KEY',        '@H^.FM26NB:iP@5.P6{9TtH`8PQD%r[`)$T.]d|hQM^|1bw}U?2MgJ#+Hhk]<5FB' );
define( 'AUTH_SALT',        'L: *eFM=7(Alq|c0f)?)Ym3i*!^?S0JYwgt)1?3C.5-t2  5;USJB|J;$h/ULhs0' );
define( 'SECURE_AUTH_SALT', 'F2He@=r@iGi0Z;iw$=.;.c]heqm3j={`B@%,(]j,Of][FyI7DD,mlwpe?{lB8W4&' );
define( 'LOGGED_IN_SALT',   'O&HzAO^5YpuC#Gn7bU!;47BA7+TFX%Qvuf}x/sc8. sX*:(8?y$OXG/);:}xNgLC' );
define( 'NONCE_SALT',       'uO`ZDmtfqM.}aL, X}6#%cbZ|qM}pfSu%v}rR&-sS38Hp7RN>|XzgyhY}Jj1~x@.' );
define('FS_METHOD', 'direct');
define('WP_MEMORY_LIMIT', '256M');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one dat	abase if you give each
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
