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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'apsaraportfolio_db' );

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
define( 'AUTH_KEY',         'E9/]ZFu=CW4=p_6z`bt:SfJC6NtS>,(X8P9%!&;~~_nmzJ+j$qa [X3d0F]w;hx=' );
define( 'SECURE_AUTH_KEY',  'zVf,{/Pyt~HaG)%H,B)2lRAi&XBq4q=iALqt4.%7HePtJJDg~r+ZiXNh)sSwKT;R' );
define( 'LOGGED_IN_KEY',    '=37F^B]${1lyQIQB.N4sP3tr-jb[)1KJV<Ajv9yX-(,?T*{Xf5dodyn`xDOO,4MD' );
define( 'NONCE_KEY',        'sU.GU7jH_]-A?.$Pj5O:M/]OQ4?#Z~2PDk-{:2M53XMo|XUZY=SEnOsrnZ`aUsZ ' );
define( 'AUTH_SALT',        'E=$XA7NFkw}wlgkJ*a7{uC!hy-~P[htz}&%Ec!M>H_nk1D&d3DDiBhQ<DNT/Sr+*' );
define( 'SECURE_AUTH_SALT', 'DbGw0AY+/ee?v]cIwDGWjbzaq|1lldN-od]9%mw4Q-8k8O7lu{(&JjfY,ZWny4,N' );
define( 'LOGGED_IN_SALT',   'NRvl{6:dNv+5yt|b`v&2&M?-3$`]v3(SWiXozIb;D< gCIa$z1an T9Ri(RrmJQm' );
define( 'NONCE_SALT',       '# <TH&9]sZ(W6%Hlh(U9[)`81AT(.X}P+m8z|=uZk.H.>m=)cEb9KfP49}iicK5W' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
