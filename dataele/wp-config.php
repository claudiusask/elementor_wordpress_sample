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
define( 'DB_NAME', 'wordpress');

/** MySQL database username */
define( 'DB_USER', 'wordpress');

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define( 'DB_HOST', 'db:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
// Default keys that needed to be changed//
//////////////////////////////////////////
// define( 'AUTH_KEY',         '99a7ce41cbe397d6a3441db6f88195e9b32697aa');
// define( 'SECURE_AUTH_KEY',  'ff4e6b8089fef5d1207ee1ae06a09ca94dda1381');
// define( 'LOGGED_IN_KEY',    '6e3587ec58193730d1c993fc7ff10758d6892f1c');
// define( 'NONCE_KEY',        '157748cf41ba3f454af12df7a587caf8748f165f');
// define( 'AUTH_SALT',        '760cd306e97e5eb1775bccba4c55d4d4d0848cef');
// define( 'SECURE_AUTH_SALT', '89b34e74bd80e5a34f7cdebdc6fe211e7832a3e4');
// define( 'LOGGED_IN_SALT',   'a89ed9f49e594e31921f83ae98623d19bd452326');
// define( 'NONCE_SALT',       '7aee655a15ef1f497e64fddb0daab32928658e6c');
define('AUTH_KEY',         '$ho:rXq+gFHYQJAI+|8~*i0T8a-oq3@lJvJh^|V/-|DQG6-sk}@ i&t}y8PiO+|J');
define('SECURE_AUTH_KEY',  'b_`l#A!)l+(KNFOKy]Q0l_@^=]&uU!rMm+F9Y R:21|=Ctvr+_n=&LD8*;&wKR0M');
define('LOGGED_IN_KEY',    '2=Qs7tf|2tn9J`5QQQxX$Ym|V51MZ2ki}jfgYd~<M!oi-|*lFHSs#l*ppYfVk-(A');
define('NONCE_KEY',        '@X-A:<?J}m=(W|J/p Et}UKA^<9zh,. _1]wdq+vom}|1_oS9]Xu+yB24w1N=J]!');
define('AUTH_SALT',        '.E4$e@9$? 5M1=(rnFfSfq)bUG6kk5kL?]Uu?n~[sxVEaF=Tv5K6[UezA-bQr12m');
define('SECURE_AUTH_SALT', ']z+V*Lnn[Dc7*:M+XEZ#pX_#7R(Yblh>T}f#R&.>C_pt)8owQiS+eZV+fXE2_*F[');
define('LOGGED_IN_SALT',   '5fs+X&1?/G102@=X{H%xTG&8w>T&kbw60 d_LQ>~A+d)G-`67KBF|tjz-R}5kx.#');
define('NONCE_SALT',       's?,w&)9s1+GqSJqc._K}=& 6ilMdyz^:UPO}%Xt0S?7(=TMPY<.{oUR#`$<+Q=hl');

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

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
