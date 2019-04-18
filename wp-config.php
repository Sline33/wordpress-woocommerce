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
define( 'DB_NAME', 'wpprojectasso' );

/** MySQL database username */
define( 'DB_USER', 'sline' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Centime33127$' );

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
define( 'AUTH_KEY',         '!(^fqT_3MJP][XDo:[OIB@{/|#MS[_@h~Sb;kux;2IlObi>2]{L/2sBw%/~@4huY' );
define( 'SECURE_AUTH_KEY',  '<Le)6>DLN4fC{ZD4[,#mmJh#D,W2KFaBIT:a8IK&}A!XThQb<dnTBXn/R0I)Z[`*' );
define( 'LOGGED_IN_KEY',    'E#kqSkp~Ov#x_#y>{u/-7~^!U?y4 YL?C9*q5/mc=BCefh+MmDbE+PzG!aUW!#;E' );
define( 'NONCE_KEY',        'dE#s7C_TXj}I;?Kp3`0N/|8A<Hg(x^]MzB^;nt@a?sG*Cp;<ek<a,A$R5a4Rv:NF' );
define( 'AUTH_SALT',        'C%:Z!<DkGK${pD;1R(&?omZ###mesKsOH^_6w=?qB8Q{c}.p+9I@]9JaK=9z?I0;' );
define( 'SECURE_AUTH_SALT', 'NGz3G>Eq11tx7/2IhblGN5j/S sx_v^7I2 apnw>k3A?Ij!7FhXwWp~UihAIf 5b' );
define( 'LOGGED_IN_SALT',   'C+*=FYT#s-K8 iJR6O$G[jQP!BWHKwT?x8|<j,EZIj6kHVU<o|t(x=,)b%hj6IsK' );
define( 'NONCE_SALT',       'G!5~85=&JU<e-e*10%;90^XSDVO3{a#`cq~<s8*){G}I,1dqd9n=PB=!dMd4(_J=' );

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
/** Mettre à jour en Local IMPORTANT */
define('FS_METHOD', 'direct');