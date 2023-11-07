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


define('AUTH_KEY',         'eqf/eaaFDmHc0Ewayf3GEOblw2+d/fwBIFMBeid8YPSWDklpvA05o6926rRLbXm3CysRRfw0Jv4yrTZB4owtDA==');
define('SECURE_AUTH_KEY',  '/cglmtgpszuX3JuMUJD6YIVpcrq3zEDaifkHyklzaP254n5ID7LeP1IO0q+TB4RiJH+BjYrd5/EXP0HQbR4XIA==');
define('LOGGED_IN_KEY',    'ugR6FJqIhITtlg8M6kfjEaf7bSLssAIGez+ZM3A0VLU8/tMRtG4br4MRFUaN5bDwZGnKNigQf5S4Tm+3+CzLgA==');
define('NONCE_KEY',        '1+/cuBeKwGENyPppIcLIMekM8mDehkjhIbt9+4qaKOmDYqoFJtJOjTPRc3sIriBOVRODfAyaHLPRRvJYUcqg/w==');
define('AUTH_SALT',        'w/90yk2DX01hjrRqb4ClRcH/DId/yJcRMYHKokrwAFxxRttyuf6VB6dZB9MtexvunLwyLZv2eueT6W1dLNOKuQ==');
define('SECURE_AUTH_SALT', 'YqXkk5itqauc/t3AzUof9aXzp/I+w0OjtiLjG62g0ja9HcfjQ9RCXG1ioQ7HXdT+cVLHZ7caAlx/ppxP7VJQZg==');
define('LOGGED_IN_SALT',   'SiE4yPN8OJWbHKvs8Tvo0alfmDu9q4uUW8hq4yfdC/seciow4qKGCOBhNbcbizOOC/V5CJVOIp1ltAZs7hftqw==');
define('NONCE_SALT',       '8/9mCaR81qsqQTpyWpaSnL+vYOb2DxGID9VGHltjDSfBM+3JW9kTt9D1sr+RWstYYkNgKSOMx0jtxm4B6AaiBA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
