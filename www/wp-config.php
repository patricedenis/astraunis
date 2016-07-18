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
define('DB_NAME', 'astrauniyc844');

/** MySQL database username */
define('DB_USER', 'astrauniyc844');

/** MySQL database password */
define('DB_PASSWORD', '9YeqZ7XyxVBp');

/** MySQL hostname */
define('DB_HOST', 'mysql016.sql001:3306');

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
define('AUTH_KEY',         'hTPq4wx3uvd7n6enON6DidrAREi4Hvkz/scaNz/motuj92vvpAjT0azlIF3u');
define('SECURE_AUTH_KEY',  'PrGKGOeLElagMew7C4Otaoaii5IDvXZnju3T/VJncLdWOjHOEC+j6TsxuYWN');
define('LOGGED_IN_KEY',    'RKg0PiEMYkhwnOqLu7+6xnOTLZSgr/1ZwuIAfiExFM1k63kCcFWTf+oy0G1M');
define('NONCE_KEY',        'SVPObHfFvcfgd+hIHDIbRaT1efyVCJAaLhh9ogMKJU+VFv7Uy+X5C861YtAp');
define('AUTH_SALT',        'imqGRXNh7DA0e7VK1R8KAunFgGoVNMSDe5PxndvlzBVJgFpQFXtwzGZQl9yU');
define('SECURE_AUTH_SALT', 'if7lDIKD1SSZOoY/Mtjw1PW1jcplt0biMboT0b20CKb4iEcqkZfuMsGxn19L');
define('LOGGED_IN_SALT',   'i01CToPBlwJrXXAWehK6BsJLG+aex1X8wxiRmdH5VDvHVkWgMfhCVNx0a6Va');
define('NONCE_SALT',       'V/7ncHhOokobeZ1DHEQrDlHtD5gHjqfQ3QL2s7n7hNMmplfzACdxUb42CBDU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod463_';

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
