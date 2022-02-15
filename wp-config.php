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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'SL' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ',`(WnC3C#M=U+oO|E(1rqHQ#I0jv~)VETTfeYgF~(mLB([DZ&KlbcX+L_WK Ey|P' );
define( 'SECURE_AUTH_KEY',  'Q`K@WKI,u+( |5NHn{_FU<u:Fqe4@u8Sw:Su,kdz.wj7Yg2*Y&HQ3*_ig0]bWb%0' );
define( 'LOGGED_IN_KEY',    'FGP X~r@oe{`lf$};[s0g3?K$Hy h${*g63N(ql/|eRzP[FzO6:wB0&a|0#|1#Nj' );
define( 'NONCE_KEY',        '_6ok)JN6$Bb*kOhN;a3YOQ~q<ZfGONj[$@<sR[: snobz,x~V0+zL<h?iugdAyT&' );
define( 'AUTH_SALT',        'o5Ed(2R6d#9}VD&cnzwbK]iv,=;{fvr#sJPd3{>}oUwYbu9ylJe(PXD cmumDwN;' );
define( 'SECURE_AUTH_SALT', '.QB/co)9u2/*PBhlu^?};2< ~t9E@1HR@?pYqLaenB_l6i1#6P0-!Q}:D2+rNOI}' );
define( 'LOGGED_IN_SALT',   'LmJ/uZQ: 56oMd`-Tv[q;WMF=]Bi-[MM] @8g%NKm~ko_Bi$Ou^{fDqjU<}CV<KP' );
define( 'NONCE_SALT',       'nc%keRuM#XhU6HVP*Y*Lf7e%2,@pgNS;3bjB/xSxF[SRx(Eh9?57tKl/NQPTZns-' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
