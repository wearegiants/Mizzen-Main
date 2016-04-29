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
define('DB_NAME', 'mizzenmaDBtlixx');

/** MySQL database username */
define('DB_USER', 'mizzenmaDBtlixx');

/** MySQL database password */
define('DB_PASSWORD', 'jB2HneE3hH');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         ']hW;~tL9xiW<xPEymX.eTH*qH6]iX<$qI7{jT{^uTI*uiA<bPfUI,znF3>gU3>$');
define('SECURE_AUTH_KEY',  'i2<ibTL<*yqE7<jbUM>^yrMF7yqjb73{.$XQIA$unf3},$UNF^zrkF70>rjcU}');
define('LOGGED_IN_KEY',    'LujbU<^yQIB$unfIA6<jbTM<^yqME7jfYQ},$vQJB3vngYB3{,fYQI,$vnJB3}');
define('NONCE_KEY',        'N-sKC4:0[!ZVNG8zsk91[_aSKD~wphD5:#ohZSOG9-sld2]_+WPH9+tle92]_leWO');
define('AUTH_SALT',        'qELTbEMUb^<7<7Ejnu$,$.{3Xfmufnu$AEMT7FMUy^>3,}3Bgnv$u$,{QYfnYc');
define('SECURE_AUTH_SALT', '}Fkrz!ks-!GNVdOVdl[18G4CJRw@|}@|:4dlt-9GOWGOWd_[1918GOs-![-_[1Vdl');
define('LOGGED_IN_SALT',   'k4GN8GNVz|:4~lsdKWOVdl[18G19GOs-_[t+_]OWelWepHOWe_]19]x~#qx*HPWeP');
define('NONCE_SALT',       ',XfrUckr07FN8FNUz!>0>07Fjrz^rz^>QYgJRZg|}4C:4CJow@|@|}4Ygovgov@BJ');

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