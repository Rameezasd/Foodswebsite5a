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
define( 'DB_NAME', 'TESTS' );

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
define( 'AUTH_KEY',         '}aS-1OcLyJ*4;`i@JxO!xvIWCs2fo~V-gVS/=R|]P)A7ajIxnB4p,Yup(;[@D%}&' );
define( 'SECURE_AUTH_KEY',  '3!|/D;59kG@}c(v|5c;`X_  bub1gviW=t[18$DJ3Sfr$^c7+9NLrV-?iohk(n$B' );
define( 'LOGGED_IN_KEY',    'ne@ pS} 6Keqj7-U/CqQx;.l!D YRU)l1Ydi9`u_v5&47[@d5I;,P]#Yu1XrNZ9{' );
define( 'NONCE_KEY',        'wuQFiJNYOBZo0if]b_{lp2WxIl76ye]:fW4WFHg[>T*lf5~J&&O&s+`|s:VPm`$m' );
define( 'AUTH_SALT',        '{n0ao8Lp+/klqB9K^-e,M+[obWfg[>jsSXgb;m^?j+A3VmVX1?Mih/`a-D2t@V6I' );
define( 'SECURE_AUTH_SALT', 'o@+)>yLtt1Ft58CZbDlS9s+O4ut?+}y~f%Fin!ul#Su<nBD4|,i-6=)j-Ea$KFq$' );
define( 'LOGGED_IN_SALT',   'N.f[C5mo~0qe9X=G~A* P*RB>d%iozGpDSeLJ$7 iFz`id V|vmV5k%j&^Hhlf.)' );
define( 'NONCE_SALT',       'gZg+@ ].Xo;*]/[+F;v17QC[Ca@M?s5FYa9PkvIMu=0itW{aw}NSyRZ3!7nO=r(D' );

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
