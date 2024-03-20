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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'zW%->Spb(;M4qvG>MUz2YKtibn/qrV;bjVga*Vqkj%/)_lur}_IL)?J!DrCCiTqc' );
define( 'SECURE_AUTH_KEY',   '+::9L<-Q@J~8oarcP(4E!vVtq3.V)j7h-V5D>GIAvh_~v!|w!.x9W7t<#|KEe%ud' );
define( 'LOGGED_IN_KEY',     'I=L;l![(5PxaZCFE,a]Ep!]|x=@zVZ{<Sw)n*pjmqU kWl8/Z%t{LFT%QDuGs~[L' );
define( 'NONCE_KEY',         ';v$}s(m[(fE@PLxHrUB(7Ff20mZAF$O ]La}Gg.I&mj&iB;DNCuo=JU [yK$[AmI' );
define( 'AUTH_SALT',         'y<bNut:Nw/znRoh1#n8]b]Krpa;)V^%=kv%S#Nh?@a%cE -qW-tTlc!&A=FRb+K3' );
define( 'SECURE_AUTH_SALT',  ']W1>G6law+[]X)IrG1hH8l$.Ct=@>:FWV)*PB6tCaV<Wp2Lb!$g%pCfN/.etAx}-' );
define( 'LOGGED_IN_SALT',    ')u7Bl3hgY6R=p:zZsH9|,gaD:>wR#DlvxGI%v?K`B8r y5kZwFqG,uuOGH|PB<B-' );
define( 'NONCE_SALT',        'LUuCc?[M6v$K,jf,Q)He-a#r`p3K@.=4V!FrvZD}_s8vg#ylb-hN>3S},~P<p:@P' );
define( 'WP_CACHE_KEY_SALT', 'XcVFji^x3X}6}lZnA@cJTf_GebY:UW[_ nX~=iY(0!sO<;5+t:up91c!:$&kLYKD' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
