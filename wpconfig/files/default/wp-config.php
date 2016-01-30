<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
define('WP_REDIS_HOST', 'redis-new.78mgon.ng.0001.apse1.cache.amazonaws.com:6379');
define('WP_HOME','http://ec2-52-76-69-217.ap-southeast-1.compute.amazonaws.com');
define('WP_SITEURL','http://ec2-52-76-69-217.ap-southeast-1.compute.amazonaws.com');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'redpix');

/** MySQL database username */
define('DB_USER', 'redpix');

/** MySQL database password */
define('DB_PASSWORD', 'redpix1234');

/** MySQL hostname */
define('DB_HOST', 'redpix.csi00cnn3kjn.ap-southeast-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'pMsq{us+T#8V]hVrrNpD7|H|l*t>>&i+KTpe*p@Jds-/%:|NVt+yZg+?`bykOLs*');
define('SECURE_AUTH_KEY',  'fAzZ`X++@W`D1P0PUD,sX|ABFSw(e#z *+]~]vbn <F)&Imdp)4ihj8F#,pj9vg:');
define('LOGGED_IN_KEY',    '$#Uzfk2|O:uQ&20ziT[12Uw>/#,31n.{C2y#?yCq5Km__N+kh-_tQbYx+!FD3eU!');
define('NONCE_KEY',        '0kortDB8GtsyyGp_)Hb6kwIpEQLc=JQL3Nohwf%-`zIc@X&8G<Ojsz!@9MZn95Wa');
define('AUTH_SALT',        '>8;^,0=]gzi9 4Ww3$2So8{:CpmwPeE+V-c$jMVJB|+.iRfa/! muGVw9Y#_D5ij');
define('SECURE_AUTH_SALT', 'E$v+^QE+;bOhF88&t/~)g;$y+>#wv^adR3Q+MyqOU_z[xY?~8K,%L>rEb_.-|nYV');
define('LOGGED_IN_SALT',   'R(#sf}|5713N&LP) |oSge*PtLwUmvs-JjH6u#N-wW23)`-qg>==E=Q0:AEB9.+n');
define('NONCE_SALT',       '7Yf_=-_9BdE6lxi.u0+%E)(t:S&tG_S2rP<K_u)1eCbyc{x`Dk?VfdVx|nFv-Obj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rx_';

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
                                                 
