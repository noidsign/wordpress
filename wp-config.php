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
define('DB_NAME', 'wordpress-01');

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
define('AUTH_KEY',         '7m#m,gC&>*Hk<rao~bBDFG+L4]qe[BAaCH?Rs_hRz%c}k.qXcK4ivv+TgX1bob&=');
define('SECURE_AUTH_KEY',  '(11g_NRCXZt2`}0SbQzF&aP&_[z:U*a8ZU^M_Ff*QVDnyG]fU_9~)ahFQ61zcd^|');
define('LOGGED_IN_KEY',    'XQ%D%c;RGj#FsGIym3F<]58]6T1SHF#ZvTwj/)O-V YDLZs::;K@^EjxV/9AXBlq');
define('NONCE_KEY',        'l.dM*-N?}.INP5#v<XN-6CU]:5Sz8<a>[BY=,kXx.E{c@nlBe8|Q+bm`Ru.>2cXO');
define('AUTH_SALT',        '!EHKE+N=L~T}%(+Ew3@Dz|4JM{M2`v&8xF%/F:%GU:JD+8EFNkTYsu1scW}uTf$T');
define('SECURE_AUTH_SALT', '&R[1i;#6!=Cdu_H2C~Bzfrw]%IL[9ZJLwZfhuC}W},:1)eulbz|cqv;~Nhf`H{bX');
define('LOGGED_IN_SALT',   '3yGTL][}QzLuRJpFzQNww]fr6iu<fSm5Z&^ Z6M{6nJq]r@ac*R_lsGRRW<#wEaf');
define('NONCE_SALT',       'V&xb)H7>zT$, NABz+.?VC#@ZNf226;W|j*]MzvD)4j]c@x.:{Q=v4@y__Nn9uji');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wwp_';

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
