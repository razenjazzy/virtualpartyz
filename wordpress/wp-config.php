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
define( 'DB_NAME', 'brenton_sempakgud' );

/** MySQL database username */
define( 'DB_USER', 'brenton_sempak' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bU3#c}PK^YWG' );

/** MySQL hostname */
define( 'DB_HOST', '198.57.149.90' );

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
define( 'AUTH_KEY',         '=DI;?)kT)t]fy,|ILp*UXy1ghTvOU##}5H%AB7E}xqOKs,VB<^+>B?Mh}#R<&P9W' );
define( 'SECURE_AUTH_KEY',  'Iq}ofm4ra[us2RYTr{*:32fq=#`SH?F)&Qq>~GRcHi}-J(SYN4&wl{Bwp^/.}Yg`' );
define( 'LOGGED_IN_KEY',    '{q Q3.l| M[ z]xd4aS+>?rTs#K?D/$a9mhyG?`@*/Qhz3og.,|&K-TUT9c6v.zx' );
define( 'NONCE_KEY',        '/fRWM$,J)QYrsXS3%Y!FWGJipe@pNfPs[OvuIVEEXP&!HrRj=acIi4Xd8zQ1.=#c' );
define( 'AUTH_SALT',        '^jZW-gqrq,$o.1o;idM5f8~/t:ew>`&SsZk?I=+!VT`Hlq01PwoSn{3(x^(QE|4_' );
define( 'SECURE_AUTH_SALT', 'wWBz$zFw%UiyAq:Q&:d%GSQj>_yW*VvTR7NJg7lGZCK429r_d!s:wPkaM,{))%su' );
define( 'LOGGED_IN_SALT',   '2pHQdtN@KA3T_kaT|/<;]p[X$8nQNPbZ^cW[xP+z,` E&gIb3?RK1:/gYf[F=Yi%' );
define( 'NONCE_SALT',       'CrJ*i0|h?6BJL]RON7A<MRO.TpGvjgRLJ<SMSHv+xpaqB)iz@_Fx:A2=>p1v(1r<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_HEZp0';

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
