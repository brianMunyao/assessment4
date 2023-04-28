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
define( 'DB_NAME', 'assessment4' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'u_ x0M#|2XiGJlZ3XRSXoA8rvDaMoLw<m)9ZajY6D{%Ndz7!e4XnH`~UtkU)zgps' );
define( 'SECURE_AUTH_KEY',  'vpDMXmz@HX#!@m w&|OA|2=PZ(4<Q7Gl~qE4F>YmvH_pwi*,.fL!xr{=U7wuz8xr' );
define( 'LOGGED_IN_KEY',    '7EX<P.A;c-~|$E}>i1O`1.BAuywWJV#FOl$<gp4btuZoi:BWp*45UiH?ko^;,X@;' );
define( 'NONCE_KEY',        'IYHD/%eQ5r>RKoi(,:d+-<V/rYri!`m1evhFcscpZ{JQOpn ~BoUo5B>?t8LmD.=' );
define( 'AUTH_SALT',        '-:0A,>s<`S+g5O2?dO|iT@{}Rf)wRo#a0K,IY3wu_28L@7A|VZ;+,[MND#Hahmzt' );
define( 'SECURE_AUTH_SALT', '#X0HjT2V)[[#NbKDB]YP~(0F[k7nx(woT> NH</C*.1,~4s:Hz(~TZs]Z3o`EOQj' );
define( 'LOGGED_IN_SALT',   'JVR}o#mRdxZQ5m?P^zl=%!6x=dm-R@uI2QCgCNE1jPD91DGhoNB=i*@CjIY#n#5N' );
define( 'NONCE_SALT',       'Nb&@|WL`]Km{JGvQVmO{A]=7z`q5`T*6A&4tt[aIv-s-a9vIyBlXA&j+$)9wj$$ ' );

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
