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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hnpweb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '$0l01985Deni$' );

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
define( 'AUTH_KEY',         '?,u<3jiEzBzUNqH*+<8Z(r)@_Ooh*$[k#oFJRkLffkkef%f{N!xv>w+n)%:&EN0h' );
define( 'SECURE_AUTH_KEY',  'V9?:&EJhU!dO,Du)OCjtk)K:/SfN.GO:,TJEks.QKZktax<WImU0Nu_c[h(qTf3`' );
define( 'LOGGED_IN_KEY',    'ID~[#ueBuByy.I)Tt5r({G@&bUanT| ?QorBs.C]aOKU_g>}p3MHu*Yguh&8V~F%' );
define( 'NONCE_KEY',        'H0bs:I`4iyJq*V!]K:eu6n/WQaAa-3_)J3]:PG|*(b A=pBa(5,BT#R80SHO,zKW' );
define( 'AUTH_SALT',        'Um}tmW=-e}aN9P[>|PuA&252#4lA*WMI58.IxMUOp?4*Yq_v&fuH=eCLA&14DwA3' );
define( 'SECURE_AUTH_SALT', 'g;3e: grtAzi`ihI_wZ]WueRHm8aVlz^c7g][Rbrb!Rpk(6B;gm{}B%tTuoI3h>?' );
define( 'LOGGED_IN_SALT',   'OgASeg|PCK_d^XneW7H}0b}d+EXZq]8)kS%=)d]Ge8!pK/%HD&uK-iyIq?-}_Nhn' );
define( 'NONCE_SALT',       '~AG~|x[3Vz$-[|px&:_UrYP0+oA@JRPt:}K4<re{~DW]6HHK6y.W+i5qU_VHJ!I=' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
