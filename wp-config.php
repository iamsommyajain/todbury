<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u296709950_3wjGd' );

/** Database username */
define( 'DB_USER', 'u296709950_9mnbr' );

/** Database password */
define( 'DB_PASSWORD', 'M6x6oKAXvY' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ':7{SzcdH` lgq|z#FdL8`X/r^wvJhO#%1zlx!#n`jixs~Y3v8~3n15 wcuwlc&#%' );
define( 'SECURE_AUTH_KEY',   'k#~pA3X%7@NH(:{HmZdi8Ep&FQ>hzO=4-,R:Cqa8B(nEDdw%mh%;^cS??<(@b}9{' );
define( 'LOGGED_IN_KEY',     '+Dc|/)$/.CV6z%/9_~ag%9g0B[,K47w>0kf6a7ruqAp4[ys6ZLp~0O!6_tAc[{:r' );
define( 'NONCE_KEY',         'O0pr~%EcJE;n% 7!!>5C%G7_Ex&`1r#z!N|Fn$_^%jv=m=;.jBAW)TB/:aGB)B&q' );
define( 'AUTH_SALT',         ')=0WG@cn[xnZ+wYMx*A0kQ@:g92!S`1sf#X:7M9bV)5Q)qjg9M31g:f1DGki8:.f' );
define( 'SECURE_AUTH_SALT',  '-|,T6Z61Dk)<jrdcM-9<yS;@BMt}v9:x)W)A+v@(6Sr/j%Fx8>{^5K0a}B;dz{oU' );
define( 'LOGGED_IN_SALT',    '@<XfrTM 8Nmb,*gjj@EM><T@v</pw) |WU J`5&OdL:E/+iUbS95Qju/j`W!FPdK' );
define( 'NONCE_SALT',        'C?|,6X,E<Xrm3X,i4wpNqE3>(G_ZX0uP*J.9)#P_y<{l.6D)A8vn-^H.GglDgR6o' );
define( 'WP_CACHE_KEY_SALT', '^Wy@4<Mgzl[5?ixjH+#7CJAD3pU]LH[>A%MyKNcJ;$DVuK)v@fS+-|M6)HRVKM0A' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
