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
define( 'DB_NAME', 'team_2' );

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
define( 'AUTH_KEY',         'La7SfHGh}T?~!D{{/!~(T`N`hQ@9AXEXB=T1X~0FGQsckgd&r:`]M=!EIR]pT+,i' );
define( 'SECURE_AUTH_KEY',  '$Sedgx,f2)YI@cTuZ^&*!>OnWuazIt<%*s{Z~Z,CU8 Q7|O+WZs,rB5qz$Nx1$R9' );
define( 'LOGGED_IN_KEY',    'bghDdY?K;UmmM]yb2I_)OCB^NpxN$2U#2RQ%Y%x;q+oH)8la|x,[^HBTrp}SVYeW' );
define( 'NONCE_KEY',        '8^)};|:nsB{n$~+_44R&@G2nG>?<!33T)2Ie.26IE5=1dG%]GXH~?-61OqT7kv,>' );
define( 'AUTH_SALT',        '2@*<wa]L_AL|7|Clr7>]er[E*-n<;+KDO`P ^NLWbegW/(tvt0^3R=l_52n)}RDk' );
define( 'SECURE_AUTH_SALT', '|Xo5,)l|&{](%BEK7Em],$#h!@PoklyK^@6,4ss8;mprwRW77sz=f$O8q?qtc@5<' );
define( 'LOGGED_IN_SALT',   'hWOWMD2r)Q~pZ%}:/@<,Kw/7ceEYG#mAQ 22i?$@La?;|Ix2M(TOD/KU&g>!|(XQ' );
define( 'NONCE_SALT',       'D$HTS[O^UV69S)P>:r?l7uyLL.)?V;4kZ[EP1IJ$Qn:X]b`Fm@B69B}9-=6T=lAI' );

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
