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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'gVp^x7n$D*4Ktl(~nWC*/rDQ6Py?]*@Ht.gH,R)T5&Hc{Pz<@#y5XYm$B!PV0[aL' );
define( 'SECURE_AUTH_KEY',  '8Q`c2/7-QS;xc!)0_HLLYwZ eh:HAoUTQSE&%(oze+ P%g&mTR:s7,(iQtzi]ISv' );
define( 'LOGGED_IN_KEY',    '7]=utxQ$zW%l}N0jR2olB5YLOe{;;Kj:-O+:eaM!E^C_.h8i:6re7ycw31)?/)16' );
define( 'NONCE_KEY',        'W9[CA9BC}x%QLQq&*#1kgS ~Cz!()buy3C3uU$u;Z0#ARPm=,oAU_GO^{Sctzu)B' );
define( 'AUTH_SALT',        '-M+xOfa _+H~9M-ow1gpq)L)96d 13;@YFR+~<=uwAro.WCAn6ikVp@RCBeRw^Ta' );
define( 'SECURE_AUTH_SALT', ' )B(KoF0~tHaCgoK@w0Dbyl>c$bx.*CEe#qAL~]Kv+fl8=a,ibtxn~VyKK1im<*k' );
define( 'LOGGED_IN_SALT',   'W!Hh^T0(vgs+If-&$I3=5C&=OISY^j:@}.-MO}gWIS1Hw`BoZuH:8KRW9aK0(<jN' );
define( 'NONCE_SALT',       '{ e2qq4itY:J6#:mMYx_ALh4z50i,HE12u*0!0cXsEEX i #[AK#e`_e;ii{S^*o' );

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
