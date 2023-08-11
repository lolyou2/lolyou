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
define( 'DB_NAME', 'lolyou_db' );

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
define( 'AUTH_KEY',         'N?@ducrkJkR.t5$i2< +6!)9yd*GYw[=5=0ePEbQu =t4lZ.;Q11TdA2+:A6>Y^L' );
define( 'SECURE_AUTH_KEY',  'L8Pv0)@d/i*5c}UQQ)wKpoQ8O3p!fsqpyC%=emHN/384r3)3M%UfIBzn^GGJRj%U' );
define( 'LOGGED_IN_KEY',    '!he.5&tV({7SH2M}fI<W/A 32vMFtW#Dm:|?p,y<4mar6qu(S/lRS?a@%A07d>J7' );
define( 'NONCE_KEY',        'EJZ>i7WYZ<7ER>%HR3Q=#Pof?_Z]W[6&toB/hCh/va]{*+<O0cBE_u}5yRLjDou;' );
define( 'AUTH_SALT',        'Vw[z91_$h3mS/wp),chN>s=<pXTO$Rd&+3?VyMoLDp .c$0Y@; g>?q}=$eWTYl:' );
define( 'SECURE_AUTH_SALT', '=}vs]uVSI,#RY3nJA^j{sCUIgrpx3(sLeR8c[AW#:Ue^0Iy:?pZW;@^9uKv8Tgv.' );
define( 'LOGGED_IN_SALT',   'N6T{9zs80z:6s;o?L7x||qP@Kk%RfD.R2QYy&TF]elj<phyCS}MBa4rW5JyrLfo]' );
define( 'NONCE_SALT',       'y*Yo56sF&DA`o4hNA3SVD?CnCFK#RKzx{Pz.:$@qs=]zl&osmv&g9GM8q X:z<b%' );

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
