<?php

//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', '3cHLdiGxhD1Me8a5dEQ9F46KbxJezyuH9KOjMOQYwSJ1ajVMON2KjktvdRZksSH8');
//END Really Simple Security key

/**

 * The base configuration for WordPress

 *

 * The wp-config.php creation script uses this file during the installation.

 * You don't have to use the website, you can copy this file to "wp-config.php"

 * and fill in the values.

 *

 * This file contains the following configurations:

 *

 * * Database settings

 * * Secret keys

 * * Database table prefix

 * * ABSPATH

 *

 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/

 *

 * @package WordPress

 */



// ** Database settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', 'gtechinnovations' );



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

define( 'AUTH_KEY',         ';#EoO%KBIpW.:dyh_/IsFnA(Qaheanp|5QUCmD`2}D2Z VH&$b[DF-=J}^&&m>PR' );

define( 'SECURE_AUTH_KEY',  'PH>#;X{n8UeYzA2l* #%zTf2*>r,+dq0Mi*u2jJN*A|zYsH^0| JzFmG1OcW7GgO' );

define( 'LOGGED_IN_KEY',    'tG~TS8kD$Grg%t]P3=B%L7x^{iXF-GoFsm^A<:q_)zbh-zUvTNS#baBGIw5!GW4t' );

define( 'NONCE_KEY',        'GARvu%=,`F,~OpeY3/MeN#`Kg+;~23]V5.YCMFyY.qZ&v15.{^3 d<uV,olr!m_-' );

define( 'AUTH_SALT',        '[6FbDuiB]-[fWH;.`VAVpc75UI:HSe9pvm@Vy SF*X:.[?&kp&)TQ~#5k[Ec3bvL' );

define( 'SECURE_AUTH_SALT', '~Mg(?j)iwyfIDkPj2C/ge@Re:4fM[](+4n%A[Rk|C)D2,|8N@(sm9Vw2oWJIgd#`' );

define( 'LOGGED_IN_SALT',   'LH!DoudEAZj,<gE0v`{B#oZ;1LLSFzQL*G7&9K9p`CLdE/hV7q8ZeovYifgh|lMk' );

define( 'NONCE_SALT',       '*_:{e[u_T88D/v:nMb+qK?,yB_R)OG+!Pi%RYUl26 1lV|%:@hb5~Iye`Ki3*TNh' );



/**#@-*/



/**

 * WordPress database table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 *

 * At the installation time, database tables are created with the specified prefix.

 * Changing this value after WordPress is installed will make your site think

 * it has not been installed.

 *

 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix

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

 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/

 */

define( 'WP_DEBUG', false );



/* Add any custom values between this line and the "stop editing" line. */


//Begin Really Simple Security Server variable fix
// $_SERVER["HTTPS"] = "on";
//END Really Simple Security



/* That's all, stop editing! Happy publishing. */



/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}



/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

