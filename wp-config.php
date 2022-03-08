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
define( 'DB_NAME', 'kooen' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'cs6-R~+ RkNO+}@LEy13=${YtkWq@g0&-&mhu&E&X?WTfY)UPB*:i(`Y=g{fsz]?' );
define( 'SECURE_AUTH_KEY',  'b0nWjiCIx_]3fq)@ioQJ@oNvc)CE:]n{^K&Q)-T9sX=P>QRer$8ylcH6BKG[TeF!' );
define( 'LOGGED_IN_KEY',    'tF[Uq!6;bR!D0|sMLr`nH$aY&3{^v1,1-0EU:[5]g}T&IE%/yxOtrPn+{)vqp$|k' );
define( 'NONCE_KEY',        'nM#AcW:iHNL^Q4@g^GJ@s1_IWgFRjS.0ngD*n.0jVVB^1`~[8&wzZPO0;5<~%C$:' );
define( 'AUTH_SALT',        'Yn_7,v<sbEp,M.B9sGZKU4y5JN|T>z#$F_Y~lR#RS`Y$@= 2:,ktH~:)IC6]!#3g' );
define( 'SECURE_AUTH_SALT', 'PC|$dRK()IsVyzV.ZS VHvbF5]0jW}1V_}&Y%IZ^3!zwj9W4*X_4cS,j#cM@a-Js' );
define( 'LOGGED_IN_SALT',   'eu$ T=Q=1j&&O4+9]w |K{P6<-qNwk!T5@P4sK2_OQ8${0$Q+MFfXj]|]2LkE!mK' );
define( 'NONCE_SALT',       'Iw^KL=Ei5_>z/{Dn](k/(/[;$]?77*qgF2g*PGKM}:Ziumf [[w]<bjgE(GAP?a<' );

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
