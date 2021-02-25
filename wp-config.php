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
define( 'DB_NAME', 'assessment' );

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
define( 'AUTH_KEY',         'K05^C6}O]6dE#D1Xdz/5mZ$I#a~09gjfeatw6ks$JH?%z_]T1[Q{$}wLZ`0Xx=N ' );
define( 'SECURE_AUTH_KEY',  'W[PE( $}PqJSNX!&;ktS;zo5ucb+^a]H&m.V%JM#-arGwTwePV|c%c+h.w?bE:Jj' );
define( 'LOGGED_IN_KEY',    ';8ww5dW~+~/3t1DgbT1M[7a$6R7p+FiMmvKYY%FN$MWkj|vr3|4%Q$}Nh?j~p%s,' );
define( 'NONCE_KEY',        '.UX()|UupL5e%XkpZsRJX1I~T2dy)E/7G`uTc T$4Pak+[V^6WwWX1Qw@KhBwCT,' );
define( 'AUTH_SALT',        'qI2d2S?337Qni8Vv1Gm*3<`,,Gv/qodm)q6Ye%s5IjI3p}#!@WNKBK~q<BjYHr)%' );
define( 'SECURE_AUTH_SALT', 'bJAZ,L[svt2;<3oMY]KT&9 .S(6o5/@N8<p*y@_Ns4!CUzCI%K9k]3vr=?U)9Y_*' );
define( 'LOGGED_IN_SALT',   'TQR.StYY;opiMVn?/?zy]{ja%!~BQ[_Snf;DGt8H8RJ7IrP?4kd4(RV|!M691GTT' );
define( 'NONCE_SALT',       'i!RM*@!dp8hgRXoe@-v{4nJMXI%Mtbf?,Z_XiK_Sc^&b8D6z^7e`|K2r4]1oo/qj' );

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
