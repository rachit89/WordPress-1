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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

/** Database hostname */
define( 'DB_HOST', 'hostname_here' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_HOME', 'https://rachit-wp.rtd.squareops.co.in' );
define( 'WP_SITEURL', 'https://rachit-wp.rtd.squareops.co.in' );
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)   $_SERVER['HTTPS']='on';

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
define('AUTH_KEY',         'GY`lduT*,z|J4q+[(ud)-Plo&bA>6X7<3]utl0N9%)n9<fz;A_chEIm==}0q>66[');
define('SECURE_AUTH_KEY',  'f=rWI7kM|,Zogs=-(Z(vG7y^/AM3)_XHS9[kL?|,*+OFLM~4>F@%~%*Njy/>(#!8');
define('LOGGED_IN_KEY',    'q2mb_|%hfEyC4SI%yXm#Z-CLkQK[M8Vl.(4hPqyyhf^1f@~f]xuY7*0<dC=e`WNX');
define('NONCE_KEY',        'Vq9@aMe&h/`3cIPz]m+-K(0iYN(&Bwy2>sa|)oCd|#Qi#gPi}828C(9;|F?f)M=m');
define('AUTH_SALT',        'xp54N)-2n*j&;`{gm_/O_L/#JVnfPWpmDtuGASHH@8. IlVml7(_uDl8|}*oU>kz');
define('SECURE_AUTH_SALT', 'OhoSA%E&c&|*6Mt+qOkSQSFYzcsDe2VhCUs7NC1Ej|G,4R%4h_3b/Jh54sxNJLXN');
define('LOGGED_IN_SALT',   'Im;pZ{^#/U5A3!0%JqNf&_+5CL,gNJ.@P]|J:Ppk{<qDq?o<w>fXN17WW-/)GHrA');
define('NONCE_SALT',       'n:RI)#7lahJJVsXT+%MI[+c&&/Jf5Qq3#lyh z>JHqJR4{KVzzq-N+xcRVt+{w8#');
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
