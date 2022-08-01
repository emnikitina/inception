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
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
//define('WP_REDIS_HOST', 'redis' );
//define('WP_REDIS_PORT', '6379' );
define('WP_CACHE_KEY_SALT', 'odomenic.42.fr' );
define('DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9z.KRXKWm(|xwXO|UMZv/7*Z4B%$k$sD=+9S`7A-:>Hd8YU/NC9?N(|/zK4R#oE9');
define('SECURE_AUTH_KEY',  '8K( ?@^*N]gFXf|V[+]|c{YKc-=(0I6,[UliTqnqI=JX2$dzv!766p,qssP}?}T9');
define('LOGGED_IN_KEY',    'P&ek9b,FH)45A)p* w)6 $:gUoe @21x*2:EX9%W*+$(nV|[o-02j]P0atE|@&~a');
define('NONCE_KEY',        'du/V35N3-=&<$:3{nc)?5A)d2_a~,nQJ&5,/^9Xv3Fuf!fy<(:=d^{lf^Qv,rJcv');
define('AUTH_SALT',        'fr#Do0uOk 73G.El7k]l{g@26-v~L=Fm$x1ErfDyC]-/dm&11#m-T0hsM-gWb:am');
define('SECURE_AUTH_SALT', 'OB-l-.zK)+$+V!=7~l(Yfz0RwF?:+;NN-pg]/euE)y/gQJpi%Ph&c-T]!r2-Qe-|');
define('LOGGED_IN_SALT',   'b@H`1K04MCSofbS{1G.Bm7L8uQ*%x78AL{c%AXfB-yJFI,4_Q.Jd!rEFmL^i#q)F');
define('NONCE_SALT',       '6rQY,`828eIaDa1&9c7(B]Pgr>$+);RL{wI-q(cDc,YnNC3tXd@7VEzMNNyqO%W|');
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
