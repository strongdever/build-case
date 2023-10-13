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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'building-case' );

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
define( 'AUTH_KEY',         'fj~n597^ JWRIb+`CNNmn4zHs%GMw9(f!KY4^1X2m9nyQv92r/xX|#o9d%5nL:k,' );
define( 'SECURE_AUTH_KEY',  'vsVq}rM%5E<9@W~*ht>,;ab?/|,xIeV4_^+fig|^h5~i5._Ks&*2)C-8#YpIQ=Cs' );
define( 'LOGGED_IN_KEY',    'EARrPX@rn.y=ny^|NGQWd>#.NZVcqf4@duF#kEtx<{ OJ W*,=dx{Q2`9l=?J8$;' );
define( 'NONCE_KEY',        '[ D_TzH4c!IRC|7C4-VCsc4A}DemNQKSvmZ@Hb0V/#qO<&{I5%]u-mB/Y8hNKi]]' );
define( 'AUTH_SALT',        'tM:Lg;R2P};J[*_LU>iXgC(Nr:|0I $WR:QH&0O%)T~Gqr?tIm#S!C_yKK8Z&X_n' );
define( 'SECURE_AUTH_SALT', '11 a 9Ez8F~ROmy17I>ar3{(UlGzt kJZ^/D:*P2fJcgu$W*oi9U1t_D~Pjw6sd>' );
define( 'LOGGED_IN_SALT',   'fSs0+~nGq+fw L`Ir#I)c9w=qzgVRi$<hnB!^_dtR0e4)]XY@_g|ZsS?Q2l-$Ztf' );
define( 'NONCE_SALT',       'IucOyCw`g4k[XFgMm(UiQAU:v`|y^P_n~fS6,lL{#Cy#n0:&ggSqE0h!zGVh9eQQ' );

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
