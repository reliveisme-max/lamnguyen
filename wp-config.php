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
define( 'DB_NAME', 'lamnguyen' );

/** Database username */
define( 'DB_USER', 'lamnguyen' );

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
define( 'AUTH_KEY',         'pq=J41;%ZFy8LNOuoQER2P0#J*NpYut&l6wWw5K~!(k~YCgD[q{4ndg|v%jpSn7U' );
define( 'SECURE_AUTH_KEY',  'b9U3SwgyHNCL5a3^$so}ME]WJp-dW_B?,NyNY?GrFp[iA@1,m|5YN1eSW*h%wE1V' );
define( 'LOGGED_IN_KEY',    'Zx[8$vm>?gs36(OPwi$F(<h8I$!G.=X/),X1b,S>xH,e(uI(C)Dt8sWmA7bQ-V w' );
define( 'NONCE_KEY',        '/ZmgnH+<@rWasRS6!G:P{UMK+z$$QHvDnB.yei3$^F_IOiT2[WYoFY>f[>O[QDWQ' );
define( 'AUTH_SALT',        '5f^,>b2h~;}6/}H_`.tyxl]=:6y1)_N`b,^r8{,bqxP*G{S{Bz9OEtX]`hDdgMHI' );
define( 'SECURE_AUTH_SALT', 'qp~}+NCP2KJ/Kw1R]]~LF(`8_.R%oH]{nG={c<EnKMD-vn~7|S@=$[cD`GQ.xtrV' );
define( 'LOGGED_IN_SALT',   'RudKFbi!68toK*.DCYJjPzy)+2IpyesHd:@)Qnti5n7N>w>*&:wxGwDa:#[xy_j[' );
define( 'NONCE_SALT',       '/4%cDQEsiu*=qwy)2/hS?hqitTD_m_cjuU@~Rna|RoToItfotXGzm`>^d-y$Cx8N' );

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
