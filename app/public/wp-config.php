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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '9kwy8wh4.@tx_k>[a{wO!_aW/$&Wd1vu%j0t|PwXWZ6omAFSq^Q{h>&]bqZp,59g' );
define( 'SECURE_AUTH_KEY',   'oRAw-3>Uf*qsAL:8^9R4K/!ElYxbe,(I,]2B1tG2+ODERGME=#EsV4-2@E*pX.D_' );
define( 'LOGGED_IN_KEY',     'Apx4R>uwPfKTA%m=cqHA959|N.BJ0#D=mu@1E5pdq2nXtw_dT|(ZFxa,#L6NsFA6' );
define( 'NONCE_KEY',         'Ez.d V@-/[&@AD!*H(pIIUPhwinw:2e)`<onl{vsa~-E])2=aId:^XV3P >&&JGq' );
define( 'AUTH_SALT',         'Rb{,-LA?a$QRpcK11JDw*wCbQv}~ U#k{=y~Q.0N`LuqyzT}R#8V=rPYThtpz(6P' );
define( 'SECURE_AUTH_SALT',  'gYW}m_2B!6W|_?TaB4}wh,X}javC1SF3<=O%%(xggFPHni*nH?-i#BBY.V8!qhfD' );
define( 'LOGGED_IN_SALT',    'HzaW=Dn5Ca}+ /V!&CL!SM.PNzMW~9kw,mjMd^+^r}uvhH Tj82<H!vBCa~Geqmi' );
define( 'NONCE_SALT',        'kaW1PV,0><I>!tWdr?kW>St3l_!jQYFPDbw4W<HRt^6!nYF~ lr0nC~:a5kI:p8S' );
define( 'WP_CACHE_KEY_SALT', 'KT@:e)?l]t9s^eV^Vj?+3o@d?[>c~LDPS`qOt;~b0KVQKOVMk4KVbboi=y!j[r|y' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
