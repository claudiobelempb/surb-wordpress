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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '3Z]HTYr95!?P;kX/D-/u_oKz*hjG+B>d8n*w/`]7d93j8-5F-?V)92;M<P7D~Qd?' );
define( 'SECURE_AUTH_KEY',  'r( x)0MJR1=&,HRjiI@6aGYqe>iftip7F|!7|F#:1k*y Oy))e.5[QuF+NOD_mFI' );
define( 'LOGGED_IN_KEY',    '@-tuI9U&!R2o[023L[55i1$msOCc2^D*6Pe.S9)IS4[cg-ii-L|Q.cz}_[&p@%Zr' );
define( 'NONCE_KEY',        '2{1k,#zli: xO(.KNv@bFTK1tfL<!Vq<2gq_BSV,W&-{}-8Z>4>m7c45sP}puvO`' );
define( 'AUTH_SALT',        '+F0BN-kElF~OL5%L&(e_0:v<6KV!`*t/T7QS.?B`_^CisZLL99=atdpRxSg|YtJ{' );
define( 'SECURE_AUTH_SALT', 'm-yc* ( eS}e63m`x1RWkI%>~0v!d5-asli<&2Gjs(BZf4?>xD2xD_<7Fe#?Jb[N' );
define( 'LOGGED_IN_SALT',   '<,!j#u=Gk78vd@c0i%*[*hgD)t)/).4qb1*CJ4c~Q+i7d501H0I*7w;pjq??88=9' );
define( 'NONCE_SALT',       '-z*-jq_<O$gKy9{(Ez]ziVmBPf[Amb}?g^So$1tP,l3v`+PT/d&,zoN<Q#2)D9;x' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
