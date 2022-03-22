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

define('DB_NAME', "brokenbd");

/** Database username */

define('DB_USER', "root");

/** Database password */

define('DB_PASSWORD', "");

/** Database hostname */

define('DB_HOST', "localhost");

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

define('AUTH_KEY', 'd39f451f5c8e61d2da3dc0f00d03bad008b578c7825dd8d239c9459ab20f0263');
define('SECURE_AUTH_KEY', 'ff49b311079645a0956f24a27c393d435c3f480b3efac5c9f2c394bb8d93438e');
define('LOGGED_IN_KEY', '9b4b1477472559d0ca876ff105aad90351858bfcc5f98a12c4f5d195fb9d0347');
define('NONCE_KEY', '5ff0eb1963472bd775427623c08614a31970783c16be6d5de2daf0d4f30e5686');
define('AUTH_SALT', '70f6bd13ea4cc4c7252ee29a2bd0de3d9a79ab1e6f43603c4d7fcefd51b5d8b5');
define('SECURE_AUTH_SALT', '2f68b3f6addece520c5cf27e2ac4c42d4f0855bddfe7c927c785a66885952a8f');
define('LOGGED_IN_SALT', 'dcfffb281f19093af153c8047d9086c55a72378815a5717632bf28306135a08c');
define('NONCE_SALT', 'fac74f38377113bdc4d7231ddde7fbe739ca88992bb19044385350833b28961d');

/**#@-*/


/**

 * WordPress database table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'KjT_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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

