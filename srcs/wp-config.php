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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'dbuser');

/** MySQL database password */
define( 'DB_PASSWORD', 'pass' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

define('AUTH_KEY',         'qin0OtCg?!XD]:`?oG?ZwXW?SNvYL8)i%L>4xkf(CU%SmY&g}e=Of<V.9-[q-z^I');
define('SECURE_AUTH_KEY',  'z3GNO:(/zctvX2`NxLL_L`DU@uw|Y,yjf4-}WZOr0X0ZBzG=jb@d8g`y*}-gOdDT');
define('LOGGED_IN_KEY',    'B>{3Bk[|Y[1F||T3OF)=L2n^xQpUMD<agF%&KER-#kV&+E_G3ZhE}T4E(=ZUu(5s');
define('NONCE_KEY',        'M[Pg~ t@yU4#+|&6m6HI_qy|k(:BZPzk!}HeU8a2=Y9+Il+V%cU=i^570|YOP(+A');
define('AUTH_SALT',        'qGZq]{6cG}a8Zf}iM=Urp#1`zIO7SLU=!i1NuraK4[A,|hamu[N.1mkKc0E>Tan]');
define('SECURE_AUTH_SALT', '{/m3pu}buV.s;o+WBMyGSo|3.x]a:Nq-yaX,j|.+y3vqTmpuA6&{)@ga|[H(2+yq');
define('LOGGED_IN_SALT',   'Qh; rW^7yGL/Hxt>{W~xNkM$[JVa|_&6X(RS@~zqfR%%/#>39|S3C?S_kfOhSBw>');
define('NONCE_SALT',       'L4_+TX~V-e`uznXsH!8JTFW5YlD=q$9U-OO7S[^Rg_+q,|mts$O{n{ qHw-/}Ceg');

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
