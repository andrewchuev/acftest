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
define( 'DB_NAME', 'acftest' );

/** Database username */
define( 'DB_USER', 'homestead' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         ' r2 e<oq4(/MfMe.sPuxY+C5=`XPyOgws XZ/I:m GsJ/og^gu;ycO/V(_iJqxX_' );
define( 'SECURE_AUTH_KEY',  '</]b}>Ot;t#8lCC.&DIaBUU82 ;)3-/DT0{e(+LK}NL%P(45X7XU(hFhBeFvsMb<' );
define( 'LOGGED_IN_KEY',    'F-1|mXCp[eV<2.JfIj*Yd]R7>!FJ%7YBKS03r0iOU2p3jgw9ZeceLLq//%Si`v9P' );
define( 'NONCE_KEY',        'u_W%[!6(ft1`83WVhZ259H,qEKl}P%Nn3^P`ADSl/6A`YJ7a`anaFRvYI5Iu7|$x' );
define( 'AUTH_SALT',        'fdtp-+|+zaKo1a q!P%_q.o4cdqx4/s3nW1=?~@gG*NP|BNEw -?2Id7V$Am_7%u' );
define( 'SECURE_AUTH_SALT', '>.a`qQfvP6pkEmC@-3v[ =k|4K^i2CKGj3B^z99x$8fR-tjuy`73k^fN737+OyD]' );
define( 'LOGGED_IN_SALT',   'sZrU(Kr2$ZKHuAq V9Rh+f?QjhbJ e0Th>||l@D&*Dv1&lz%fX:*N55%Jhd86iMF' );
define( 'NONCE_SALT',       'LT{9Il[hMOB`$:0!z p#{c-=UHqQ>^4)O#yj$fHhUUD:.AU_-<CSg=Te6JZ?;c5i' );

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
define('WP_POST_REVISIONS', false );

define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
