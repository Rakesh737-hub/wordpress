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
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         'x2_C-9}x4%9&57*C@C*00S4EVBlr9gk7!+R#0^1[83$B;KU_D0g#~Ew:s[E3V9&:' );
define( 'SECURE_AUTH_KEY',  '((NrEe/2Y~rfd%[ o-MquIC0Y2eo*HyJ?[!2&$*oBPZuEVL%gnk1ex,lt:]qtMcm' );
define( 'LOGGED_IN_KEY',    'kehrgdw],Hh~v,*%U=?Jak|sI:1}7#CSQ^({4,wS^ReF_YMMFm`STPs7H^.XC`gb' );
define( 'NONCE_KEY',        '>z[GmmUsr/-yB/>x4Oxb|StN|@]mhh$wVjK2iMA6y#9>C*G5i[{5pk,rTs8GM4EQ' );
define( 'AUTH_SALT',        'd@*JqIya] H`cF&Z4.= 1w8HMe4Q!;,x;ouO~-&Fgl?y|u69h*kji(c-)eZwq%+.' );
define( 'SECURE_AUTH_SALT', '&c:}WUv$:+Y#vDbR6`wZ7_{{buh`nrYDm;:gji)HG*cOFZRhjmNQ4&/O=0uY){;?' );
define( 'LOGGED_IN_SALT',   'x8aF%ql^&^hPaF}8@o5Rb5dG|9ML{8hkBjH  /.G g@RIT_BYj(F.56C~e<WfxKe' );
define( 'NONCE_SALT',       'QBB<%D$<kT4qL]g>P)=@Ap14,x[!muc;``ZlD1>s6!w/DuhG8[|-TpOs |Q<aIbS' );

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
