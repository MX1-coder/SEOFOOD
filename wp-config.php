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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'betam4jh_wp75' );

/** MySQL database username */
define( 'DB_USER', 'betam4jh_wp75' );

/** MySQL database password */
define( 'DB_PASSWORD', 'g08)pS6r)1' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nnzw0wt7dfzhwovbhsd351ggoqfk1aethhytn8qjdfaopqdgblemggnkohib3izb' );
define( 'SECURE_AUTH_KEY',  'ybdufw8n8wabviciakybqsof1ulvbyyuo220fotcuzncgfxfcpwik1vintoip9cq' );
define( 'LOGGED_IN_KEY',    'yyywoj3ylswneqeboedmrusqykli851nhb606dqogp0ga12o4c3vk4minoxoyvsb' );
define( 'NONCE_KEY',        'b2zdgpahlqi0bbivhl1lbvvzqk1ik0tptpx6o7ey5zhowlzsynqhbjptwk8lrjf3' );
define( 'AUTH_SALT',        'ixauf5zkefcqh7izqvofjhqulzczbak1hotgjznz81khfw010fw5btblq0vqng14' );
define( 'SECURE_AUTH_SALT', 'cu3oy0zfeyjpskldevbb4kxgwpohyc59ob2jlt2xogf2rnsefohikshq7t7oz93j' );
define( 'LOGGED_IN_SALT',   'lmqaxlnvqadg3zki0dydutkjr4to172d52aatcrz541yu4ih7pbcnxowwfgt6vll' );
define( 'NONCE_SALT',       'w7il4vk8ilb3xl9vduxzgk4gopq6a1cb3lcghjuqhmkvpvumxk2dwcumflfc0hqm' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wph2_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
