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
define( 'DB_NAME', 'gangtey-lodge' );

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
define( 'AUTH_KEY',         '=!H)3CXlvNnwh6F`x_uVY4 3[{(5:Q+9c0/En-:osqYS#4mS{+gY-M&vv8=LU~=&' );
define( 'SECURE_AUTH_KEY',  '|WR?L9Ix 0:oaDn)o?_^?*y2&0{&$|x_HBjVDu8uA:Zt)v^B,[bSLKLpZIwfbFS&' );
define( 'LOGGED_IN_KEY',    'u0~e(/nXTXa?F76,b,5GZ+t+b$0=ZxYKqeNf~7>gCIAaY@cYCh1alqZFuh&o8tUP' );
define( 'NONCE_KEY',        'guKNz,0eOE/r7c$C1< =^ls_]J*<He?-t #$T-*j1d46KEyY)Uw_`UL4ETb$Y_F8' );
define( 'AUTH_SALT',        '*1:VOwz%q1U;CV x7.l/+W,FAjw-D0;hJ+r~!LmgUM<<&D/]|*pH}3WoR5~m7pDW' );
define( 'SECURE_AUTH_SALT', 'vrCsd^!#=Glul;DSY<0PkFB`)bgb}7S2C[F?GEAKz/&djioqIYB|e]%?a|/O~T2i' );
define( 'LOGGED_IN_SALT',   '-Jg4[5JB]O7d=.nA=VHk6}Ws<OcQNix~N1vMe~=`%dV<;bCon`]fRoB4KNOR39E}' );
define( 'NONCE_SALT',       'Ur3#@KwAPZ$v6o|BcZx5,V(Uv`Y#9LXu?$IQXj4@USe D:XsTeqiVOsOK$40R#jK' );

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
