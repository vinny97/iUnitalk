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
define( 'DB_NAME', 'webma_dropbox' );

/** MySQL database username */
define( 'DB_USER', 'webma_darpan' );

/** MySQL database password */
define( 'DB_PASSWORD', '@;o?Mg05o)!]' );

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
define( 'AUTH_KEY',         '1e7PYfx;az@wx4hJC#AT.t4+Th=@G_yz{fJj4C&}Z[2yiT ._5ANdaxYoO~Vn]YG' );
define( 'SECURE_AUTH_KEY',  '}{kgZe];uM],ZqbD2<HeWGdFEHLOh;IG0zA5N36[uC7+<_Isbjnm``[b*!*km:cN' );
define( 'LOGGED_IN_KEY',    'd%9{5V0*$yI6#<jNSrMH*AP0xGs0_4@&<WaQr+h{Wil8*gc|{+%sQ7=Q1~!W.B`X' );
define( 'NONCE_KEY',        '[BhZ,Dw-ZI|0ko`]bVMEN5o HWxhOXsfO@,R8X}#e3vM+!g{*l7+PO~w-S5nOV2K' );
define( 'AUTH_SALT',        'Nt_58/2741V+&N1 J>!M6h^N<0!TX|Q+cA<<ex7P(bHrcJZ&R[aWgu$!-K;8]PT]' );
define( 'SECURE_AUTH_SALT', 'TKzLP;+&*06q7teL~4N/IVG#=tajxTRPM4OX&UxH;X{WEU,O5yrq&$;,@Z*1kX9t' );
define( 'LOGGED_IN_SALT',   '?yZ%F]&4`w5 CKuaLVeREf](Kj *[W7Fg!S/D+7dI2IS]xr6[A&ljj@h2c=*j#^y' );
define( 'NONCE_SALT',       '@?z&$8]5)c/_po9pfcg;4j/hU6w1ikjTPCc{}h>.] `i6PKmVGmQ-,(J*BtTC1( ' );

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
