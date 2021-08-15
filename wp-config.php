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
define( 'DB_NAME', 'feit' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'i`yg|<~&sLL0uH)zo13*Bvs`gcz`2}7eXW$`Ri/1k)?Qb]6g0X8M5%*3$}zu 09(' );
define( 'SECURE_AUTH_KEY',  '2~=~WD:!=nDol2<p|/77%P:f~8X4KAqy[NHaD#*E+Ue7t<tP|FF&h:KgDX2{opAq' );
define( 'LOGGED_IN_KEY',    '[t[J9j|+DG!YM:0)_CB[r/K*v@Gw_w!Jhe2d9?=E_}N0OYAC@/|zv1TY.SPn1 ^d' );
define( 'NONCE_KEY',        'vu% pv[(};.f_fK!gXN~TP/OV^Yy+Amrm]47$=Ndi7~>mV_[Yl!7YSc|#J&tG5vR' );
define( 'AUTH_SALT',        'P7cDw*A%vY~q(b|puXU|opbTpZg?l|^O9_Fv2T<5tu(!?dg1Z*YTf7MBS8B@!q(j' );
define( 'SECURE_AUTH_SALT', 'ma8PEu`UW1,pNb<lPakPk|il`dWbdsY6#;[rtkjqLt%>gnwQ~|+(9lM1XK-ql7O5' );
define( 'LOGGED_IN_SALT',   '46dAj6,LOjRI=_[C|c{aGp@RVzK||j[gskgE]Ar%]eW5N-cU~R[i1^5ikv~`dZ[.' );
define( 'NONCE_SALT',       '0=NEZ^&~wBMR!=DzQ!6}yLxk}hIv@<FF,Zz-1+@/b;RUuBR=:$2N01.f62 VK|9n' );

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
define('FS_METHOD','direct');
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

