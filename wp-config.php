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
define( 'DB_NAME', 'psd_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'VO%,od17$:BeF?DhPH<L6nEw4y{nVHp?f`xgN]<l^E(A,Q5B]TSa&#!VE#:7&/%:' );
define( 'SECURE_AUTH_KEY',  '+N)^u+U)eVl&hom9:UQ.*ueTx%}jZ`-#eaEb8qy9@VhAUrPCB{exS2o4sKj%|$,0' );
define( 'LOGGED_IN_KEY',    ',VYT0(vV1N+|KOOH=_2#Q562JpZ~]~HSls1uLMO,[0b?Vl*sxlQze&3G1!hBO0*!' );
define( 'NONCE_KEY',        '1IAsxa(k>#<[lqlFd,fl/3N.@h&5=Z11~Loj81ebq: S`H.aOKNrK^wT3V3=KO=C' );
define( 'AUTH_SALT',        'R<lPk4GP}L1MU]iBeW|<F<1=De&Z?<zEIv(KiU!}jax+q!e&dJ3NwleK_nlO;hT@' );
define( 'SECURE_AUTH_SALT', 'D;.pqeT;)3TU4]aF3}V/$IPF*f-8*kfC7W)Uh:mz;%`qNd-{H(HsM~)fjcGJ gA?' );
define( 'LOGGED_IN_SALT',   '}z`!Y^[Tb^TvtiUWy]t=YNBmqklSvLA2e[s49trJrp-C2pUJ[0r<Lw)lAdM=4Uc*' );
define( 'NONCE_SALT',       'cH3|098%6z.#6rRS}QI}8)4]Tls!r~em`G=nI-8<PGOXc^Q;?#boSL5H8?M:nj_N' );

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
