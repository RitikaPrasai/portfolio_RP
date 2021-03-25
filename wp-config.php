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
define( 'DB_NAME', 'ritikaprasai_db' );

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
define( 'AUTH_KEY',         '^m|!sV>(y@;XjXmy;(J7nl*=Qp4 X&}hR]};RQN.)fFI q?r}KKjDGc@lOroTpF3' );
define( 'SECURE_AUTH_KEY',  'c1(.;U*.JLXfAlsOmfD}stM3uOpK?0%dp+({m%dG:M6r4CH#e W3ds2M[4,BL[,t' );
define( 'LOGGED_IN_KEY',    'pcCA7h_MSJYat<$Jqxr$lSmOlDvF|d2F8Cz%naiA8:5YRw0f-)Ot1R]kvtm  xF ' );
define( 'NONCE_KEY',        '*IgP?z`~CSWCIv&S]2&P2wv>hH-bWGBI?k]+i?O9 gi_I. s15:Gjb>Nu3dZLw:>' );
define( 'AUTH_SALT',        'Xk}*{E= Mm~1CdRq8;e>wo,-]$>n8Oe{g-jdoYUHC(jad/kg/{v(P8{Oik+ve[9U' );
define( 'SECURE_AUTH_SALT', '*$NKtT@(3L%f uv4urS)0YKU[}1uq|JjQn|w3H:]em{?mX8=(1Y[oj<IpA|l3_>[' );
define( 'LOGGED_IN_SALT',   'F%XN%g9tfH]?9&6p57zqX(=LJM4Q?Q8HO}]g?Fi$a_||dPRyd!@ZW1vOR|+O[LiH' );
define( 'NONCE_SALT',       '/l9n|.5GJ7vck6< M nvQMbim:z2I1H`!fZL<bdEuZYKyu$HJ`m.:Fpn6%at?}OI' );

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
