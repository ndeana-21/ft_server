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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         ')k520M$$B|=c6S@Vg|+hhQ<G$SrgLIm0_`^B?!<.+kG%Dr|l7)LoCD6]~,YK|@0~');
define('SECURE_AUTH_KEY',  'X>L$Mvh]EeVcE+)he)t*zPh$umj>yBN=Xp2aQsH?ZPp&kA!bndgp9{Q|fdxu-EoU');
define('LOGGED_IN_KEY',    '_qS`6Q&N+b0?bzda;pSCb2?/<cWu2_<qIAkX&Ybk~w4Qldf7,cW09Z`|X*xo%XKQ');
define('NONCE_KEY',        'Kr@k)A|^+_ N1F5`++]HXi#1F lx-8T?5[Z[`.B9!&p^+W/z>Jj%P92O+j|Q3L[R');
define('AUTH_SALT',        'M3jDCFKTqh3{MG}0]uNJ/(54SVG&_:ay}N-+w}SHB TGbW{HHANd8R}jj>y/z$0W');
define('SECURE_AUTH_SALT', 'y1=sKK~q;?WSNXO:=i4vvEx^7fpe7Z;{<v|jHL2Z0VQm!85|Vw,cL-tv _-`/UGj');
define('LOGGED_IN_SALT',   'K9yQ/eS|kN^,<6CYuL^aK^,Yk?k#S|ZrUKbSuUNSpsEusp.{HD;0R8{a-!778GCe');
define('NONCE_SALT',       'S|>9}+qPZ0Wd)+H`Be:hZ3 f9vK?`*(:-w5q?Z;rFmA&? jm:rk/(F, M>fJ|aNE');

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
