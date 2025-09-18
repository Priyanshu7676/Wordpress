<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!X0[2u6/j_G%gEl>J6.Qc)1DTV|aki{9uMmq],E]p(4)d^FI4`lI5j&l5of$Nyic' );
define( 'SECURE_AUTH_KEY',  '67jb,Af8$[!z|AiiMQm*0dWkA^Y4R[pq]Yt8#CO*(}{>#Qzl^R!FIO;>/D44v@}|' );
define( 'LOGGED_IN_KEY',    'H-^%dkP-tyZ:h0Ug*T4_u3g:3WZ~gNDF9D+{[*k#W|<y 9`E9=>6_wRLYSvS(`&5' );
define( 'NONCE_KEY',        '{G|C94o~]hAbXd.+b ?1V9hdGOl8heod(#V>]]h&~gG:30%a(fKv`2P 0vi_,;B|' );
define( 'AUTH_SALT',        'D:@Zuc+TY9{W sDEj8*l=X1;Y7yunr~t?mBons7=I/Yy8?J>lkCp7e?3Cf,)[DY8' );
define( 'SECURE_AUTH_SALT', 'a@NPCzyc?:xt:I3vR(7A9@7*j?,s,*d$slmw:7H>{rL<)Z1[Yw9%+&[qBtC64y4b' );
define( 'LOGGED_IN_SALT',   'y1_in2qU3VWGyNIbN%%}+xDt:eG(9F9 3J|JE=HkRfPz(%YAjw~Pa-4j-ME:|3Zg' );
define( 'NONCE_SALT',       'RIzW.w2Q;h)?=2O189y4,mvGB)A*!1flgytu9(]m?V=<hVFY^1,&m#1+n53>]ubh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
