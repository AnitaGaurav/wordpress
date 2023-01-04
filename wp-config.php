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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'H}gI>+cG@S<=KAHTuNiw5m8iY<fBK#if]oc!f_1 }t/ s26v>ly55?~Tdby{c<%W' );
define( 'SECURE_AUTH_KEY',  '53v@#c/hCpzNQ| +0!/O)?D|gV&DxemP9nw#3aQ[.nW7=Zx6PdXMbwmu85PD5k$`' );
define( 'LOGGED_IN_KEY',    'nUoB[)~(xx)`FJ@4y6Dm]<!ek[g@Tvs^,P?T;B#aQ6K{*D=Y& R&k=XRw  c Xys' );
define( 'NONCE_KEY',        'x8qsoY>~@IG@LjnGYN@[]B1@3oJJz)h_yx}H|NSLtug7W<@Pa0NJKsAGlN80]oEQ' );
define( 'AUTH_SALT',        'L@FQO[>!`p?nj-W,k6[584j,*Ug+JVa{{^|#15ituds>|:-&? B_(+jtqt}{qjMv' );
define( 'SECURE_AUTH_SALT', 't_1Smk_M+`L2R_.fC-/UyNc4wAC2py{{rLH+#ATQ:gXM;}V,kxxR(V04$i+~Bic!' );
define( 'LOGGED_IN_SALT',   'n|6!-A;M8KP{XpmrCH)6~inWeev+:|q4vF>%!#vE${i:6kUSBtRDR_ss:O=_tCz0' );
define( 'NONCE_SALT',       'PX<32tid4g<4+>Euf)8GW$Kp`f`c,WYuc{Ha&9J6;+J^Oog$VP4&j1y`I_7PqIog' );

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
