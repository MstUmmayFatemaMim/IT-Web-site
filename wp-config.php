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
define( 'DB_NAME', 'mom' );

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
define( 'AUTH_KEY',         'OCcKwSUl(.#vJGUy&CW*/Gs6=ii(/)KUdI<eE=f1YK>)Z*{6.2B~/_v7?:Ti210E' );
define( 'SECURE_AUTH_KEY',  'wiVje{kCs}kL;|ZY]RU>C]rSN~Z8V*R}I1ugR+YHCCvS7.O^,)hqvtNw:(d3x9,2' );
define( 'LOGGED_IN_KEY',    '?Z@WLo4*mek:iT|c8K]_v D4,RE:H_;GuM/QwjRznQLn&?Y`vZXO`y3G2CxnKlA{' );
define( 'NONCE_KEY',        '%>Vg>9>NhbvG7SOLD&*`4{/{e|eQuxzd[tF?r4W2,{6X6`t.f[LxS.X7HrP<;-Vp' );
define( 'AUTH_SALT',        '=wm7y@SmJm&}VwwUr49dM0,(UbY+Lp=42Z.]tq3O4sAvf3I-HGpVn7X|`b.s;Wr4' );
define( 'SECURE_AUTH_SALT', '@d,yuB}e=i_n quoj4sxlb:pzz~zm3Rdzr+3@2c$@8Ropna&)p]o)w83R;n:URp9' );
define( 'LOGGED_IN_SALT',   'RS7q!GEUEZcpXR8vSWm0HL97R8><vs.>W&y+vfvDcW;v8bn9^y-a?ic19yxsfx9a' );
define( 'NONCE_SALT',       'j* u./DDT*g!lPj4]Ns4102;SfgFA&ifw4EXii?Hu5nCC|?CJ|U=+c<Zv~!0z i;' );

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
