<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'thecanvas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'e;c(|<s8Ic-px;EJST96`#iH:IXtvIjV0=XgZ)mZXqgJiFK&+9!l@+]|~C2Gg1q!');
define('SECURE_AUTH_KEY',  '}thm.,E_Cu<`:x|QJk4wqup9Ms}5-QyU [D)mc)u]8g|ErY S-bAzq^}H%!kGWj+');
define('LOGGED_IN_KEY',    'RXqYr3yk%.U$z(b}n&;q+CZi8Hub|)#v!|>[k>y^w|H:iP3q%t0u[[)8-`TA&s*t');
define('NONCE_KEY',        '{I5^Wa71#ki+{RqIN2,HXmQSSl!hB6w2A9;:|VEg6E$u3u{&b|;U8nxWme*=LQ-U');
define('AUTH_SALT',        'w/y6CEz#BoA [_}Q7vQ0PksI]E-VT9afZTuhm5W&OR`Iz4|GZNvsi~/G ClvHtfu');
define('SECURE_AUTH_SALT', 'Qm,T7!-izP&+#GLBWxdxf2#gn+AJwaST5Y=rO3O=,tHf-I@[I[.R}zBG%-mE6|1?');
define('LOGGED_IN_SALT',   ':!o1%|E7n6{F|yOvI071|i?o-,!dS;{R05GneIt,<im_>,oM=nT1XhOCU-=S{*C0');
define('NONCE_SALT',       'z9Vp=9Ft]aN2+f-HT}p!+aID%D4)|lEP>0=Xk]-+3@ Tom%pa)K2|z~Y9v7Ow5[;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'Thewp_Canvas';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
