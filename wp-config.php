<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 * test
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
define( 'DB_NAME', 'project4' );

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
define( 'AUTH_KEY',         '|G6 GWMKCfDe0vfb=r6c/]KtTw^.44@XKmC>bm0;0b~rq0V7xT6ptZK|MNskBynw' );
define( 'SECURE_AUTH_KEY',  'GC-7K&q)zlZXE)MyhU,QBmq+-X>BVO3W|u=p;#Nyob.69x8p ~H;1.#U#9+Xg7S.' );
define( 'LOGGED_IN_KEY',    'u=8/(zUTWV<::6(=goPD-[ Nm7Zs}!mc i;KQoWK-O0Ve~9=87Bp{EA)XJ`%1N8n' );
define( 'NONCE_KEY',        'bpBAEb!%+zb.G&(m}Uo[m%32aIl/ +i_y@Fzp_C!i.ul$ ,E`r(Lsf@kfwKD+A{|' );
define( 'AUTH_SALT',        '/>g;Hs}8W&zz_$?H&VOZ/|xRn[=,@L&oFqC}`cs.uQQ}X30]U%U`5@CKa ]u0#?8' );
define( 'SECURE_AUTH_SALT', 'JdQ f*^c<1_=AYHuZ+eW{LYF_q(WcFY8-Ir}Vp@z7k>_8t9cB%q9jkwQETDfdM2L' );
define( 'LOGGED_IN_SALT',   'o3DFhTp/d^1hSH^,uBEW@ %@Ff$ &H9fGE*F<fd$XmM5^^O&]mqJ|z$1%DiCP`L_' );
define( 'NONCE_SALT',       '6|v^Yj<D3DU4M&|e5A7h:XBHYT4 26}:CX]Ig*:fNx(_+cDi&_3My^/.mzm}4Ac%' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
