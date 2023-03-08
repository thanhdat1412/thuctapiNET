<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
if ( file_exists(ABSPATH . "wp-content/advanced-headers.php") ) { 
	require_once ABSPATH . "wp-content/advanced-headers.php";
}

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
define( 'DB_NAME', 'nvwurkwjhosting_thanhdat221101' );

/** Database username */
define( 'DB_USER', 'nvwurkwjhosting_thanhdat221101' );

/** Database password */
define( 'DB_PASSWORD', 'M0.0Qg!I$cLR' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'I6UA{%6>vwwvhUB{Oax+s1;Q)B_WMmBh+3K!iF5{@Tqs*`t/eeY$[8Xix@CgB<mf' );
define( 'SECURE_AUTH_KEY',  '}Qr.<H>szlvZyhff?u]y|JyWx/o$z(5qR9Qf%<h13:./#- [87alo+o^&.DlCb4%' );
define( 'LOGGED_IN_KEY',    '5Cwg:dZDx:(X:w_+ka(g*?05fb/QiX]uaTVZ|-0TRSY#QWqRIrMlPO[A9F)b.geb' );
define( 'NONCE_KEY',        'P8sh~I^@?LLF*=nwdUJ/2o8V^y$<8^SN<5ES#1YK!|EL26Doo3q*N>B#jbI9?H33' );
define( 'AUTH_SALT',        '@wu|6QC;(zhq|mhj2qD80{taM&dS$i`wk]R^gMF?b#[h;t?)2&T+1@U.5($r^0^e' );
define( 'SECURE_AUTH_SALT', '+.ap^i&|$j{JB*SY_K(3gCm~g&hP.$?_=B F{%^8l&gIhlxU^[:uF}z1bq||}5k$' );
define( 'LOGGED_IN_SALT',   'u [j@gU3H_:Z)lv`P?U6@]Xm)TP>ard~uw4xX?TK7?hqL)%[v$?.IIfiu*u{.H`p' );
define( 'NONCE_SALT',       'EesWnH@.2<%{5!eW%A{@%%u#9V:tQkTL9HYmYsPxuZyyo_(du-(^cHcJFm(9Ui?O' );

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
