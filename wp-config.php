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
define( 'DB_NAME', 'gnuino' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ROOT' );

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
define( 'AUTH_KEY',         'V=J|dwV%DmU;Fk.X>nR+#RMu7MPFOUJ1.zk!%$A^XRXUbbHI}oChhh)IJu5N;=;=' );
define( 'SECURE_AUTH_KEY',  ';h<@Ol;rWD8^h#mb|RI,z[Ai?uUnEbbt[FhH?s[Y/rUgn@1qt!;=F_>/m;ExiN|<' );
define( 'LOGGED_IN_KEY',    'f~w|5*hRT^a[?Fks P|nk1`j8f|VVkEah! q4/#ohf2F:TG@X-{=zo0og<&U{JG[' );
define( 'NONCE_KEY',        'KTr5^43M=CGYfrE*{WWlVz}(/s,B9WdT:KTnK9}0M)_.AFEupl>M`*^J6Y{uWZ1Q' );
define( 'AUTH_SALT',        'x7$/Em/G0aVv*`TX91bKeGiIsQ8w`(Gp(J)^zpv[R_5j;#5W%YR?9(g$`Y$+rYyn' );
define( 'SECURE_AUTH_SALT', 'uZwUv&6d d-E%AWLU3ewUeI$sYl,3VFz3zH<PWk#9PY;uWB)g.ulqj$T{OTjo18)' );
define( 'LOGGED_IN_SALT',   'z5+.}`i9Wo|HzLYZSTbYwObz |c0oixSr^e U56:9tp;YE1?)&f0ltP?!;%:BF~#' );
define( 'NONCE_SALT',       'X;71VSG&X$M@1~;|&QjEo2S]/!_h%I{8*q2k^W@6SlB[Q Ob7vFAvfA[LRg0KM3<' );

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
