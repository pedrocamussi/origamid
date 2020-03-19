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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gGHe3dBuwG2b1JY67haB3siZ9dh1s5mqI77T8yuy+dWjtvol/ss4eG3ndeYGJZHH6WMptMrSbM5XIltOzujM4g==');
define('SECURE_AUTH_KEY',  'Nq763EvNoel5kzxJF3m0dEXOYSFzw+WS0ZFAFSJt1JZ9WBm42wF8tj07vr8pymvXbisHWEP89eUfi0j6czts4Q==');
define('LOGGED_IN_KEY',    'jNEYj7+0TOe/ANb+EG0LElKJVF4WZHY+wfw1GuWoc8mYnb7bQ6Ee8mfzyTZII228RUC/LYRqO+c198JMXeyr9w==');
define('NONCE_KEY',        'dP3OJJsZkfZuGIY8QUzKSNACy/H2Rn5hrdpwcH2oBcLEHWdGFJ3c4Diw6yJeY3YWnFFbC/a0tTHiuv2ou7uFHg==');
define('AUTH_SALT',        '322mwz8QZyQ4eHZ7LMfNCT/jTE6v6u2hePJwKAFdRsiVQ3hxLnRtY0X7haOonoQoNeLSWRauVEDa0Rq7Pv7Zaw==');
define('SECURE_AUTH_SALT', 'JfdcyhmvBFslqylkPeb2Hj5y2LKnxN+VJCYkQq68DegQvkw27y0iUPE0LO//O5mNRjCmKc2V2YOs7MH6VciuYA==');
define('LOGGED_IN_SALT',   'w/sfLRpshTZCRKRbza5c3e4B/+XqFYLf2m33RIUqShipxpanF9JYpRqGgVgXpm3gMTqGEUcGHpguafRiqXQ2FA==');
define('NONCE_SALT',       'xOF1Sw0p6TK/5xhiFiQlXkotiMW50BE5U9MNje0ZuA9qiM+PfB/QhYS2q0qDrBQ20N1n0o3/QT4QiuOgpIVQsA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
