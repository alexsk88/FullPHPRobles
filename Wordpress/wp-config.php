<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aprendiendo_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'GC2{OTtxaavOc6: i**F[+qog.GQPdMKq*_3p;),=b@0qtdV[h];RvM6~|jZDbgG' );
define( 'SECURE_AUTH_KEY',  'FST-OY@zjt$Zo^X_z-^pfQW|Zd>=-V-6O).meuHd%NX[`H`F`yV8eGtJvS.wyOL@' );
define( 'LOGGED_IN_KEY',    'J_b[_# $A6`+l4>GR-B0yd})v92pEYCY.}+ ^Bb&#J[evCeHQu7l?&[:C VCh_*V' );
define( 'NONCE_KEY',        'h;x?hPCk4[/E@N^-PT|nG8W}[Tx[a~h4./xb>R/*PEaZ8B&cg9{<rNy$<<c9zbN1' );
define( 'AUTH_SALT',        'HI5M`6I{5>H26lb2SU>}BNFi0+Ee6F83a`9=0TVHrh.^#.B.Di`Wv1<0kndM_:Gy' );
define( 'SECURE_AUTH_SALT', '~nfu@L9$Bh@kg53#zZ/Uo/_%f J#yqO`)|~zt9%?h-Ky@0(3,8dYElPGuBAOW[dZ' );
define( 'LOGGED_IN_SALT',   'WWN}i8>Lu0o{NiT8M-|$4+Po) Bm9Welo(!Xl>C`#5C+or+_vWEnWf4AKKk;#/t/' );
define( 'NONCE_SALT',       '7JGd@8Oz;p`VW^P*tXXwydT~H-4@mFX< &Y$5Tpe+TaTgizmZ2E> QnRfYD7T<y}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
