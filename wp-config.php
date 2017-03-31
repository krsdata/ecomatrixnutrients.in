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
define('DB_NAME', 'ecomatri_db');

/** MySQL database username */
define('DB_USER', 'ecomatri_user');

/** MySQL database password */
define('DB_PASSWORD', 'Bn1QBB]U.V-k');

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
define('AUTH_KEY',         '<2#/r7AOk*41inRfAZiBvV]y8O|*xbk*-n2kns}6z&e.J$!cu^HzG=eNO+4@Jgu.');
define('SECURE_AUTH_KEY',  'q3l*FLWH m11<8V?9uB-CLXk5Yp8*WF2+-zOj0]B@^!yZ|>AX@5Q1BY%/_6Fq!g=');
define('LOGGED_IN_KEY',    'k,#UxRSV.,c:^7Vw_YRfgQ=_a-L.e|AKzbDci]l9J/z[)ae)nFDvAUnK8DUe:F*L');
define('NONCE_KEY',        'y+JJfNo#rfL13X:!)iY1Qw:=a&?:HmYuPm:$cr;P1;uU4AVI3=hPPQWN$#yITQw+');
define('AUTH_SALT',        '9M UxvEO+j%S`#2gz&-wie!4&0<NMY`)#DL#LWdHE]|MHd?4hNTF6.[:dWkrYR:t');
define('SECURE_AUTH_SALT', 'QNX*|t=w$*yXkz_@,xH2p1W<=g6jM`mrownC]_O[]IF5+r3?%,_x(d-+uEDh](6&');
define('LOGGED_IN_SALT',   'g-yjuD]@wn3Y^~#Ul_!zCP46T,WB2P#MUE:Ajy5nbbY|-;&eH`nx7~ax||F)+&u6');
define('NONCE_SALT',       '.]s/#.HLyUB}=|St:w3|oq.PrPy_iBZH<&`Gun7BsLR4RdLlY25Oyo6:Q314v^Pk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'em_';

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
