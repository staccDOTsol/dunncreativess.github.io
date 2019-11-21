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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '.R}Hr6Jz~liQtJc%_4Olmgs[eWR VfFh$3Gs(3NuEWu8{m3IS75*M(;4(UC=rGAw' );
define( 'SECURE_AUTH_KEY',  '} vyo`M9FynILI#URlq,{|0ivulp;VZ[a#tpEBn!sV<SW%.%(}5MGLK~vEsvw.-5' );
define( 'LOGGED_IN_KEY',    '}331.!#c7r=7dGvS9_+u|rU/jzaCY%`Xb[C8`jQrU#>F9U_(4Fn[$^9s:Yf+KO3X' );
define( 'NONCE_KEY',        'o/Wff?v6o.MM~lTOh8!4!%`6vzk:#?cnu|g+`Xq<yzv8x~7SrrT8=,tYYRc$$@0E' );
define( 'AUTH_SALT',        'AM]uo4S?#{a1T+o=fgA@&ph-M8~v^x57BpC:A8CEW^Bo1Vz`t:%x=izq{]dKwad;' );
define( 'SECURE_AUTH_SALT', '<qAL5Irk*M?/-g}2yRGh7HgQ5$EpVuo,1B7y{OoX#%{R(zMN,6-`QA{*;S!yy{lg' );
define( 'LOGGED_IN_SALT',   'L?!4ww&,g8lqxkIT5FptYXWPDpEiYn,A0F*uSaMp(}?J`<IX@P+AI6UUtd|tLuGb' );
define( 'NONCE_SALT',       '~*w$Zz%?orJv(!f X%.K0*nmogzW6RrHEk2O<I9|q&,[DSmPy@oZY_cZwO6Ba`q!' );

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
