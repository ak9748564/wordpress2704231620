<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_theme' );

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
define( 'AUTH_KEY',         '5$/?G:E>b5&7:_d4A bYo4x2bg^?VCMg*zdS@jfO)zX]xkMG(<j7epSodpMf_qpe' );
define( 'SECURE_AUTH_KEY',  '=a;?nJ@bpGp;Q_VWrivQ]Y=,vW+DN/YKYevGobkc(F]oiSJNZDzQ29W49(j$KMDn' );
define( 'LOGGED_IN_KEY',    'jX,k3W%vt9>J!Ff2ic-z_c$8-l8~M,R#<F8qwUCS1kWmn_65 YIaDIN:PxV7k&R!' );
define( 'NONCE_KEY',        ' >bcWlR4&L8q!G+9_|>(6|cn@Ew^]GSre`ez3~OD([`y8$b<K}Cnp<u%YU%BPP`3' );
define( 'AUTH_SALT',        '!VD%=litJNw]s6Jrs%)Z/4$$D,KVMa!ZamHi_Q]!1D%/3?ox/e4EeTi=R4I?M_6o' );
define( 'SECURE_AUTH_SALT', '+:VL+~sUaRb<@)?%?h-LYA(.Zdd6~}2I63CMR(zt^1?we(q+tEE~T5NRp{h,j2<F' );
define( 'LOGGED_IN_SALT',   'eQVIF`;2`6q+UDDtf]N_<Ywol!L&pkKKQEHU fJ_U{zZtHAN63HTIAF1SjJB3Tmb' );
define( 'NONCE_SALT',       'qk<W8P=T!Vfl<mvhEWq;bq(KgG_+~+y4VEcaFzp9}X@AUhoeiK5f|/6g} wOfQ,|' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
