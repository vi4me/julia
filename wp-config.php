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
define( 'DB_NAME', 'new2' );

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
define( 'AUTH_KEY',         'T_;016cGsx@$|4KJ3L.#/WO-uG=faTRgD1O8hM*Ys% 61=&r@Net}KMC!n8VC;(r' );
define( 'SECURE_AUTH_KEY',  'p:xz-Mv.ro#b#Nd3vpTFOaq]8X!P&:c-1Nx+V[(!j60[zi-9lN-&g#?<JcYZt;Tq' );
define( 'LOGGED_IN_KEY',    ')hh<CgK0N%B!)/Dt+b}Wb]W]V$MH;bvpm,WdN?0:5<LJ@!@TZnAk9Q#S#{^de9-g' );
define( 'NONCE_KEY',        'uCD_k({3F48sY@g8*Ilm5vG;J %rg^l*YPZH]^Yt)X9a |3hP1`g&*i}uFU]4h1*' );
define( 'AUTH_SALT',        'U3~{hJ?B~B {F0#C~mI_?w}WdEV>Qd&&#hTQi`LO*LCcxP/Tkie&H.%Dw,KC2lX>' );
define( 'SECURE_AUTH_SALT', '<iY7tv1f<]X^ Tn2P4#<+tx+LJ;vKQAY1|6*aU&q|y/Eu2Hc7eZ1a/0`6RuB_Wen' );
define( 'LOGGED_IN_SALT',   'eM|p~+])`|RQ<jykg-0iwr4jaUW{rG/P^zD!Mp|xU0cadc]_V_@0CdWPF~0YL*nD' );
define( 'NONCE_SALT',       'gB`,t+]rRCM`z1gZF)i#$_9D)Y4mg{`d-QVf24v[jxgHD`(u%RLFq@rtXd0?[*-!' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

