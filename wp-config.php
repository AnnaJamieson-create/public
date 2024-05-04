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
define( 'AUTH_KEY',          'g.iDC2c*:7F^8Dg`p&Ui@v!W%vjwPZm]U:.-rws$&Hz$pC 4KGyBk9#}Cy1Zh;6f' );
define( 'SECURE_AUTH_KEY',   'BULG}9idzaA5U&:*KBKXB}{XD[?a&^S^Ib+M>pq2Jf4:NlDDP9g[eG1v-k1S?S i' );
define( 'LOGGED_IN_KEY',     '_o^/y+eO<#vpQzO^1(5_/fJ]UBv1huIW~(I9HyG^:?N;[|{_%>IDK`VS_]E}.P9k' );
define( 'NONCE_KEY',         'j$.uq8??qDY`vL~m_3QZ*c~_?(zQ`@>!}?y/t%VupcQ0C6DY07W_8xE3#ERgO<cJ' );
define( 'AUTH_SALT',         'p12xSh;9t,JtJw||[3WKX1B,>}{3#wdDo[EAu1#bkj{eC?X3?<V}y4_oAGh)[K.L' );
define( 'SECURE_AUTH_SALT',  'PFN`=F.Ln+9t]e}ZIR hs0Uoy7$Y<wc|pkZoA)6w1x?7M:8}6f=K%;mM@;v3/Ry+' );
define( 'LOGGED_IN_SALT',    '+^y*r9&6Z,#?/|lb%?:ff?TPoUho6!+j4KoqfmG-o)YWZ(@Wf6K:,Ti-f?Lz0 !N' );
define( 'NONCE_SALT',        'g7jX6E]cE)vLi#V$Kd=rT~PrZ!:E z21?}ZE_rFJd8<*:R83t,_QD/n)U{VL n`R' );
define( 'WP_CACHE_KEY_SALT', 'xV9$@bR_s4|e<~?!mK|1J:PoD+<nqM@$<`jp[Ff#A*~gBh.?P6;uqkwiewEaN+4;' );


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
