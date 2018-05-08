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
define('DB_NAME', 'my_website_1');

/** MySQL database username */
define('DB_USER', 'my_website_1');

/** MySQL database password */
define('DB_PASSWORD', 'testtest');

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
define('AUTH_KEY',         'r!nYe}Z3u+oFE&@7_KnF@,*k-$z)Ml5,XC383C}Nm<=Z*-!OMB%Zo@D9wMSEXSz8');
define('SECURE_AUTH_KEY',  '_CR$EcCKs7>JUW7%rOfIw~M/@}rpuL<3&4A2e8@%XSNrSRU/OC^<P`^odMBhpuc ');
define('LOGGED_IN_KEY',    'J,@jD6#n#KvYj=#hW2(4WF_P)Jd@)tT}/D$1:1{&*g`[?fy78E/X<$o%[fq&Z%-H');
define('NONCE_KEY',        'f*Z7^qgP7;rV9fA}BKJQ07v^mLct7U5m&;uoQ*.>b<YQ5R8`ei}j_emPVxw:Dx3:');
define('AUTH_SALT',        '&qxX`1$;^GlKB@_z$-jN&QNvV%qT>JO?Ui%HlAsn~[H[s^f[]zoR~7a%5RbJk:W~');
define('SECURE_AUTH_SALT', '(zo&&:yRDe=f}U%~7)%bUa=Dx[Y#tE9#5LV$PWH=nYzK;oeK b$7h$.0$0,7 J.B');
define('LOGGED_IN_SALT',   'M7F}CiCf/*|8z;%4aVbI0L=Sa~ &@U27E+.80Mu&@1Q86ZD&Nzd~{5C`5R]+=T*u');
define('NONCE_SALT',       'Sn@O w?46W6Hs=Wh=G2oCxV3qmgM`!uvo{uL{R7>F1>ByR1BaH/Dz*5@y2)O`l4A');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vup_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
