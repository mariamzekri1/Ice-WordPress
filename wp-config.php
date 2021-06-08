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
define( 'DB_NAME', 'mydb' );

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
define( 'AUTH_KEY',         'O=j0%0uhnc3%yc+5Mk,]y1e{h[i9Erwl8urGk7S79Gn_[6hDuUCcUid`P&~TQoYk' );
define( 'SECURE_AUTH_KEY',  'H0Xx)MgUb}jw+SRr:e]Wq;2nl2`<9kY^hM-IE<qM.A0t xZ,Oh!~H-EZmN2_x3}e' );
define( 'LOGGED_IN_KEY',    'L@N`Oz@gcl-*<W<4|D;8UJq8k%@E6G~zpGiKmYc4UArf`.ozHJ[4cPO7+2gZ-n39' );
define( 'NONCE_KEY',        '`.t:&GTdu-!rywe#+ #]$si|9LPd#0RUVCH#%ad0n4Pl*5q/PZ]5p|hM1q;b7*AI' );
define( 'AUTH_SALT',        'c| bc%QnQ~/IN!|vK8C8R#Go0H1IMXqr+aYYBogMT; ue_zDT]zh~P@gV.DyD-~F' );
define( 'SECURE_AUTH_SALT', 'A.JHHMmqng]_CyG|,#OZ-4B)Jb?}ImkQ%:)L9|T)bge)&zj GCLA,YjJaQy /a=r' );
define( 'LOGGED_IN_SALT',   'wq*[Db,rU{eXZU>Q%/y#G:Qz|[Urca+YXY!,W3+Z-C3hS^2A&WS#O>y< &0|AjDy' );
define( 'NONCE_SALT',       '&L#C+HyK6 Y80A9=9Zzw U54%-yPrMxt|7}^[e>u8??Ie<@L5LY7psh8tU^|#dDD' );

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
