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
define( 'DB_NAME', 'wpclidemo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '3!p}LNAI,EXT1G][5VQ$_p7)P5#Sd;M_*-Yn:d+o~reDD<>r9y5o3ikWY&n1l=}X' );
define( 'SECURE_AUTH_KEY',   '3oru~Wd=[Bmlgri:L/5 d{su| _{*PMg^Jjx>Nf?`?^B=)(?}Z2?k`K<$@T]!o]=' );
define( 'LOGGED_IN_KEY',     'zhQzVZ5<@AFBu!,N$(jre,mHS$/hwmdHr-,^u8Bh(|ml] 5[%0,C>a`DLX(z}Y$*' );
define( 'NONCE_KEY',         'wpPn,^0n*rh+|Z^5KWC11?w#8r[7>jhF}IvA1Gz1 =~(sS/-x;Hvpc~5I[oTHkB.' );
define( 'AUTH_SALT',         'GkIj}k-rY-y=HcS NG:Hm<FJe8qOyhlVp&Rj)~Dr>~?<|T-@9cC 94Hs/Cw.Fz?c' );
define( 'SECURE_AUTH_SALT',  'x-Gh_O%W? VeANYu;t56LOcb68$`sUZ {W-KB0%R;Xe@A.1;gRC]+*=pWo(G[m8v' );
define( 'LOGGED_IN_SALT',    'On{$0`M]i  /DbKqZy`{U:U||w8FhE@LmCbovjX$zpHLj@^d.iYPi(:2&3ZL,-<C' );
define( 'NONCE_SALT',        'sJ)I-pgr.Wn.~l7I8%&0(g!@y;l+EqCR9<UlVSsV0S~~+_rOGxT5GC%Uhk0x_gMC' );
define( 'WP_CACHE_KEY_SALT', 'm%Q{`~rx|]6T-=MYHV]}1%(w^[Bx,JE*XA{ZPUY2*-2^Tk&/ToUF*pI>YEuxVYW$' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
