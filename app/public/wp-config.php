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
define('AUTH_KEY',         'qBCb4gk8vj5XMHoMGPr5EtJaTK4qVXDSbwcnnLNFFK4QbWnhq02+2lmBrC0qMVkCxZac6Q2T507YCA8ayvuC9w==');
define('SECURE_AUTH_KEY',  'fWARRfxXEJJWcEQvIZ34fsBAajKfSu9rHlAAgkfkuwI7x/dgRDHSB3TBIDBncSyjg60SMQ41jsp3J+kVVd5tbA==');
define('LOGGED_IN_KEY',    'WvWxAxbg/b11xz1MeTMpbs58VMw5tgKV212FaHRx4ue3tqkIy5by/nKHqryebj4uDY8U2VIj1kCcIlWXcdsDhA==');
define('NONCE_KEY',        'fpq2+sxSVJReSpmbjoix9HdHJM1ZnJfZWYIsx+ChtAj25j25h9F3EfHpM0UvTtdOc0FJ0VuSXYUi45LvM+yGlQ==');
define('AUTH_SALT',        'Hpg/4FZXksRb0Xgn235TV7inANQ9SLVLVvifgo3WOqbjvCN11YonWxywsUW/ZiIZbRweEGQKKhcjk+BXCL+Iig==');
define('SECURE_AUTH_SALT', 'vLoH2gUqDLsGCrNb58UhZADcggkMcIImrzldRqgAlkO8n8sm3gT5ApjjMYpITA3bSb3P/okYvaO9H1saSlNamg==');
define('LOGGED_IN_SALT',   '66k74D4/0Ca8JALg4Wvuq8FBLheXu3zbK9wNA6llS/Z7EmNlKU5RAj9h//59W2NpUINzqb5WtGAnfLYKvCmmew==');
define('NONCE_SALT',       'T7AbWDGzmTpEFO4xmyFwYG5QHJhZfm5oHJX5URpH/iPUwUhQWC+Kln2kuNAFEAKw+LiXQkfl5jhe08T4phb7oA==');

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
