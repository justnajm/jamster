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
define( 'DB_NAME', 'instajam' );
// #A 8 C d 3 f
/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', '172.23.0.2' );

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
define( 'AUTH_KEY',         ',)6N21eA+g*#DaQC-3(*~`#L@Tqa>5sPBp2>/%cE<!V$BaD3;4lmViy.Jg4szk-6' );
define( 'SECURE_AUTH_KEY',  'DbZ(tCyQ||g7xT>UR.T~aw;~p7gTf qzjq1*r}j]e*5U/b</4[I*(`1z~$@=D3dD' );
define( 'LOGGED_IN_KEY',    'n$ywfXg4FRW.J,oYXNPGYl8*d:Ze5p,[e)|^RL,d?%:f0At)-#%;@v,H=HB,QlVC' );
define( 'NONCE_KEY',        '.gWj=_/*qMrU =a}E[}Q,H]9>Z}=D{vL[ayMWNc3/K3O4CB&$n)hHW*T4Sd9[mJV' );
define( 'AUTH_SALT',        'qDMLBr_s8Q*;?t-SNiqvrARE2,S2&Ek6<..fJ]L_hA(0NO+0$Vt$hY[W%vIJ!4 U' );
define( 'SECURE_AUTH_SALT', '[|?pd.;Tx&S~B,Q0?gTTsXX@b/1(hcW!<Hr5j7&zfXAt_InBE^5_P6^_9l.TY(Vg' );
define( 'LOGGED_IN_SALT',   '%5#+AjWN+FV<X6;@OnP%.1OgpR(a4T=5~1<IT}T;`?>j{10#xi#KuP^PG4(}(DAO' );
define( 'NONCE_SALT',       'etVdvMP6ll#%yl,Kb^,}C[eg#+/UETd&Vj<XK_WPTc=1=P|xBv@,i.G)K*Xb{((J' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'instajam_';

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
