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
define( 'DB_NAME', 'shaown' );

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
define( 'AUTH_KEY',         '?!kF:tw`0Ge*MG)x@cf+e!H6r`{ClAX:]3/M{8>^r)n-R%C`*c5Q|:1~s5VR=Diz' );
define( 'SECURE_AUTH_KEY',  'S$PBnC:k#LX6fY0~n}H#}QY-I9qbuCx!T:`?dK`5{|j&=eh/i5i]lCZ1KYx>?)hr' );
define( 'LOGGED_IN_KEY',    '[m.0F=A5[]5zGK8E]#c^fl9X_?^aEV=E+@AZ&2wgYp$nt( :6QF>@a R=uNKB3v@' );
define( 'NONCE_KEY',        '1%T3M]B$0Nu4uO)[6gz6A_i,oul?bC}}K/q3AFO0q=Dg+|W-zW]V]c|8m@C]EdQ{' );
define( 'AUTH_SALT',        '1$tk=jSWZKw{_TQWA# )!2wgP_x~EopJAgu7R]yZOd5T}cY oT#t%gS^&lQugW>h' );
define( 'SECURE_AUTH_SALT', 'bnnvzQ7X,<XeWZ#=ih)X /d0feTb]3&CK9PyzIqJ7N7|ygq?@WG2Mwg!`YOaq%jd' );
define( 'LOGGED_IN_SALT',   '_o3SozgrqH}*4SF?p{:dxTt-FL>/mIr)RUol<`11NQKfD0a3SJ7ClHXiN_rbpRe/' );
define( 'NONCE_SALT',       'l Vi:yu9>7ccj}R%c)uF>X;L;hbjtnx/O`nqUW5He-6J9H]|9|11oGi6gbp_Igu=' );

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
