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
define('DB_NAME', 'donaonca');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'RRaMUxLiRPzFf5CIfb2mcY54rgIp1t19W9poglRACpoBoSjuGTuYvA807S6s2OSs');
define('SECURE_AUTH_KEY',  'csaZse5OEpU1QhNLgmM3NuYX0QpnAqPBmbyE97RZ8AB1ynjG5tuWGQdJFde5GRVn');
define('LOGGED_IN_KEY',    'IVl8Rpu8lVtOLNqCaVshTjKebvOKRCW2P7TX5mEnt3CgzvtW6MSlY4mK1urRwXzQ');
define('NONCE_KEY',        'HKNOKSz7qhMpWBCTYz2pOkFx3tYKWSlV4dfZDBZQHZ7w0aIkatutBvMpkyiVJDhx');
define('AUTH_SALT',        'TOHJEaBPadh7RUYzv3Ki5uSsI2ChF54GYcv8jluiSZywkI4INWSJqTZdvPFfMfkw');
define('SECURE_AUTH_SALT', '7DfUmZvesbC92gG70BZlLtgl7qasWHzsWRmOgoT5rbmUaCzhsi3Z8hmHWhaZFwc2');
define('LOGGED_IN_SALT',   '6sHAfsBexxWJc4SnXfysFtbEWokt1XYmbYIPPDexF8QbLhOFwZE8KJMmgm24SdUH');
define('NONCE_SALT',       'QtKMkoNKeivaZjqhC3e1znZZDp2qUNHawHDfCidaTzGrqAUd3JIVYDnyRpxAhPUZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
