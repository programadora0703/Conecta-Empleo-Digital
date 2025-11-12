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
define( 'AUTH_KEY',          'mjqlaxRaBsQ{&&KzFxXWb)PfSU +M{li29kt]<anY&!6jXptx0WtNnFg{qR&#GM<' );
define( 'SECURE_AUTH_KEY',   'HCp,S^%d-W:743<1x|2j-*k;-/tOK*Y4Qxf3bf_Xg)s,T%=jTDLMJ.=6YR0o,9{*' );
define( 'LOGGED_IN_KEY',     '7V4tf{=fEaE4QG4z>F&KP#.b`DkcyChO+[&i# .gaDcd2#I7G8&<FV%-)XMPU+u=' );
define( 'NONCE_KEY',         '.|$cF_Drf3`UU3Z5bMIrMLy{L4HL,,8O/%sgUFrP6L2=XvddNpTbL{4Jg?cjiO&D' );
define( 'AUTH_SALT',         'H}4}x%5XJt@MZ)J+,HyS.#j.D]C^5&j^HK~zjhpT^Lthl*}Q#LLkM1Q%}^m?UI-h' );
define( 'SECURE_AUTH_SALT',  'txQA|Hh35P&]T5wu2Uz/_>mHac=~t_#>PK|PO O..Yv V.3:0>|LPv$]LN%n:]X6' );
define( 'LOGGED_IN_SALT',    ':@:+C:.6j1/:trrVe^76RV~Y@%{11ZV;MN%gw1OEFw.y<4GL*[*)lz-xPD4G-P)7' );
define( 'NONCE_SALT',        '4HW)F1zM-*J+*~1J9rmynfTS!+}+4C[wbyMt5D5l9JYf|-P>^9pSmF)0b6 h-RE`' );
define( 'WP_CACHE_KEY_SALT', ',2Ku[o.,UX$j^q.dza4XUS;J^}=.YYLLlVZHqCT#m9u^Hy0lwF<`_AN>2jjb((RM' );


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
