<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '+zxg+CqekT4=vE]rTkpPB<Q+ldIi$2]e+[&fNS=6:Cx:XS,p%u.b;qV!H)[C[6y-' );
define( 'SECURE_AUTH_KEY',  '{f(Sp>&>X<)+q$KbxWK1Je2Q^{!}6N=?+4p 4T.LT,j9TWgW$>(gYm@{FWO&Di.g' );
define( 'LOGGED_IN_KEY',    'b<y_Bz(1^uWyA:vwjUwB_8^[1q! W.?K<[tXIJ)P%kfe63D:]Mndm<0H+sCRq>SM' );
define( 'NONCE_KEY',        'VqfFQ%zGZM~g(vpl]d{?92(}Q~B85<q-UM`Mv6b<4!#v>9@mn`-Y*^z*(|,k-OB>' );
define( 'AUTH_SALT',        't3A%w13l9r+%1c}ddj|(VI#F!C[sCC-@e(i#p)P[>[4L{6An,CIj(GtC#nE|O#Am' );
define( 'SECURE_AUTH_SALT', 'pf-wWz.=#=5;k$fFz8CRuu&~ <Zr=!4-<UX@TNZKk7-Y.8|O^S=VZpIa!ld/p2KO' );
define( 'LOGGED_IN_SALT',   '!DQX<t=P1:3)CXZ3f6:EtlwQg?on:.KG{^ilm,/Z>/t=mc|j-{ ;NP1vojeR20x|' );
define( 'NONCE_SALT',       '9])B ^=FGbb)lqo?/AT9j#+-Nc.K(^hI<r{jzW+MwP4rX81}Wf(uf(%;9rwfz>N#' );

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
