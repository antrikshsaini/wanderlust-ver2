<?php

/**

 * The base configuration for WordPress

 *

 * The wp-config.php creation script uses this file during the

 * installation. You don't have to use the web site, you can

 * copy this file to "wp-config.php" and fill in the values.

 *

 * This file contains the following configurations:

 *

 * * MySQL settings

 * * Secret keys

 * * Database table prefix

 * * ABSPATH

 *

 * @link https://codex.wordpress.org/Editing_wp-config.php

 *

 * @package WordPress

 */


// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', "wanderlust_ver" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "root" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'M1|o`[x=={U1ZYgY&;&LZu{|LbwwEn8SCHH0-kCppFIdssz~W%3fh(W6mI%oSW_W' );

define( 'SECURE_AUTH_KEY',  '_VY}{k0iJs%#0VI3]z=ETH`mK]ob/2J1L#k_Rl-?k(=J}aNDnEaCK6 TCsmid^Ma' );

define( 'LOGGED_IN_KEY',    'bJ){;K68K)YpMY`:1:z&[L(cH5X2x{U?Pd4|gSe(F< gaV1f=eyiz+ADPmKJjTcQ' );

define( 'NONCE_KEY',        'UH,)(c2153=jr%/rBtsWqNbb#2J6hU[N=/)vA5h?hD~s;)0HuW ug-(}vRDK9/g5' );

define( 'AUTH_SALT',        '_wGE]YQ.aJ0hafeO_IHzT|t[1+f-B8->z|0+ls%/<J(bSqES0`jjZSY=KNb4*EsO' );

define( 'SECURE_AUTH_SALT', '7gKO#zUh+grJ[RRn)Ul=grT-4pco+@8]O5zXvA1geJY|b4vz)x?jJp|$bW9)n`.=' );

define( 'LOGGED_IN_SALT',   '[EIm#C9WU$uV/!&%/-`}cV]7h8-Z{8Y:c$kc0:?o(^nsXg~dhysQpFp]8lDjJD@R' );

define( 'NONCE_SALT',       'GK</B1YrVk}.Tr^~A:w8PNhQ7)/P!mL[c]$zv+tZ[T$8yb*K<uzWp^{XuK>Vj((3' );


/**#@-*/


/**

 * WordPress Database Table prefix.

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

 * visit the Codex.

 *

 * @link https://codex.wordpress.org/Debugging_in_WordPress

 */

define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once( ABSPATH . 'wp-settings.php' );

