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
define( 'DB_NAME', 'hogaraldia' );

/** MySQL database username */
define( 'DB_USER', 'luiseliberal' );

/** MySQL database password */
define( 'DB_PASSWORD', 's1zha8to' );

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
define( 'AUTH_KEY',         'bxKX`sl@[hg$,Cpf,@`,<JQ@uNuKXd:_-&DE%6dkCxSXHKL4WAxi-b[FHH*zJm`h' );
define( 'SECURE_AUTH_KEY',  '6d/hBMsG:a>_okuaZWI1pQN|qeONBxa-IMSk.5GQHS(HUai<HZY N<Bw,t0v|}!X' );
define( 'LOGGED_IN_KEY',    '^P/O>m32/i0V6.]pS&63{f%pAmToJCA^?S)wYrV+egzexfG59Ly9YV TCZMKbZR7' );
define( 'NONCE_KEY',        'lhuIz.JG]>]E!dWv$G,ZBDwwL|s:@}9M~4Pj3L`r{3LROi6]:b~oyyezwe9mp6HD' );
define( 'AUTH_SALT',        'd:h)}K&SN[zC&B[S=;j{/`+*e6t{Yg,>cHMfh>o^M}0EvwQ/4=Gc<_%JjwsFOl.p' );
define( 'SECURE_AUTH_SALT', 'i[&cVpc-Ev[r4Xa:k_|N%J%zv18O6D&/_uE7|Zx5wRRaF(g|ZKuSzl4*|J<w>G;+' );
define( 'LOGGED_IN_SALT',   '*QkJ.hC6rY,}HTGJ-<Hsl$cbCKI/Ut6-22/BjL1wwU@QeXn;0=fbO5%,C<m%F1$S' );
define( 'NONCE_SALT',       '4Y$K!Tlq&RR*r76~@~RSPxFsX2.-M[kIPt[O1(J*wG<M-RP?#n&T gb#2H]5>e7{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hd_';

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
