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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'flower-power' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'ljW?JJ8onBS8rY;?-2<&B4,op4AIJj0]Z2M{< :)1_*l)FvIYcHu45cC[h,=m-?3' );
define( 'SECURE_AUTH_KEY',  'Q2+ne7t!$L&{7bv9wJ%S(O<0@c ZwOr1(-)6^p2M<|bU(|%(,ULLyH#,rJbl?a#|' );
define( 'LOGGED_IN_KEY',    '>4$}LIvo&t4S:+T[mEty{L2[e?Cd]lr5s<u_ahRzi#rSC-`D95?^:vgxT6?jI?>w' );
define( 'NONCE_KEY',        'Mt$DD{3_fm}1)^^}|ptS+K9^+U&CGa1Zr7=4%,WE7IG{/X(.{XRO5H1UT=Shj7{M' );
define( 'AUTH_SALT',        'M5Kj,0Ln|2K|kW%&wl,2~o.mwUvm @$h1oNsd3SVwEK8Wh,/x/G,E/{H`=sy`Ee=' );
define( 'SECURE_AUTH_SALT', '04TQ$Mb[^6}g^dqKA`Pn)${z!@DxSOCY2gIEC^uHqAocRp<V)23Y&x9g8t4R)J@W' );
define( 'LOGGED_IN_SALT',   '`8fX%^d|VM|[0n<2BNmIRZz&dY^49:ZJdL~CKb<_7g7)^K430ZGN^}_>y%xdZxU#' );
define( 'NONCE_SALT',       'PAV|$XWoQ*Mm@Cp)nX#cn?1U=w{IIZY Ei|lTj{*x~T&u<?[i5Z*HH7V~=,6qhWz' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
