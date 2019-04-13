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
define( 'DB_NAME', 'shop' );

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'A+w2IZJ5MoAuna}`B7i%x>D<_+2A?Rb,iM_Rz?C*D98F$.Ch|9ko|0, 7oKg0ub]' );
define( 'SECURE_AUTH_KEY',  '&Tx_(Yr>Gi$^a/V}Uo2aR))Hum/n~L_:#Ta9$cX7:fh}/7(uGOXQ%FW=yPBoyz~;' );
define( 'LOGGED_IN_KEY',    'q]/D%hk@[5RIh),:&S&*FLjrXem&=XC09aTP>v@>d0WOc|5Fw!De9:q]|0Hv`n^<' );
define( 'NONCE_KEY',        'V?^@Ni[7D*iVH8v+p8~WRQKeS@o1x*@a5)I=n>S7uaC|)4*JN<BP2Tmyt&a:SZ8o' );
define( 'AUTH_SALT',        '#4<taF|0<bpD@$2sE*evxPb*A}agn V?@.MuhmTze+C)W=9Hte=X*1Kf$g/Tv`v+' );
define( 'SECURE_AUTH_SALT', 'p aq<2=|aDXB@5 @9,=c:~Rv6LrM:}{~[@Kfq`~i`g>#CcH)h8LN2 0k1W4[(dZw' );
define( 'LOGGED_IN_SALT',   '0{VT@{YJbKqWXX5@5t-3)qcfOl2QczT~y!dv{6!/(Y,@cAFREgWe]-Bc2cq5!F:)' );
define( 'NONCE_SALT',       'ea}l) YpU#+EVxcMZV,^|)^OhXq#I?j/cF i6D[R6!yJlg;r<5c>1*u{W?s}9xFk' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
