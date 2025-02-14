<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */
define( 'FS_METHOD', 'direct');

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gymfitness' );

/** Database username */
define( 'DB_USER', 'gymfitness' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'AE8Xw]UM7At{DxLlF2aS2jkKgIU&[TSZgqVb_TU+4XAXHeGSYE#__~Q_[l?Z(_a[' );
define( 'SECURE_AUTH_KEY',  '9E_Rau9MxsN9{xji56h;u lW=.j&oLT=-l- Rgp&3<gb:S=NMRnWFdp9{x4Lx@ar' );
define( 'LOGGED_IN_KEY',    '!8y{YcH$(?LxL1,uIQ^>qo$9epa?Q/}!6+s&H}ML3K_`NjX;:spDQ;#}yCE+yqdi' );
define( 'NONCE_KEY',        'ZI_> GjUS=R_~v{kOLRwz6|~4Y1),1=D}=ErE7??FEZcRfG{z`qV[5x>@HHL3Stj' );
define( 'AUTH_SALT',        '16D)9N}YCx6l5-I<zw.q#2J:H+9[D&jBDAN]*%iCg7ARfs&^&hDaC|B70J$,3itr' );
define( 'SECURE_AUTH_SALT', 'Cizafa1@|-Ail~cCxD=6E-}Q[dQ=|%x/epcN,/WcIz??WkKyRFb@C~vB)b+9KfO)' );
define( 'LOGGED_IN_SALT',   '} w!r+$#_jwuKgrPk7L*bcXiOch/6cV<f] }ja&sILO)LAeA9R3lGXn;+8haf8+r' );
define( 'NONCE_SALT',       '1rK<|I-R,tdk>ZS%KaTcDYe-]~[$G|Ldl~/cfh4^20r; tvQbvhV2mI;sG7;yd4/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
