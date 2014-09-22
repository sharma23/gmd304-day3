<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress2');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'sharma23');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/kr<3!BKA;T{V`m l)A}_TaK}BV)1 #:0#O +au%-`J*7p.&G&FIx$7~a:55&tzV');
define('SECURE_AUTH_KEY',  'Qz>RdCV[p&K=ARUP|?&Sc+jmiD]86P%Su+Z#k:F(V`8HF3m} QN[4{n,*.3-KBYl');
define('LOGGED_IN_KEY',    '>wmytkLpsSdL;5/:E.x.SW-FCvL_^+/#GV5(x=FIZYG02fydXv4a3=vBSZ/mto}Y');
define('NONCE_KEY',        'mG9YlU ~GvY,21|Ixh;jS w{h;u|0H=(+$19V!$U0h<wqFHe%_?lqxXjn=|RX6@z');
define('AUTH_SALT',        '}mClRP]+4/,#-I@0!C3kPU|-INDDxKNp_.A7}BrBQg+wTcjCaBjY<jJ:4gUwC#R5');
define('SECURE_AUTH_SALT', 'Zc>t |u@K#.b,Tu88t=0oH_;Ua55P[&+#/#JI,<mVi`M<I|=u{bKts>c7?`zoc{K');
define('LOGGED_IN_SALT',   ' <.cpT1TQ(^z1kO}i)zPsLE3Nh*jL|Y>mZ?YL{vV_A`:Qj2go[Ci*5O7vM^bA,%+');
define('NONCE_SALT',       '|_sTkH#G9-czc<N_gykNS|o&svWB++Sk5.13t7ulv@?V!-lY<&)$#<8j^wdnz{yA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
