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
define( 'DB_NAME', 'seogrowthengine' );

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
define( 'AUTH_KEY',         'O?J?d<8#z]uXl#.b^u.0*AXHxMuI7|cf,kSFL2Q&TdXU=oJ!8xjl+gTO:LzvA(.B' );
define( 'SECURE_AUTH_KEY',  '6sWD(a9n7Qv}H,[uXc6A^<hD#pVAeQ02e3_A4wH_BpazUi]Y^lR^ASb6lZ1i*,`8' );
define( 'LOGGED_IN_KEY',    '1fzW1:$`a}rirYA#x/|>,9NvS#qPqu95Wud$`^MQ*76/ur7}BLL0JNvpherG#B-o' );
define( 'NONCE_KEY',        'QX*N<usH3!e2QJE@&9HoUp|&kmfwe`5Jy W`KckFtA:BKQyU=mp4Hi0p4aDC.CBS' );
define( 'AUTH_SALT',        'Z&S~OfKRN-<SUFk&c5blTcOg}O-Mvz&x9NEaox(v)FA{f6)HS58he(S_y~7a_0}-' );
define( 'SECURE_AUTH_SALT', 'tCMO:Q)T#B(EERa4=n#IB&_Z;CspID/J>n~,}D?jLs/fq0. W+.>H[f3%j`efvnd' );
define( 'LOGGED_IN_SALT',   'ZdH66$}S!_wW+0BqJ_ L?$O5Hog~dq+zw?6+)Pa>oUp2vl%x-SLI;KF5vQaUS0CE' );
define( 'NONCE_SALT',       '(fHLv-~P$C;~0p719**d>.{Cn]fo0>9y pJxEK6F5Y0p|A@l=N(I[L^8zT?1VDZL' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
