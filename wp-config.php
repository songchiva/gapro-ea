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
define( 'DB_NAME', 'social_edu' );

/** Database username */
define( 'DB_USER', 'soical_edu_user' );

/** Database password */
define( 'DB_PASSWORD', 'S4T9DuuacsPM-7yNn0Q9Tu2HMJ0JVj' );

/** Database hostname */
define( 'DB_HOST', 'ap-southeast-1.348bfd6f-e479-4952-943f-b33032decb71.aws.ybdb.io:5433' );

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
define('AUTH_KEY',         'rY(AI4:3=>nQ%ZdCIw],noOt$`!@|!JZ8C96&JhkZ+V<$jEwTA<`/+8W=fwT*oZv');
define('SECURE_AUTH_KEY',  ')^.+LfO(PG@r(pL}xQRuSM?nh@**?:!T774T#3+b| 8/Q><-ymUG x+R)#lN=9)X');
define('LOGGED_IN_KEY',    'QKrrA6PS/^mm$*p}E$Z4t6=*k2MJ0Ub1e4{u^25pi&!?H0csa1`5|g7-#NjcnQuK');
define('NONCE_KEY',        '+*ym:Ddj+lfdcB7}P7`v6XM`sf#ea0tC%z6|=1.uqZr0}Qev3lxw|rf{BY1;D$<@');
define('AUTH_SALT',        '(Nz)zg)|<{g+o_n}kH&z`m$4uI;W|-<7p}TN*7T@_($%+&R<|Pb2k]+)iq%*#W-j');
define('SECURE_AUTH_SALT', 'E##+|$3ZxwCu9dOB@mJ)-xgpASrQ#%]$R(wRR)c^K+*+Ai@J-+tpLYFCy<_ayrz|');
define('LOGGED_IN_SALT',   '?E]#4rYItA^P,GL-RSQ`|->- @DKMFFkopN[Y3fq&4kRLe/8j*V8YQ3|[WIN`8A/');
define('NONCE_SALT',       'ecmO&2>?A:Zgm4F(wCtrt=nbT.NDI(k8ycp5MCdwj;ibXA{U*_8{rNs3c&V3z$e/');

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