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

// ** MySQL settings ** //
/** The name of the database for WordPress */

if(file_exists(dirname(__FILE__) . '/local.php')) {
  // local db settings
  define( 'DB_NAME', 'local' );
  define( 'DB_USER', 'root' );
  define( 'DB_PASSWORD', 'root' );
  define( 'DB_HOST', 'localhost' );
} else {
  // live db settings
  define( 'DB_NAME', 'jasontbr_fa8' );
  define( 'DB_USER', 'jasontbr_fa8' );
  define( 'DB_PASSWORD', '6FD3B20Cqc7fa9pl4h8r5z1' );
  define( 'DB_HOST', 'localhost' );
}


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
define( 'AUTH_KEY',          '>I97nTiY9*g:#@w-FStrCt1%b.*@9c|p1LjGR-9@%6+,@,Sh;%<H&xm,f%6Y1Ld)' );
define( 'SECURE_AUTH_KEY',   'T/G0X`rcvRc6TcDP;q i[keN3~xYX_ut=V;Tdd!)~A-1m&U)6(Q|TDA*46f|{nOo' );
define( 'LOGGED_IN_KEY',     '(XJ.RV%k{HiMP<?p79XP$k);d$cTJJUi_w]@F]ke%uV-15z(sLoV`wfr+e@g=TKu' );
define( 'NONCE_KEY',         'CKTyy)cJ{C.Yq}kLsde,7U_Ziv>&|%J]pB>6)24bgqRh1/]/E(N0QjDfEOp(.tC|' );
define( 'AUTH_SALT',         'yGs:7sH1ux~+,`!{q|/9 @@F^zi$L&6*PFCN}})%M8W6lD+EYLQ7UYa H]*?EmF6' );
define( 'SECURE_AUTH_SALT',  'ji5=pY(^S(_q581ul2k91I}XdNOv.ka!{hr`Savrctu<:;1z1.p`H*a[8RF7>d-4' );
define( 'LOGGED_IN_SALT',    'S.EWPhC#h:?FF.,SsUSEmMH.tle:EEVh[Vn;Wa&nO]fs,$Q;!VFoV<X^Z3=)=zD%' );
define( 'NONCE_SALT',        'twA(>Kyn _/xjLog<@VdUW}yf3ufdJpt:H,q8Kv@94]:(lxYYZ<%=e^ea!Q<j-]b' );
define( 'WP_CACHE_KEY_SALT', 'rgzRu12#?[30/k(,#H xn!y$#*G==T3rj_:9oz+Hir1,jz/r53}.eo{iA J$g^0<' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
