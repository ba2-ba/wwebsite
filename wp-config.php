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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wwebsite' );

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
define( 'AUTH_KEY',         '42VcvW{sG~eYaj7$TAfe]XK<>Kr #hlb;AV:SB_bZ.Ap=r:O%G$STv>8aeAbavv8' );
define( 'SECURE_AUTH_KEY',  '/}f:b:h&FyaIasKMP.yy@>.H]^U{oM@E8gX*0%zqKOW* @6Bjgk>%l0g0E!f;[Rr' );
define( 'LOGGED_IN_KEY',    'd`Aq)fm]P=}9p?BOD9tpO[r7*&G##5=5~ceptVX_}*@tsa4KkOx(.ftusgQ2{~om' );
define( 'NONCE_KEY',        'Uba+vE=zt_J:>OuX Q48FL|MCsPyBIc%ft$9=lCbOEcMOo1.NA5SJZZ$FIY@ry`?' );
define( 'AUTH_SALT',        'Wc3k6sd/4Pby?RC=NsLSv)QThT+y:[T~BD^>.zJ#cAh!b Y~ypH4*@53U[e;Q?f}' );
define( 'SECURE_AUTH_SALT', 'ru}?.}cI&B.l2WYeAKH4(gg,OK. q45a$>SW/jgTs2/e;f_/grF>{QoP)I`cD+m@' );
define( 'LOGGED_IN_SALT',   '[sA>VV6O_(=o Jg3FhSyQm5szE1oRlo,~PkjNBvb+9>`^dwx|mTq@;o0ncO?+ xW' );
define( 'NONCE_SALT',       '^11lZLx4S9AI[ jXHzZE>p[XfYy;n7lJXAXiJ-X#}Xo@!|mL+_V<FI)XKy:[b8kB' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
