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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         '>)@Bbyvq^93)uPfb^*Q9[1k,3!88y~ie*B-`zXID.7kLk2qee5n=wi_/h%XuWxfR' );
define( 'SECURE_AUTH_KEY',  'Eu%AUVe+iUESd2O43$,-z~hZS9rX<EqD!#X;+<Byab#gc{s49.x>GYz}HYhq2}@|' );
define( 'LOGGED_IN_KEY',    't}]EcDO={TxvL(v[ys0sHj_jOkS6=B> g;,(|N&>|v)D9h ?Y51~&_z?~q.QR}Ot' );
define( 'NONCE_KEY',        'F[@hP?~g)3{g73S*74wn1ZSl+H}oh6C/XJ+==IJ 7;v*?GXTsNuW;PnhCR(P%_0#' );
define( 'AUTH_SALT',        'D<(RzeIEF@O_>qiZcxlCbO#IoI~86spl9;t[XW@eq8xMzWWLfs!rMno@M#gDbkQ9' );
define( 'SECURE_AUTH_SALT', 'L.2W$Cv@0z,WbY/Q[`TI2{<.>AJ~X2Rq&Eab3jGu#S)d3H0umrz4!F>JiBSesV1^' );
define( 'LOGGED_IN_SALT',   '<iaBR.e,l7z=6rQW*rGyH^TT8pl5~,B=X.?U4^o?+Cfv-d,;QozjI?Ib;PF+Hr46' );
define( 'NONCE_SALT',       '~2&[5miao;ouO#ZJ)Fi[T#c}Zi:E^P hF9W(`65mZFtMLEV}-m`:Y:%6&aXe5+Q6' );

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
