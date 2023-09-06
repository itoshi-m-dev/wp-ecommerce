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
define( 'DB_NAME', 'teste1' );

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
define( 'AUTH_KEY',         's_N1-~D[29~KnD{n;Wc[0odpl>zP;([&RUQ?my52MburF[}kgpC|e[F#y?G0Kf!m' );
define( 'SECURE_AUTH_KEY',  ',D%aW%Se^E]Q8~RlmBsFCKc}$5Twuhp#d/A+JV_vC5[uMPMLo8)G(eRTC@nVt2`p' );
define( 'LOGGED_IN_KEY',    'auWFvHpRWn765yZf2j*Z;9HtgH[L AEO&Rwob$H@k(=po7cz;m5Kod^;Ua58(y@W' );
define( 'NONCE_KEY',        ')+m&c<qi=9~L$F2{<Y`XWs,~[ ,v~O8W|{bUHTTJGyac%s?GLt_oO9$=0b{t5:tY' );
define( 'AUTH_SALT',        'G{UfnW0c*XSqmXfu=5;uQP(-E_`8Fr#{v7Bh`j]|N>J83/X7;Cv]0M<nIq{I;kuS' );
define( 'SECURE_AUTH_SALT', 'p|XsL!Q8Dw}fKZM5]$X8ljv9 r_X@VCd`x+C?hoH^p*EsnSq,W~,HN48]?xL2KBt' );
define( 'LOGGED_IN_SALT',   'r.MOz9O[mj=,+]MczB_nD8cUE+ltG-@Hne5lEY1F.o/E*3dvlG!I#^D1QdV:dELq' );
define( 'NONCE_SALT',       ';BXXMngT>)872J<)LA|RSfz4p{Z`B9kAmgIoQ,A7EX~$cy>utw+;#^i<fh$XW@5v' );

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
