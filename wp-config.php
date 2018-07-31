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
define('DB_NAME', 'wpadmin');

/** MySQL database username */
define('DB_USER', 'wpadmin');

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
define('AUTH_KEY',         'hzYGY:(^#^>NfhHQ3}=E#z+0req?g@vYUZ2DG~/kKwc&g@MM*MA{ORnHsg175B~f');
define('SECURE_AUTH_KEY',  '/mNVcIsOU:9Vqh+4f}|Izeg`8mq*as)B6;ke}<I-W%b&%!x[28Aj,EdmA<}Fvx;-');
define('LOGGED_IN_KEY',    'uU{a%*.7joK~K6PQ0ajw9iI)K{5dICTJ)2(M,ye*r#W,2Qv*xnNrgi+;W<FoIQ/,');
define('NONCE_KEY',        '~eCOF}_Pm|c=Amd8]l+`9uO&ZzePwBUB6{_<4neYT1 n?5(]dl .g.EC)!H@9D0D');
define('AUTH_SALT',        '&)eg{4ipDO~0Y8l7~%eB:HQt}xOxaP<CUP~2+92x3c7NN:@W&Cuj;!5,<7ZA8|k`');
define('SECURE_AUTH_SALT', '8n{[y}|L:srgRhPj)l>svq8bp<tm|^ut_:ut?|~tRJ^_VIWumqVaAID*Yw$F!pC~');
define('LOGGED_IN_SALT',   'Jx,,07>dg8|j_7$>an7-mj@xNgeDP]ADzr(}bsRv_c6Aon4@a;Vj;/:k6Y@E|7xu');
define('NONCE_SALT',       'E Fb$%!cvD[.JEj=wMZR4f2.%A?Bn`J4d?OErrt[h6[.@4dP;RK31$?gu-4aH+7Q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
