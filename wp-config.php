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
define( 'DB_NAME', 'hospitality' );

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
define( 'AUTH_KEY',         'haC`0pMGAGS7}%}2FClb`W Pxexy{Qy/`jn$r|*2x2UM7BIy9H(yk%cU`7:>:vLz' );
define( 'SECURE_AUTH_KEY',  ']@ySivaES9xGWt>,`V6Ot?d#OsZyn`sJ?!S!5 .SE?X1BAyVE<jVX#9ou5byDM}i' );
define( 'LOGGED_IN_KEY',    '<pu$}3=5zZHbYVV&0b1)(qKKM!YZEHu+{dy=lR+oMeAG,4&of%1nt4U%EN> ~<v!' );
define( 'NONCE_KEY',        'QZ~_hj]-5vye!P<7Mr=la=&NWu7X?}aFmuRq[2r(#1eeT)>)<x7&C3#WI)x%VAL]' );
define( 'AUTH_SALT',        '65zT3A.*B<Y[x|j+<0,~+>iHKo*Wf*ig#.y.CN}{,N}5Vb6fYE.=+E`H#^1>6QjC' );
define( 'SECURE_AUTH_SALT', 'f=ap38G?.u_sE:^|cjE8biI0iLw6myi>75=M=3^EUA/:w= yEvmR6rFJjyZGr/ig' );
define( 'LOGGED_IN_SALT',   '^6C|DR8=]ei`P@,aV.NVnyq!aI_qf ,|}28tn^|]@|m/b3chmS/zhwd:!4]|fs3@' );
define( 'NONCE_SALT',       'NAo|(~@Lk_CG;:w/o6 %-k0`pBYOu5!UuD.4gQ7Hl(Xj& [}E,h*K?1=h6H.*gkh' );

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
