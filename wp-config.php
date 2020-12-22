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
define( 'DB_NAME', 'wordpress_sparrow' );

/** MySQL database username */
define( 'DB_USER', 'sparrow' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sparrow' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
// define( 'DB_HOST', '192.168.10.34' );
// define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'Ct(}NG#~7<0(8h|)Ztthir<LP@>w}i tD^iWnZ8@91y%dV;`.[`hi!sAotvDP{#&' );
define( 'SECURE_AUTH_KEY',  'nDS0Epy?8]Ms]?jPA+YibX/0=Ft+cg&JmcM3v6?n]Z,q<DXv%3g+bi+NOj%A /*P' );
define( 'LOGGED_IN_KEY',    '/o3 6/z9<ZtwTa}-iYGU1Y5|0a&.|0dec/!Q*Rzxg%7S@:~Y59#|{ZVP?NHB1Ei[' );
define( 'NONCE_KEY',        '=>PZ72$XSpfg3ImD%!]9AyW|u,J!b#tRf1cF}}`tu|Ib-/k^:t`/Ry^wSRgq-+co' );
define( 'AUTH_SALT',        'wR@`z`)&U<V48>m[3|`6Amg%f3*n];pXY3IPe9+14s^Pkrc]A,vBqfnCiT,~R4c9' );
define( 'SECURE_AUTH_SALT', 'w6Zy3Hk;mm?Xc7(lR)Y_Zk6qOVxBzMHKCJ:r&#)Gu)ogwOosVvji.{qXtQ-YYsz~' );
define( 'LOGGED_IN_SALT',   'u#YoBSF_us68R -p2QhKLMuxrtrV,3LKLf,g.MS=^i.{W)q41S!Mw-j6d7BQ^*Ao' );
define( 'NONCE_SALT',       '/},Xb-O cK(?xt,g<5O},N(4ZK-t;[-nrn#9E>%?YiTG/C);cK>S%[F^ P:,J.,O' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'frs_';

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
