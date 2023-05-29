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
define( 'DB_NAME', 'shuvro' );

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
define( 'AUTH_KEY',         'f5K=Ei;Sz%bZs~{|i)5p3u2~HasjP5p mZuc*)1zU~2unwOBSyq^7gL&L]HbK#6-' );
define( 'SECURE_AUTH_KEY',  's V^v059jbfg9UWFT#Y9Zlb)HrI8YWZt#5V]h$YuJG52ABp<@$FWT|+{8qS8hdSa' );
define( 'LOGGED_IN_KEY',    'EDK}q*yy5HnD3h4T/;<i%7$G0]Zii9{{U+Yz/f5H3OcTJHXuK8yFmOOwO0{!$ iW' );
define( 'NONCE_KEY',        '=S$O`1`<z{G+p^h Uv.11^VKfbMilKV3M7buP&j 3#%D9pS<};yI5lK{[~/#2>Q`' );
define( 'AUTH_SALT',        '$#/wbvVe4TVry&#=cRN::Xuo_R0x{_tcK~)3I/o&oZe!VF>4YRlyE$$y$N#X@>`T' );
define( 'SECURE_AUTH_SALT', 'bhs^F04@% >@^gY(v1>) $6whQ15>Mz:E(Zd~{@*W7D&GDMR?IP<}+AHxf1S*HP!' );
define( 'LOGGED_IN_SALT',   ')EOvR%(~S`ZnlgO5 %E1<9U-mMo@1_r|{{>(3^H9+Fehnd%QfPEdQlFak!ah4wiC' );
define( 'NONCE_SALT',       '<cTdu7[a1yr$LbPQY},c#f28TK>8{5>6T|X_%Rm;?BdiW#12D]]Aayqm@J*KxQVW' );

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
define('WP_ALLOW_REPAIR', true);