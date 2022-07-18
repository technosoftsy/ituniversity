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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
if (strstr($_SERVER['SERVER_NAME'],'fictionalun')){
	
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
}
else
{
define( 'DB_NAME', 'ituniversity' );
define( 'DB_USER', 'abdlwahhab' );
define( 'DB_PASSWORD', 'Ha&Ab@2022' );
define( 'DB_HOST', '127.0.0.1' );	


}
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
define('AUTH_KEY',         'IOXsl1IOMzF7yQ+rwh5bI59NYhGXR608wIKUPpDqIoHcd8b7gxnzUEqG2c7yIOggYcydfM/oJP9KauP3W1MlEg==');
define('SECURE_AUTH_KEY',  'oTLW9PzIo/nx8KXCGPQRRa0T6wLY00BO86SLZOf0O+mhifJVxz/YpXvCAjxeMpb2HgImsgUohA/tizpCCDqxBg==');
define('LOGGED_IN_KEY',    'kJtXNTeWFlWGGpAHKCtQX/D7hR50+aeRqyggeCgOdNhL5U43zoy3fKcbFokQO0IjRdiTqp1pMTIrJG72JCqL9g==');
define('NONCE_KEY',        'uIy+SEmSmrzo16bUfWGamLLkcH2GIbFKP9Kxnem/rSAay9RNNu8vv7dQffv2on7Lheg8a+Gqt7OGvRWQ5yjYAg==');
define('AUTH_SALT',        'n3BB0Q56EpIyCZAmqoDhrRSX8JRKdEyrFCJBt+XGPS+N0k08ZxjoCGTXM7EBhzVLjzpxJ1GP4gfChn/SGhGY4w==');
define('SECURE_AUTH_SALT', 'uoikFA8HI6JiniBC2umxZes5+veDMyimUp4DbXfOYCiL81Jv3lpygwuLJ3lY6NknILY3Fr40NkldJ6/HVLfr1g==');
define('LOGGED_IN_SALT',   'SF5Xhl+8pc7W0roNvNucLDUqbxWgDSSJFIkCKhB32kZ0MCwMUJ8QMtq/uQS1Et/79dvT3OSszS16238nvCyQiQ==');
define('NONCE_SALT',       'A8EEL8xyb3DvdQ+svP9raUbZwPIaQ4GKtKhh/EpEVfTRB22XlS+Pc+k6Gyba6N1bYaMolUXJ4ypUelOhhOPf9w==');

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

@ini_set( 'upload_max_filesize' , '500M' );
@ini_set( 'post_max_size', '500M' );
@ini_set( 'memory_limit', '500M'  );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '0' );
