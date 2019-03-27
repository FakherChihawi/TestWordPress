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
define( 'DB_NAME', 'testwordpress' );

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
define( 'AUTH_KEY',         '&0Ho,B/6K;227.dpi?3^W_qa2D@tmh}DXhi^,;-wHP!}k*616sQB@%7KR~|bkzHo' );
define( 'SECURE_AUTH_KEY',  'PDENUFb*]d_:EMIg9C[X;b)w+F%FRNSvx2d&&{DOZHXDwDS_| ca0cb6dzXlgIw8' );
define( 'LOGGED_IN_KEY',    'R /{4kI?mI,WZH+>::fr0<gA^bxJB|riC<Y|hgV?T_5iLED;K(At5VzjPZ)?8@u;' );
define( 'NONCE_KEY',        '4kz+:B5`5VGnhFZ1Acm9O5!coqtlN9r0nh1@+rpRPGK/$zH1|mRfq=mh+>l*nEA9' );
define( 'AUTH_SALT',        'KAA]cy,vPtskrQGP5u e[g_$a<yPL*4%Hy&gyeQuC%8=vn#M.2(8Wkh`u4igCYqK' );
define( 'SECURE_AUTH_SALT', '}oZumBLMM3]@10O~+$T_M$nq%nN=8,ccKFM<6M-{uEpU{m_5fZNpS(n!Qdrx>ahA' );
define( 'LOGGED_IN_SALT',   '7A_<#OQrEOcFLwZk%XX8Y/~>|^(gBboPbsMHt_{Y-$.q&3P2RBA9~izP}gT*8|J2' );
define( 'NONCE_SALT',       'jU>vt%-gfie,9$  |#pvtT(%JzUd~}i1-..i5a_s0z5]wSr]t5x?FLL33ZsUfze?' );

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
