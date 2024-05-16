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
define( 'DB_NAME', 'fixedincome' );

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
define( 'AUTH_KEY',         '$xZ6eb;n;D8]z1Uw?1<NPnIw0boBl<Pwx=0RQb-/QHQ7dG!@kI*9.?0j-;eLZb5l' );
define( 'SECURE_AUTH_KEY',  '00&$K.DRs|M#/_,Ic)PyHQL{93PO(9;X;.f {!xb^]1pu&?ggHXfaXW6DaNsI/6M' );
define( 'LOGGED_IN_KEY',    'D:SZBx,PS7r[9cZ:=N0 +/[PDD1ntB/x;| cVOeyCk[dJd=S|8BXc g@=Cqi?tAM' );
define( 'NONCE_KEY',        'zi5snAGh9u11V<ql XjT8IPxQ8Pxy<bLud{^kiv(FzI~hgS*c5]>D<0PG{a9HT,H' );
define( 'AUTH_SALT',        'C&_<)%tj*1=THN7t`TZ-3>TKNxnv:UO@e;j5,1a[[!!{V .]n5_G~jR/;5^}76wD' );
define( 'SECURE_AUTH_SALT', 'w}PU}v={hA#8S71RF:u$4ZI12aFW^/bZ5 D UX;t;O&i~R?eWT-e&dRh|hQ_=#gT' );
define( 'LOGGED_IN_SALT',   '{2X.eRuiRhbQ`]4@qf0]QNHz22XKqu|NSf:8,l uh;>OWgzZ[)]=8fJj6/w:`RPP' );
define( 'NONCE_SALT',       'f=>j|%:j`n/g#nt~B1jK2{iE$a,:ONP)-o$}Z-wql3]cR5T9n%wmmMym%X<A{l@k' );

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
