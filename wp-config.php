<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'game_verse_db' );

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
define( 'AUTH_KEY',         '}f02<3^Kb}1 $v}Fmv?.V:_OT?tRK8-qg5IN *F;HHdzdn1v`F6W08:Az=VEEPvH' );
define( 'SECURE_AUTH_KEY',  'ANKp{<jf`4-{^9XVT|K%Nh,ziA|;&oComLK#3pk9BrAzc.:Hd-(&WJH!cw_oJ[M)' );
define( 'LOGGED_IN_KEY',    '.oOJ1vwB ls|)4tL P~*D3$X-LYB[y0>nt_m8E|,-D8JD4zK$_]RB_<e08Eva#{O' );
define( 'NONCE_KEY',        'P<E:l@C ^5 hu8Kt=ga{0faE2+uX=O((oN.Oaf!!#fR<:[;qmv3c*n~<3y2djqz(' );
define( 'AUTH_SALT',        'eT)yT`k0Cxg}j=pOZmjkH5yCHO6Pl9xtkbC#0@)7iPk&lcz?~[M2.s:*V3Jz6.GR' );
define( 'SECURE_AUTH_SALT', '/3)NR-G^k;Fd8t[E`hN]=P./`MIVrqV0R:Q<0}mUI9huMA:CD]?:7|6)ka)-+[gz' );
define( 'LOGGED_IN_SALT',   'nv<hHCZg(|>6_~)u>$K3X|tT_g`(VDva~-bf^RR~dMjCW*%r.t8dl+Zu1P,n)y:X' );
define( 'NONCE_SALT',       'a1%HLv%ULVh5~t1GGEnEKI~b]8J.mT$:R8_TtY7^qCu4UH{xB!=@A#!P_0FmZ~1n' );

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
