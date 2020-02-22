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
define('DB_NAME', 'restaurant_wp');

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
define('AUTH_KEY',         'gmHY$N:b;FB{X$Bn)+<&$u6?zNP|+#{/orR:8+I85!)gY`wu0cRgi|o@4c:W5T~;');
define('SECURE_AUTH_KEY',  'Xqv]6*CD6IWKeMz|YN86({R1BNk)acnV^[{y{<tT&<,i,]Gt%Ggjoim#6%d]}hQ+');
define('LOGGED_IN_KEY',    'R7:!Co^le61Yb4{r[l_c~o|K)tGyS-RR:[o#a)L,B:]iWIHc;UQ]8DXvN`u0.3H*');
define('NONCE_KEY',        '!t0d/KKa;-Ooo|:u9MgzXA6gp>cCq0AjFkp(b7.V^/x2{)IJ39,p!<cx,Z*{GP#D');
define('AUTH_SALT',        'T$ftC3 J7(6{h8p;~T))iR}tDu[v:{0=mA:q8@uyBOhd, N?GZ}wv;6 P.;P4zL+');
define('SECURE_AUTH_SALT', 'liEx|8;~)~(Pul7OE/Jcg3n.dLfDCvgW!X{2ek`)E1dARwPN#)Z@V_MnvrCIY{Sh');
define('LOGGED_IN_SALT',   'uvPiB!]?(F%5@seEB<&$[2HYL4!eXS#Q_Oq[OfkxA5*Kmu;N-NlOM[D#j:aJP@@D');
define('NONCE_SALT',       ' -60lxLH6Q>4}z9(P? 9l_Qk8wz1QR!WmQCD:(KHlQb!2Mx:-vmj$UY76/<g*)8C');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
