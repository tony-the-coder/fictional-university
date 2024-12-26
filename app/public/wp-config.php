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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'Ct*ld=+ca(Klf;1Ms,p4KYN*Zt=n)pMq(<q787>~mL6XBjFQzx4.] A>UDh`qACa' );
define( 'SECURE_AUTH_KEY',   'Ijg8i^:].l]0o{SH8E#|*]<q1W4PfUjPJ<2oy}ra*.rq0//qzAg&HCaJn`@m{W46' );
define( 'LOGGED_IN_KEY',     '#-=A:kK,Z>%@AS77a@:i0af{(m*aAH0Khn@VsTK$L:(QncT~tN}xOb%G2nUd9En*' );
define( 'NONCE_KEY',         'R#Jl_[KVdN|sq}2^p>{,6eQ-y&[_7lJ{64#m5>Bb[vm`~3/j,wF1,0&exJ <[(06' );
define( 'AUTH_SALT',         'mipi1>|x-UgixFmgJ/+|V1Lf>9[VA(!z77jv~;17a _|/ZPe3v@?wt{.+dM+;cw,' );
define( 'SECURE_AUTH_SALT',  '5^*BJvMLge$^F2TvGadVF-]#Og(}&JvclVk ~_11bq-}VxXSU2<q!{5f;NkF#((,' );
define( 'LOGGED_IN_SALT',    'M)j,tj8IUiE|136U6w!8<M:57NsDt]A/*~)h#t3_?P$|i5`YZTEB<tz?>YmNmvLw' );
define( 'NONCE_SALT',        '[`Ug7(ImWcZO=~%O|_}s%:c%=!3@WNvZ[sGf;xX&I<Po*CP1>oaRpET+T,cVyUl<' );
define( 'WP_CACHE_KEY_SALT', '3:g!.,9^QPxCxg[W^eX-^_M$z iaen~X0!#in4snOR}tB97>CY;0RSYpCw9-JZNU' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
