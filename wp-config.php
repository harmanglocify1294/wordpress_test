<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gatsby' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Da(a2Cy}81TRjp;##k7W}BD <FGd@1&[9nls5|Q6FxjZ$;Oq;f+mux,[6mGqxZ]E' );
define( 'SECURE_AUTH_KEY',  'p!s@@n%)^}U5lwt.0tf4W{NKWya G>=bdi6Co^7|_v8cKpd;&7N5d|y)o(ULvAx~' );
define( 'LOGGED_IN_KEY',    '4g.n26y XPjyytmMcYKD;t9V?{pGw|2n0]q:n>?4Qepui./[*}T%:-N~mCoy_$oi' );
define( 'NONCE_KEY',        '~F]Wr%Rtr}/nj/{c]DFOiLu)Tzt+2s_GFWvxKDq/dvb%zw6mMSIA)~2h81~~e}s1' );
define( 'AUTH_SALT',        '4-c6S*k)D~f)0YVVG6Hfb,:x0n&iclTs:|t{NO$(!`8m:_:>t+6>OW[Ax6S;&u*!' );
define( 'SECURE_AUTH_SALT', 'XyMcA#VTZo=O5 vlQWAff|TdKT]c#/;G/rQEl uFSteuF/@CqS?[d:<76)]DUFs!' );
define( 'LOGGED_IN_SALT',   'RuG[9Tm?GGp[+kOQJ)qkMa7UkNE({quaw+ hQM2q3,:G~6gZ])~LVVIU$LPM[TWn' );
define( 'NONCE_SALT',       'w+:Pj}+Is_iK`P]R &.s$tpL4c?mV>LoQ~&iQSlmp9,.2|ud<DyPWSisJ+?e!oKr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_gatsby';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
