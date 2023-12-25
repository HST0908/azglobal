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
define( 'DB_NAME', 'azGlobal' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'Hi77EWnvb7J1HPWu3PmrQntWkE9jUDRdph8mAuor2msEXu75sklMR6HlIpn7m3Zx' );
define( 'SECURE_AUTH_KEY',  'eR0JAxKgjCrVUlwhLrrlk8UY34wKcNG3ifuIPSxyxGNtDzlZt1eBvvW3Lles9pmd' );
define( 'LOGGED_IN_KEY',    'tY8JWiw0WeBucUZsrnxVt14kfdRYp0vluR2pwNWA2Nr0zMIQ53h9XFYxBowIJhff' );
define( 'NONCE_KEY',        'elxRFpMoql4AOXdCkPuqYSCm8zHsTJZggePmwLryyBrYad6BEFIgYC2ImmIBkIkk' );
define( 'AUTH_SALT',        'vPMbawodPCaNwKpnScQcXBbWPfNN5LPu5R66gGez8vhvQEmpbJbuvKLViFsVzrY6' );
define( 'SECURE_AUTH_SALT', '1ztJIsUMTut8Y4Ky0omKhu39nvoEUJZBylfU89bzCt7K7YJdgyqOfOjg7aHvF6X0' );
define( 'LOGGED_IN_SALT',   '65FDPGslXOfL4vxzZkpjoY5A6mOwmyPtT4hytqNRbdORhPKiawZbiKWlzTH6Nti9' );
define( 'NONCE_SALT',       'ZaT3d2VilzOLWtuX3xcWY2GbmcCyIRQV3E4GiBudlWecd8VdxY3PoZ2D9hZqRSPz' );

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
define( 'AUTOMATIC_UPDATER_DISABLED', true );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
