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
define( 'DB_NAME', /*DB_NAME*/ );
/** MySQL database username */
define( 'DB_USER', /*DB_USER*/ );
/** MySQL database password */
define( 'DB_PASSWORD', /*DB_PASSWORD*/ );
/** MySQL hostname */
define( 'DB_HOST', /*DB_URL*/ );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Trl8[ ! ]*r)9p~M+!5X6lW)hgB<*zY>t[+wsC* z_`tQqBE8+?RsgpZ$;-zrh5L' );
define( 'SECURE_AUTH_KEY',   '*PRf!}gww PDM;jC/ea=SwI`5^=a=@Lfk6I/i%i+FIz)l$^JSaHQ8]?{k(b#9n-8' );
define( 'LOGGED_IN_KEY',     'RPXKrc/YxnQo2Z,?CK|w2]h(;,j|6jePT9FOs?QP44sRtQ5m}^z-%Q5c]jc<*,J-' );
define( 'NONCE_KEY',         ';kz^0D<5`*{Nq#Z?@TM}|Jx!YISMgq}]L !-)k&j*zdVzQ+6H7=vaP3S-0:/Dpht' );
define( 'AUTH_SALT',         '*cV@WbLKP(PadaM8{5$>7k4Mp`_`SeR!#Xc^x-jjQ-*_3XFo(K,sM8^mtt?Ahye)' );
define( 'SECURE_AUTH_SALT',  'p_sZ5T5J8Q9,G-d8laL yH5C%+Z(7C)W>dQVJT<*fcfXt=,6%RM-iA9Kispr#U+(' );
define( 'LOGGED_IN_SALT',    'QN{2ztM7lokO?VJnmtbiGcHr7T,}c;PD~|p[-izVAe{y9xo;u;S2|Yh#7k88Xtlp' );
define( 'NONCE_SALT',        ';3=EmX3Vv(JNYxB}r)N>AF2Ur-UM.e,4Y(d]H=pbbTP=[{-<;qVB;;,Yo2]x%k(T' );
define( 'WP_CACHE_KEY_SALT', '=BDB0Wst4s-w#Wr2MB:T].Ha`Wlk:b@cJK*+fES4bn}}[,2#_+Y6qM$(j9o|=&%Z' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'SCRIPT_DEBUG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
