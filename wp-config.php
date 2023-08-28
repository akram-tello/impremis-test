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
define( 'DB_NAME', 'wp-impremis' );

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


define('AUTH_KEY',         'j4enmoyLEw+BVBbPgU4BNQkRK1MP4aTQ8sG2r+MW/xv/6UhPZx83hGWJO6QOCPpM+TllAeM3ya6n1OTUf4m43Q==');
define('SECURE_AUTH_KEY',  'U7AgX0Nos+ZmdN7cx+xuiRZNPIWCEpltiS1txsRKlaA0GzMqBhe0bogKSJVbYed2BWINVZxq84FuhMDnSQIqpQ==');
define('LOGGED_IN_KEY',    'htr2sG9euC9ibeVdR2/RtYiI0+fudsP3OKS0bkYSFaq3b05iwj1JqeAfUYFxsj4TlCchmgFl8AR7NihDu6hTMA==');
define('NONCE_KEY',        'kG6aiwSgFGFfXwW4Qd/HjNeKeNxo/D1R0N8c05gQ3ZYzTFglxPO7f9d/J/IJesElX5kETU0Cs96cs8K5quVTLw==');
define('AUTH_SALT',        's11f7Tn5nttP4bC5sLO9Z01y1XBCHPawhT4pIJ7Ukn7r6/g1O5LbnhLwY34excQEn/73TPiDCOfyoJx/ON1vvw==');
define('SECURE_AUTH_SALT', '2ikr+gHY/kSwZ5nLYLCqk5rbrUUkwEnItkfKJ8yv+Z7Qq70CgfPjaksxe7yYTH8XzBgdGJQuh+F2CRM9GMHLUg==');
define('LOGGED_IN_SALT',   'J4ykYjSw+7p9i8kS7qBwyTu9odMPD8ZVTsDvs4Gyy90Upu08oI3fLN3MgOWojVfQn1TVv8/7WImKo8NyQnYl3w==');
define('NONCE_SALT',       'k5S8MO8s5DZRJm3QhVCAZlRXJyIudpTBfUbTytLi83EWCH+i94rEBkSKiF58mk4mNxAS0GuJEvL5TegYdwhhjA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
