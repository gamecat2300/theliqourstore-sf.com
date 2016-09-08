<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'theliquorstore_sf_com');

/** MySQL database username */
define('DB_USER', 'theliquorstoresf');

/** MySQL database password */
define('DB_PASSWORD', '2VzER3rL');

/** MySQL hostname */
define('DB_HOST', 'mysql.theliquorstore-sf.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rv%(Y_Bn)+IEI4tQ|maNYCBdtdC|CGceD*f3;yWO??7?M#I%GD9aNtsk@/^u:D2`');
define('SECURE_AUTH_KEY',  '$~5Y0t%yf~Wn&R%%V/pTP`d9i+4sNR*cR&JC:6)b+pS#n?@x&J/^*NP_QOdFJ5f)');
define('LOGGED_IN_KEY',    'f1F89&WNGcGnJ1ew2`|4SP;tYog$DnzVs;?26T4nV+yv5%S9#pgIqS537Z:B&6dY');
define('NONCE_KEY',        '7u1nsp*4WhHi#j43cs;l:GT!zH9i/l2d%0uy`R`l@6*Q2f`X6pK~2|DSkv&H2|25');
define('AUTH_SALT',        'wd&q&6t9M`3i9h00lcPCN:;Wf`gTGcyE$/a#eIt|xJ!752i(/!jC/*F0?T$o+1U7');
define('SECURE_AUTH_SALT', 'SZP76|L@v(qwyUv;*q)mn(rw2~v|RVw6L3tSIf^GsUm_9!WAQcoBdYkH*&:e8$N:');
define('LOGGED_IN_SALT',   '?(:?nv_imFXSgqGHq~KIMW2g1%yyEZRJ6d&J/vqn*umEBE@Npxpo^!!!CD0uxII+');
define('NONCE_SALT',       'Asr92Y9b3T?u?GA*EB_xl)rTh!Zuwn+BC036Y!`ui5+YfNE2~VWlmtB:&YFojq!w');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_a52amb_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

