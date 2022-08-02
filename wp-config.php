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
define( 'DB_NAME', 'voodooLeague' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Timecill1970' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'd$B|07aF{C!y$QhQ]|tF$6teDXoz1;CC5oE?nD2C@31_of?E1L6^,w_+93Qa8=~k' );
define( 'SECURE_AUTH_KEY',  'Ou~u!0Y(`Ra3rEpeRO:9hQ44|nLTKvBQ=P~k<~c`-m[tKml_ZD.B<0DJt<Z)_<f*' );
define( 'LOGGED_IN_KEY',    ';mcxf[)<o5mqFh-35p SX@*p^krvhZONM%<XV`G`0~ZLk$Sv/@Hlrfm_IbRBmWPR' );
define( 'NONCE_KEY',        'aPr7rEK4n`.W<xB?L2wp&>aMO0eIl$>JAYiYq%s)Y 5E]bnYwgIWqp,lG:s(b5f~' );
define( 'AUTH_SALT',        'O~N0>aCc*r6;13,Uj}T)Ua5IRr39|NQuR&BK]pk-j_0*v=wqOY|h1 ^aPd8*3Ns,' );
define( 'SECURE_AUTH_SALT', 'FG9Ea=g31L9~T8{,p_srG8zmXc$s-rR-V?S~.)p4fcUL?/KJrNd[9&J$=DZJu|/;' );
define( 'LOGGED_IN_SALT',   'NCg09[YrzU-KDv&ZB+K~dI`>x@rcoLNwm~Z<:U7>sS `2Y%l*IsHfy)Srd-#O2,d' );
define( 'NONCE_SALT',       '5f)}^s^JY92?2+ctp;KHV~?VUsT9*vA`;rFqR>6Yk~go]B4lXZQwVE=X0$q0cJF.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vl_';

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
