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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'odomenic' );

/** MySQL database password */
define( 'DB_PASSWORD', 'odomenic21' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-service:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'RM+Yt6i3q~Z-aNC3$E&Iz$JZGP/V&t=VB|y+#=m3K&y{+vEp+qpA,7K?m}q057d+');
define('SECURE_AUTH_KEY',  't-!]NVK|i01}G}$KF*4txMW2A{*=L1|<qix~_%9p#xbH|djo9-Nx[X+UE^by@3ld');
define('LOGGED_IN_KEY',    '#Fh=iBampT*)rDo+?70g-<tfS#2*>{zm9i*d`O+t{sV]{.s5+kw=NeP<uG!=c4CC');
define('NONCE_KEY',        'SZ_vJ[Sv77HWN(<.J1c~?f5tFAY7lm|B&)n|PBNZZSK4^c&:EYbS^{6:U1!mnDy`');
define('AUTH_SALT',        'D%:-i|;`3_*,LgMp:~=aV.G@4,{vk{<+Skc7>S.9Efo -e2c-#=+FSlFp-|-~KI`');
define('SECURE_AUTH_SALT', 'ni$|+&rD0 >yOW,|x:DG2>wMD8C.~yQjwF}8O}n(|)v]oDyci,gvfH]d)odq65{`');
define('LOGGED_IN_SALT',   '+%w?fV<f|K.{qHA,6H,zs-N1xLr+3-1urj`+|QiHR-B#q?gC:iZL<#Il)d~~O1|?');
define('NONCE_SALT',       '/H&rtEm[i>cdhKuoR*`p8$2XHDA`Lf^*KVI=/ROPITv-!_-gK&8:oJM.R0rSANXM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
