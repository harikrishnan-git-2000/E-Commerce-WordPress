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
define( 'AUTH_KEY',          'Z9%G`v2A4L1+J_mSeb[p,%BKF18O@1-TR&$|h;;x|oWT/:qA1_=j!r ,)vA)~BG%' );
define( 'SECURE_AUTH_KEY',   '1Neg<o9:&P,E#q9U@O6nLG)b/Yscmcu:F|PYFEm`_^pUrDL+^,e`yvj$~J4cKV41' );
define( 'LOGGED_IN_KEY',     'RRwN|Dl_MC?~j=|rHnT*3xfxs!_D^SnnWM;d8;U6K.;60/>#n?DM#^_JcZ5A?6}v' );
define( 'NONCE_KEY',         '{!J((l4LCa;tmvwgEs}G+ ;VsIqO[XWn5>]ka>EnV5lC(Ynk?s~bnr&4Tbc=6Q27' );
define( 'AUTH_SALT',         'qG@~*m):`BGfKIZ^A2e]4m98!9u+d`w<HAeWuGZ|kg6W<46[iEtBzr^Ax@Bb+e}l' );
define( 'SECURE_AUTH_SALT',  '4*HCy:bN8jj:FA~5]Gp=VUmrmg0sml;2$7WozK;EWUW@xU@Fp)*~sgXBQKl_f)?#' );
define( 'LOGGED_IN_SALT',    'bud~& +vy!v*#ifJY]c_CKk^]e~FlPy@w|Hakb<$$,y-xC`CTgwzyukE/#jSY8V]' );
define( 'NONCE_SALT',        'U5A*0Zu.Y_o`U2nsE,]6]=oKCV}svJi+?3nlHa8 #L3<;`)~#sW^F6jSDL|5fQ?1' );
define( 'WP_CACHE_KEY_SALT', '.?^|z7U~ewv5j!g)7,:>~kTNCDG~r,bYe;int1W7hUXyZEt`$cHKL5O^QWCtz*|k' );


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
define('WPFC_CLEAR_CACHE_AFTER_THEME_UPDATE', true);
define('WP_MEMORY_LIMIT', '768M');
define('WP_MAX_MEMORY_LIMIT', '768M');

define('WPFC_CLEAR_CACHE_AFTER_PLUGIN_UPDATE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
