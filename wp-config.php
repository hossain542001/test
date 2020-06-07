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
define( 'DB_NAME', 'petscare' );

/** MySQL database username */
define( 'DB_USER', 'petscare' );

/** MySQL database password */
define( 'DB_PASSWORD', 'yd3KMwXZPUI5d2S1' );

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
define( 'AUTH_KEY',         'Z GpFse.*ocgOafw4tp$x:6JcK8[:CT)5Ibz2/qsxx_WT(D H2x/|s]C+1Bwjc?Q' );
define( 'SECURE_AUTH_KEY',  'ti%1tO<8M.z`^?-u4l?RQvU6 U>BfegRqznHrCD(;oYH8H <GOpgNd{eMvD`4H; ' );
define( 'LOGGED_IN_KEY',    'Ceswmkv[_DA&A+L)3Sv;lAK^~xP!!mxX$*r%x8[hm@BV9@rjp{@L1?-IZ5`:&-W>' );
define( 'NONCE_KEY',        'pN,o>ck&P_}1MH.O-(SwNdP)0O0&m=$wQ(LEDZd+wcq&cZ3e=Z4Ea4]3Ugykl,hj' );
define( 'AUTH_SALT',        'zB|1yLMxE$z}_=yx*cgzUDmbNV{,*sZQ&rP>p-ry b1_q/cp)PHzke=am}hMr^`&' );
define( 'SECURE_AUTH_SALT', 'pn:s=`W,tX@rZ_BWEdNLMBT.!b^~TwL<S HU*Y}Cj;m.w$d3lbvk8$En<b^BJm?[' );
define( 'LOGGED_IN_SALT',   '1S+8?a6JRrQ0t.P6 NZf:ev@.R*h*{HnRC2cZBQr=25vhAo~>>~FQYsuE=wFq:P8' );
define( 'NONCE_SALT',       'M(JM%|d!cPthO`<mLHqG!0rf1cSh^[RSabjZhL(I-@z:Lx7=`]X~=wEmFqg1s>t.' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hp_';

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
