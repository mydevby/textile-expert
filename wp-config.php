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
define( 'DB_NAME', 'ss' );

/** Database username */
define( 'DB_USER', 'ss' );

/** Database password */
define( 'DB_PASSWORD', 'pQ5hP9kD5f' );

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
define( 'AUTH_KEY',         '>g!/cU[-ot?A^!l8WrE/H4)xRG=i`Jf,fbsDPrsD$ofB#X72;%vyy6L$v]~Se&eV' );
define( 'SECURE_AUTH_KEY',  '6dPuH)01bK5Iz_H/`e5Uncu!zc27]0*%T[qHf_;t:S9P%zN?O8SxAVJRJQ,TphSj' );
define( 'LOGGED_IN_KEY',    '|iLV)2[MZx6}meYluI0aCXbB^^vd,19/x?9B{<o{O*EVyGaU SB7AstsN$Y@>)(4' );
define( 'NONCE_KEY',        '3sq1vx`K:x_fS?+^68b}KJC>y[AvtOAV2{5H76:|^XeH]/-v4TarR{Y<C{Onww{t' );
define( 'AUTH_SALT',        '[3g.l&o2j:LF&ovLTB#EK8Do^@fF?%wgmWU)`9v[Q!BGO8#b1O$xX 2*V2M1$jI7' );
define( 'SECURE_AUTH_SALT', ':e01]`jm4XK1}3DLc}d>{`Z5|Bj xP[jTr<MEv2+y@Y/t*3`@vDK$A!5Km)]`3 F' );
define( 'LOGGED_IN_SALT',   'Xm4{d J:4n0TKu*!re&;@l:GTw]N+zp$M>veC6%^dDBG{.2VF8EM^b4%LqjydfxO' );
define( 'NONCE_SALT',       'JXJJbFUJUv 1%AIOxzX)H*n#HXdkY<jw!Q4aogy3t6i,]f{l%y 7<[#WiVlX)]UZ' );

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
