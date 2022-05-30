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
define( 'AUTH_KEY',         'ag`$;*jq-LHeK`s15VL:NWYyr9.2SR}Q{|$E5}IX?Nox]ev21`c8cNtSC?&m^kaC' );
define( 'SECURE_AUTH_KEY',  'CirY_7,( ~Gq~Y:4yRXp<R&.[PR[;My~=R(gQyDl{RSLAFRJ7Sp|`n]ttHNU?=/T' );
define( 'LOGGED_IN_KEY',    'Mu=L4)S}`us}rq}rY*@kMb(8%aULhzX3B}@Y1DDXfW%-<^VEdpfqLYOm58B,1Um=' );
define( 'NONCE_KEY',        'g}3N7!i^QoR^xfCu7K7$V$7+{HK3<u0B;lTS#)H<Lq7!mb5/`gCv{lYlS{8~+-vz' );
define( 'AUTH_SALT',        '&33d*5_I%!;^Q+zDaR8)~dt+4GXv#v2hKIb[kB:VsWe,BdKFZ/|{Au/mg?ABclp2' );
define( 'SECURE_AUTH_SALT', 'B@/6r0iSn,1e]S|2G(NsVU/9sFR6rz+y:qHZsnRP25.JzP/aD$E^Kmw$lxE)O|1<' );
define( 'LOGGED_IN_SALT',   'bMbb&QvNN{(8#Y!azqc4Yt66>~C>bNbP}<>qNP-pc:6-:-$an}quRT2v<6&t/w0h' );
define( 'NONCE_SALT',       ';Sv1DTRnYG9*>~9z`r)>1euKIi.)4#.OL*Ob/:`37E<miwnXZlXR(`,I. wFK^OX' );

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
