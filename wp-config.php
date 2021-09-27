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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '2yb5n{yn&,cS^DB/,Gg>};fm#5vmJ9xjh~l|!QwmIV3nA,v<.vnjDfcgLb:xZ,{&' );
define( 'SECURE_AUTH_KEY',  '];gJ}H*Q<8s^??.vfZbbb(6YHArmoZS:2n^.o5bJa(10gb^%qrtwr|4(4rBRQ>pc' );
define( 'LOGGED_IN_KEY',    'Z=GLf_Ty&ru6%mr>a1x8 KRGZg=RWsRCD{:C<uo*n1}`lv4Y#sJf*k16aE0A}WRu' );
define( 'NONCE_KEY',        '38PUoF^e~0&N<eg?UV>KksK!bNf5r=ruWo+>ZrNz#g)<8eJb_u^JY8^l^AI6f`0/' );
define( 'AUTH_SALT',        '~sZK^WqNDj}F QdBSrg^1T@zhoY_WXos0)qpiUp&fw.km@z,,a=+c|](O=K~,,t,' );
define( 'SECURE_AUTH_SALT', '6A_t^%DQ&w==jdyFkl1{rDb!OpxV@7 I8N]!F7/yk&<hq.6UT,n-}N9:]f)b%Pq9' );
define( 'LOGGED_IN_SALT',   '01K^G]cg0S[Kyw&o!ZU<~N`}c+Ai}CMOS*{:Z1!s%8i v`Exr23mNCEA}4F{c(X2' );
define( 'NONCE_SALT',       'ja,&H3J)r&sWik&>[}^P+oW/3YkNCc)k!.CsX{KO%ivp>JH=4<52kvh-;N|LD]L&' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
