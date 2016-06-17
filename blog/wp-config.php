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
define('DB_NAME', 'delmosoe_wp618');

/** MySQL database username */
define('DB_USER', 'delmosoe_wp618');

/** MySQL database password */
define('DB_PASSWORD', '4mp5SV(8P)');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'prodateufipc32vdapiu1jcyki97jwi4810tfwn8yvkf6ie4eod80e6hbsql285i');
define('SECURE_AUTH_KEY',  'i426hh44pgxwfru12stzfgvb2uuyzflclgndrbwu70pslkwkizxpr49xwowkrlvm');
define('LOGGED_IN_KEY',    '2wkugelhzvqajkuq0azobpwanmnavjk3juboymify1zhptdkss9fd1j6vxtpoitb');
define('NONCE_KEY',        'atnmk4ux6ttyxgkuwjhkxmns9rbwfrdw9con0npsw8piuof2q9npmh1xgvef0whx');
define('AUTH_SALT',        'gxvavoi47oe7mkjxwt81du1knrwpqu8wpvfafrm7z8su8owez2jmdla1rh7t4vy7');
define('SECURE_AUTH_SALT', 'ogrqntqdhjh2gluycfj6u48bpze1jrkzifoibfuivrg7b3icerfkoeinmc4ioxq1');
define('LOGGED_IN_SALT',   'zjljadnf1iixkmy6emv5t4gbnnk7kvuv40edeufxt543rz5ady9duxkxldkqmocx');
define('NONCE_SALT',       'sfxybft89iqlsgshgnjblcvwkw7htvknzwkjfa5ect11hgdvgx6nvcglqvveee0k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpxo_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
