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
define( 'DB_NAME', 'negocios_electronico' );

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
define( 'AUTH_KEY',         'W &+|AdzA[yw~XCCNeVm74*0gZ94=# n>,8%@f#Bh%:V}.mYC@dC==s{Zl3Vl`lu' );
define( 'SECURE_AUTH_KEY',  'h@IM!3xzsK}n/dB[qF*09[Yf6f/(<0D&u5R1EO2Aa`z{u#jyFxu9 zd=.s5>,<I$' );
define( 'LOGGED_IN_KEY',    'ZGx$W:9L2.Dyy?M)DJL@#iq61W}3@~PB0ZBIX!J1dz`_>y*KAwTqwCg&? ,/C1R^' );
define( 'NONCE_KEY',        'j%bW|2m?Z/fRUY0,;qPMZ@59Ywi{{*N^@c4%9*ImW:Ljr:hQiG%v##=yS`~GO)l:' );
define( 'AUTH_SALT',        'zCM:{c]J1Gq[ik  tEo:=n+y[-:Y6It0t(!ZfD!$?vW7T/k+K]@bT|=y0ZdwWY!(' );
define( 'SECURE_AUTH_SALT', '26.;fiSGqX:w)V*6j4Q_ /PVy0aO`jlk_]%|7#v/Ve]C}?GftE`A2-PHyV&^T1F8' );
define( 'LOGGED_IN_SALT',   '~|th~]k4/P[+cp+ef2)|tbX$E%N*/;vX/*sBfi:&g*PlLYARRQKRLLG7_;?gu&kl' );
define( 'NONCE_SALT',       '6ysA(F[m:m. ]_}oe#(aH5|WXCP28g({L9!&B9kgQ2F&XSkUUV_0u)sV[q1S-HWq' );

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
