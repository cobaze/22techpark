<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'i1360309_wp1');

/** MySQL database username */
define('DB_USER', 'i1360309_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'M)f0~XyZSN75~&0');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'FMvQpeogP5NpCjTU5xoBrzzvvq59RWeLryEmvxFEoZFfcgKIhpf01ufIjgqrh6Wg');
define('SECURE_AUTH_KEY',  'E4457tEUrTKfUn3H4G0r0zxDJyQjboMEDu6LTgEvSVvy1pWM6E4mWiIPvymRCuo4');
define('LOGGED_IN_KEY',    'PHBwOiNhFJBwq1mIjruFWkdT5H08acSgA3VfB8XfZ3wkuBilp7CkAgopnmPn3CIi');
define('NONCE_KEY',        'BYj6SaKjFfCoOMHAcTYGq6XaYYX99IT9utwku5te3ml2mi0HIsK4SUQofZ5Nxc7L');
define('AUTH_SALT',        '9djpFVnhfOW3tTUnjOQ9iJoc4syuCVT8vSZJmhCFbe3nBAGjz9IfpBOn7I08JY5F');
define('SECURE_AUTH_SALT', 'aXTCYOo7wJuhLkbM3IQjyzWJqfBd5CWv8LykL8t2o3c9Ttyoz8HMy7sijcfu1c3V');
define('LOGGED_IN_SALT',   'EFopTFHS6Zl3rBzbzeuYEkzBzlV6uY43vcyI1s7yQACZnKu3bzo5M1QArIurRilM');
define('NONCE_SALT',       'L7NRSlIZI6HhWU6HtxreaBa7uRHXb427axxCbvGVLc11jAcdNl4X4uOul3tQbsh0');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
