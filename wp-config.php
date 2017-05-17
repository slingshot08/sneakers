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
define('DB_NAME', 'sneakers_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'i~qk}H.Pg*?w/HQ~R?ILf.kN&t+ ekIF8K?h.NaB2@H&wK4}EgQFS*h*Ndtxl)-!');
define('SECURE_AUTH_KEY',  'Wb_/{06_bim5U4M$C&&Pt ]Se{6mX$Po8%YaBEbkg[pdm=cg7cw+Xb??J-f@X:1R');
define('LOGGED_IN_KEY',    'B~FaWQ)bl|?}#.r4RWu=*NY+v&QIffr4$x>}k9`^m4*EFt_Us=5|N^T2%=]Nmi,t');
define('NONCE_KEY',        'Xbfa6`54bNew*pyLLZXlv74Y2<?E}*1j=eK{ZunyX*>(}VjHrqExpri.^5z/29=b');
define('AUTH_SALT',        '%rt}@.:O!ysDkZ/2lKw*8~YVc0a:HJ1H!6dzfIH#S{a3vNQ$m: 3O1RHD+=-yE&=');
define('SECURE_AUTH_SALT', 'gudcLx)Cf:Hrj3z:bhCr4-Q<xNmg4w[{N<e%|Lxob^b?2nmNrB(;L[+7IOoyU|*a');
define('LOGGED_IN_SALT',   '>S5>MPF5v3w]W*65dtIG^ZD:9,,q39Z=H^.l-;ASj1|_B/&k]OSQ+EH n?BU2UHZ');
define('NONCE_SALT',       '#Bf-f&HkA7[N&-4(<QhfZ[V}uX}S:-i!sHzty bqT<B86`njO,$6C73kI]&:lQQy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'snkrs_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
