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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '6433811d697dc0caf697ca166dc83b6522eeaefe54b1f07e' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ' Q**yy/%mt1wf0cJ+lJ~E6!*mL x_W8#I:cGk`}!/|nL7Cu-d@V9QfFw2N6`_Inw' );
define( 'SECURE_AUTH_KEY',  '^#GsD3rA`b$Xmr8s@}_>9[h]d}!+TMKyrdhZ;@G?A@#2.^^A-xE6)(4k&XOu@8By' );
define( 'LOGGED_IN_KEY',    'lQlhF@<jeG9 b)HkywG7WRFc0Q;Re)fxTX+wa[yG8!j&vnGaU^y<D5%`#O9M)D]|' );
define( 'NONCE_KEY',        '%{k22_b$l]jj%Z9m5-R!QmFzf(eWT[:a5jcu,~KyYwyi?Clf!c$2k;.+=rziPNtU' );
define( 'AUTH_SALT',        '{j:k4]M]WJ-d:AiBzHSDpNX`H}.o;MEw%]xCel={bxEh>bMKV=k|6hiJ8<M<gyoF' );
define( 'SECURE_AUTH_SALT', 'fJ(E(KrOom`TJ>wU<Izccj9=3:iN(<g-4I^}<$Q2!<|3[9tGNhw%6}&?,}]/EwMY' );
define( 'LOGGED_IN_SALT',   'WRUJo]Oz(U,QG^Q#!t7&b15lH%2}<D~niMS![&:=O$=`TXho~w*ma:hSn$*gRjN ' );
define( 'NONCE_SALT',       '8c0hdRC2u-;6Q$X[c~n@F2)zu<J<$p=UX7>eMB6@6BSFDVTLK0AnzoD{z{[!#>xN' );

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
