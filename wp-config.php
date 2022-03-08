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
define( 'DB_NAME', 'lapizzeria_wp2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '_+Q]9~`+e JS:~9})<M10dGWr|}zh.8C1H^|#,hrkA%=3B`g#~SBfH;HtXs#4z(?' );
define( 'SECURE_AUTH_KEY',  '}(wCI0{ m!_%DJ5iRwY-%ivabBBT;CcEIm*I4B+H#=kc-d$,*:KAr}~[[$z#$c9/' );
define( 'LOGGED_IN_KEY',    ';Pa8GP>-00)Dkh9?2=>j[|GHwQ}z$g}Snw+ph~V|;V:B$a+B*q%al?q{KUk9kdl9' );
define( 'NONCE_KEY',        '#(UB12R x=#+:GTj$i`DBns[i>2]p-(LH0 }6cqZQ<LS9lFO9b3dL<_}$OVt)t;o' );
define( 'AUTH_SALT',        'hd{/5|FsTYk7XwVohR0j:bPRh`TW/D+}=F(@TslaF8l_Q/Vj_kxze,U.3Gq7_@|v' );
define( 'SECURE_AUTH_SALT', '?bbAArxxb/t5P>TT 77_YuscDDlD6kLffx<}<Uz$=+HcB:Wc=(8SRsbU9|ZJBAZI' );
define( 'LOGGED_IN_SALT',   '6e,XN 7NF.mt#yab3aoY@#3m&ALqR8hX3:Mmmr0Z?<XGG39D$Ape;3a6a&wI,_n?' );
define( 'NONCE_SALT',       '4]Yx[G 2D@vX1p_ kmpNM5rE(-SBhVl@KlsJ~52mdQj>|bW~vFdLDbS~f9@@p1(c' );

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
