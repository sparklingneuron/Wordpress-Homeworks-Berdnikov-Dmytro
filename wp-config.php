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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'geekhub');

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
define('AUTH_KEY',         '&3,m4vQX~RbeHXh)3L] )2io0sjH2i1V_mvnL6F{/ >^7s9v@9rg&R`Z`N$e9F)*');
define('SECURE_AUTH_KEY',  '|5D^Xq{CrxH)!~sGn.]y^Q_`>9h%^=J/J&@$=yimvBS>j7sJ,ySlc+kDjS3n{Fvg');
define('LOGGED_IN_KEY',    '}4!J,>Vr@eO D(.FW=W|riN8CG(.| A{:=t`cF`3ks9*?Rr:m-Ult2FuHcr<0Y~h');
define('NONCE_KEY',        'P=]!`>YqYsJEV4:GAZ;ufq&lsW=m!3%{Zd?ZRLXh!/Im@r<99-k<n!T84nP5/pd[');
define('AUTH_SALT',        'Q|>jN7Z#R9Mw4n*w`$zv7l[9Hjf:y|k)8EN}BkNdzYTOXR*]0?F{6$yugHVK|qTa');
define('SECURE_AUTH_SALT', ')+rOe$@z|hHm!uZJvRy6,=S-^@4`gu(~Ls1ux8:2J>z7(IVkJ]ri4;$KZ8LKA6y+');
define('LOGGED_IN_SALT',   'eI4e>^E?E>WcD(<f>c29]gW-n43S$BZQ&$EBUJ`UMbwje+}Ely?n76oM~klJ+nh-');
define('NONCE_SALT',       '(26/{YZ.}d(&Z@z~}SV%aGxjgMzw^OmDLW_}i1(JvEin6Al:MBto]L9?ZsGZVic^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ghs7_';

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
