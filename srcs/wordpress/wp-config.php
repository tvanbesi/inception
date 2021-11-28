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
define( 'DB_NAME', 'wordpress_database' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pswd' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'C9a&1NBUO^`ewQ6N,5gCIjphf!1@<Z74vcWo_tcDEY.Snvv0PpusT`SR$-TO:EW8' );
define( 'SECURE_AUTH_KEY',  '<yE,1.1 `L[:<E-]0 j9.&h[v6Sse)Vy/{Lzq~2{2KOz:*L>}YiLaEut44wNSG(P' );
define( 'LOGGED_IN_KEY',    '<`}!`}m&N9W*> v{2k/)x2pqxH7bpTBv(6=_g]>5-{/l<,g&(rvLMyR$&4GNkbLF' );
define( 'NONCE_KEY',        'nWsN6. Y|5{Bx,X+HmQX$}^;:`ex:dZ#MS[sVJe_et6cB3+vZ.3UQ?4>C/Wa5JPp' );
define( 'AUTH_SALT',        '6CsM;d(Li!r= I>9 [$n03Iglbw:[jvj[f=RW*9<r]U}T;ENzdr;Nln74JR)H6U@' );
define( 'SECURE_AUTH_SALT', 'E}#dOA`#T#4&C2GCN3~K/^l^kdk@Z)g`<3n=K1*W<V?+Vlp|.%7.,9AUR9fK1lLn' );
define( 'LOGGED_IN_SALT',   '^K|}hnb{Y/fE&{f:#D<gT50GkCx=iYo:YS&$05tsYhZy;&Q6Ky3&z}> s)@X>O&H' );
define( 'NONCE_SALT',       'quy=@X^$]{~yU7K!%T5{>,| {R%zf<hYU)tak~gq%9._$BWdjCW]GV}V#}4[WS6V' );

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

