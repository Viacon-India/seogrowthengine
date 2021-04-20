<?php
define('WP_CACHE', true); // WP-Optimize Cache
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
define( 'DB_NAME', 'rslonlin_wp929' );
/** MySQL database username */
define( 'DB_USER', 'rslonlin_wp929' );
/** MySQL database password */
define( 'DB_PASSWORD', 'N8p5Cw5-S]' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_EDIT', true);
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'vX+}fWjl!cKz}r-[DQ9%NmVYB2[$dL:YUE*Ibebj=U)bJ_=,vM6:.S-fIBxlRaik');
define('SECURE_AUTH_KEY',  'dXg!,PyXQc0_%@7!Un$&`vm?}m)nP[O(NgeYH$>;2F@xwcqb[&eL,LGE~9zn>J)t');
define('LOGGED_IN_KEY',    'ElqJ8-+jo@TCo?r7qVz#W+3|7C=UB&d|YK}7~@-L3#H3l0+!++8-;KV3OkR$92.(');
define('NONCE_KEY',        'SgO*D`4):zce=]4fd.PBVs>Qhr/.CV3!AgK%e>f-CH/EEN<Hpot&.c@,-|t-w2#g');
define('AUTH_SALT',        '26u5g*ATp#A8%dF]/9F2+tm.RR(z70Yv IML-pXY;j8OdR%_B1R*Fv6hBEKR|)#T');
define('SECURE_AUTH_SALT', '=}2]GP37^pD~*rEe4GM`lIL{#(6?6@a6HOBe|1=1^}e2]sG2rR/OxQimVTezzGE<');
define('LOGGED_IN_SALT',   '>r`)-#|-*d>s)v-hCH-7+-U~zoCU1_B2]R{K?Ck[P>+q?j0*A;.P]Lj=Fw}7T*59');
define('NONCE_SALT',       'G,(<=M@<S:0!vxV^%<z:n42J{<*Xdm>=q8o_avl6E=)Qz(=bC$g+v:=`?h:WTGb:');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wprh_';
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




