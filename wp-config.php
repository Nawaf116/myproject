<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'nawaf' );

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
define( 'AUTH_KEY',         'DwvC`jF*N5zMr#|^{]|n*lNL`_K]-4DrT[_sF[z!)H/$,|A@HZ8BtlW5uxedF9gl' );
define( 'SECURE_AUTH_KEY',  'qlGFV?(3y(8(kt<jn+jx;`U|Ld}0G.N}E]P.(#,U:,Ws=CV=iOxU2G_=E q<31$;' );
define( 'LOGGED_IN_KEY',    ':z5iGHrbk#S@W&n+Xe.bvDrj7Z}crB(lqMPIm=$4+a3T 4>mi-}jji{_BR9#;${y' );
define( 'NONCE_KEY',        'K~H.4WA|hbVC.1HYF%T]& 9}DDj0wK:4Mu:}za ojkzJJ#`_Z2izTpbw.>8}6[%@' );
define( 'AUTH_SALT',        '|`?$YZ=-jb-}kJRJQ=|~97y&${,!g1`xehAJEhvdD5L %9Z>T]H$?w3}~Ou{DEk>' );
define( 'SECURE_AUTH_SALT', '%7kM4 D.*V$[y%!>n~!j_^[aV.x4xrAgUT_:2J{!cJL<?SLvVUn)DsNE7IfHO^Si' );
define( 'LOGGED_IN_SALT',   '$=~msi~Ql%JKpCbgXn$=PPicuN6-I_]%O@6&K]/C%5R+;bm|m#S+HuYxL#)Xb9gh' );
define( 'NONCE_SALT',       't/5wSj_{:uo@z#pzF.R,YICh[5]L2H{[YycjSBBCW-)I*e`44`($PslxFqOMWNIm' );

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
