<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'wordpress_117' );

/** MySQL database username */
define( 'DB_USER', 'vpartyz' );

/** MySQL database password */
define( 'DB_PASSWORD', 'M@k3M0n3y!' );

/** MySQL hostname */
define( 'DB_HOST', '148.72.232.171:3306' );

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
define( 'AUTH_KEY',         'eynYP[ ~^rTfl**P&Jb!Xt3!4i7V@/!&9OBz^tJ#m,Ac+x2M;]tmh{~b~.b!t!S*' );
define( 'SECURE_AUTH_KEY',  '0(g!HlKm(wjH;_KC@aOkhsx<tO^e=26.QvH#srt_By;&d|c]7#61@,)Nw=LTTqcv' );
define( 'LOGGED_IN_KEY',    'BpQ1@<9w?dDDz 65}*DQFu16FNBJf^IM;%Y{9){BDO]5ZKfyP&eml,>X^ 0i98,f' );
define( 'NONCE_KEY',        'I0&3?}$!plWAA*eKz_&s,O0P4+4^l0@Ec;1:J]>|h4LHj5U@(scnv)[=#8,*atTT' );
define( 'AUTH_SALT',        'hc,:|=^JN!l8Q &=!-!ix)` KAL;*vk3l>dEWW*Mf~uPA1x@RRY9cM;F-6:)$+(A' );
define( 'SECURE_AUTH_SALT', 'HIqpx,=ecS|u I|g/$W$z#Y@#{nU&jrc&%lETR7_CG`NF%%aylwe2`uR<JjGU5;}' );
define( 'LOGGED_IN_SALT',   '$}(CS$_Q*p6&~s GD1|>B-Yz y?G*zen>u&*Va8fgn( X<}sKk%a)8xyq0WqDl0H' );
define( 'NONCE_SALT',       'ao~Rq0n,!~2@B_Cm.a8J`}L;uF*y&mWo-O@^:~Y&AY^i(BL$tEr@.Lc>(/~rPYCx' );

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
define( 'WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
