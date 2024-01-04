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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '~gNo|6t>c$G2poZRDHz2,zh<< LxeY{3n{>}[N2R2boUd)!lr5IlP;;6sHpYSRmZ' );
define( 'SECURE_AUTH_KEY',  '&21)N(V/innxK^t}O ZnS7Nt.{i@zGy^z.t.u0:kOxC#;Kc766!9e{(-z:he_(pN' );
define( 'LOGGED_IN_KEY',    'W9@Qh~ygbGVE|rgM#U~~+w!?EE_]iGg6Yi~w[u4>Ay0$JEP}_,U@q[CJ@Mqh-&)M' );
define( 'NONCE_KEY',        '*~/@Oxce@,?B-Fo&05g@7Bf[T;0c_^(%olsc`teLrwx-iApl0cu*94#EZ5fqgv:R' );
define( 'AUTH_SALT',        'J(lv$pE$Zo0MXNC)4V|mF-k9p{q1s$G;f[A_r3lT]`(i]/FXU>*igKPb=G/!8`B0' );
define( 'SECURE_AUTH_SALT', 'Avqb81z(xK:7-B!}Io@|SvEDfQhwPBuOK(ys$WLh4}IB@O@ZCV{=`t-xh^EeI^;G' );
define( 'LOGGED_IN_SALT',   'SqEk=]T}9+gua7i-}n}pVw-#qGYT<H+d<1.(go@9cd!%zChqHo9oT>R^/0fN@4C1' );
define( 'NONCE_SALT',       'nij +A$mMnFVEftYJR<$FDXr}]R+;vjjtQQ(S=e1jv}mFlZq)zoH[3rPnB3 _bh5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_34';

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
