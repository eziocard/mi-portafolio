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
define( 'DB_NAME', 'wp_mi_portafolio' );

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
define( 'AUTH_KEY',         'OyF_8]gX[*2E_H|p_SZ+>}aWRV0fWX%m.3qX[JU<;]rPC(5Q?^^XN*@K4lngm<5E' );
define( 'SECURE_AUTH_KEY',  ' rHnvHB}`rp(T0l:Khm+0V:i0$%l|}k$Ks`m%_K4yyBGof%#!FGZzj.W68^3q.KG' );
define( 'LOGGED_IN_KEY',    'K1SO?$o8TQzHe->t*W7KraKTG,IpZg]JW4LKjF5=e+hfb1ka+XM)O /NXNX9CY@6' );
define( 'NONCE_KEY',        'M>n{.VV/c(a_9:GFGZ(Y@G01P0r|H,6?OFQeyh%2lpi0aEi{^0N5m)S[)+G%FsU.' );
define( 'AUTH_SALT',        'lx1M%Z$=vDl<S~/Q.7j~a,S4=P!fG*-*Ku/,0`cEi#J$(?C0,Ao_PCh$)Kk S<Ao' );
define( 'SECURE_AUTH_SALT', 'AuC>],uCHH >Fw=~i?>G9`2dl/L{z4OG}Wh;XNN~_R)F3}zh/hChl{}Uep[OF6%D' );
define( 'LOGGED_IN_SALT',   '}*s(ZwrUe?8/GB>I{jZ? |T_k(@j7G[jW/NG)vXrV-eA9|F&345)e2:yY5`:4D)c' );
define( 'NONCE_SALT',       'K5W/z<BRQnh!#F9fwfPBZ44s3BJCp%, {):zSGJi#&Cm+ks2bV=qHmEtQ2%[WT3x' );

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
