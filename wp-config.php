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
define( 'DB_NAME', 'officestationerybd.github.io_db' );

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
define( 'AUTH_KEY',         'Fm2I_pCXDEfiJg?[a]m$>usng!X>![)WfJ RAZ2Wd.(B3>&]Km}]EAI3Oj~xxQD:' );
define( 'SECURE_AUTH_KEY',  ';bz5@?*F#(Z2`w#_Jf!m4,9I qg9yc1gn,0@Vp1@;j4or~n2 3Q7Rv:~E~Ofl9P_' );
define( 'LOGGED_IN_KEY',    'NBpBr)DhS$]^$=SMgfu<s;E|%LM~M$%,sPwH]F%&xI[?~>AP7RH=>s=p4Ca[h!-;' );
define( 'NONCE_KEY',        'J=GsOrm%=0!h6jC5@:rz?-R}`{{i0Sxk~(f,dBNX//X#6lxvB@@6/ST5U`q%&5T5' );
define( 'AUTH_SALT',        'n9Q|#w&#p$d;t Cgb_f|+>&pG(e{T5dGCX$=pL1p<!!5}vp=|H.cY=ep#nIL*TD%' );
define( 'SECURE_AUTH_SALT', ' Bz  )YcC-`Dzxp48-K9ezGz*Ei>1%m=<Q^E!0^50K*QiAp3|c +zA Uq&XrDF+T' );
define( 'LOGGED_IN_SALT',   ':^`G(Tl.~}?%8C1y~j-;).u)-r?XVfz7~0}rK{P;-KKiGY{avFF QtZaf,jSa/x$' );
define( 'NONCE_SALT',       '*K7$Oim*[U>HsbJ*q 1z~P+pQj2,~NPZs{xV;`^OEX^F@-gdByRrE[c|%lNH($_$' );

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
