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
define( 'DB_NAME', 'blajarwp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '3*l5a]?=$d(vNMj8&g&q&)hmu__1-~+kLJ5i3d=Vi{|<olE?N^>;6RKaA::_z!as' );
define( 'SECURE_AUTH_KEY',  ':uiHz^6=8n-Nh.kSXkR5<zu.Q|7/ZEmvFwhg^&Whhd~Re8?vx}#jydftKoa) k`l' );
define( 'LOGGED_IN_KEY',    'ZKJWE>]D%fd^M*|HE4lJtGv:/k]2tnhUqUUho0b=FvF.4=*hI8_[2*%gd9NV=de3' );
define( 'NONCE_KEY',        'c2}FyHk`S2YY_L=$LmavR@tW;$42+gx)8z:9c]K@Ke_udGMWM$-It/&RDL)B?MvA' );
define( 'AUTH_SALT',        '6^AC:SFVU)U9;eK k#l[q~~ud^~YyTC$Wn`z1! VSv|d -89!_]9KVVo$$dc:2ZE' );
define( 'SECURE_AUTH_SALT', 'P^{6ln0*p|nT{Hr84=5p$V<iVJUXgwuf]uTKSMf@>wiMh)Isb8MbZu[%3ONTFVTH' );
define( 'LOGGED_IN_SALT',   ')8CjY}on1#Z~O RTJ[1]d`bs((<VqKl20mmx;/y-9`OTfOh4$H*n!QW`2-sQgL~!' );
define( 'NONCE_SALT',       'Lhds?L{7ZT/1D<]L`T|5:vMVKxlN 1sd~;Ay1}CRv1^Mm!8u.O%$%Yll8^w~!S)1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpblajar_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
