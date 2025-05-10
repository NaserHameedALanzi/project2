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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nasser' );

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
define( 'AUTH_KEY',         'i/@U?:GtHTUR(XPRKU/ s:bRY}#&>8<reM?Bc4#hL)7/pCZnU|Vr+;Re$cvu-e=3' );
define( 'SECURE_AUTH_KEY',  'Tvb|p|],`aEN*N_NXQ7oh5ftEf(ZwL33tXjb0{k_jn$_IYx.wV?d0qin#bAj]#%^' );
define( 'LOGGED_IN_KEY',    '0[t~?qwi!OhlLZFDP)&z`djnqB&?0+YsbWb&s6Z<N1OHjJR*X*Tr/V[@ba<-W4ms' );
define( 'NONCE_KEY',        'B#Fbx}1Q+I?6d/wYA(fz0qPq6fA4YTe|.|Tc8H9D;^,lxi]LKsNJ_gSDi@Fb&=wN' );
define( 'AUTH_SALT',        '!y+X]59`!^r1h3kqf@>VWAI0hM6ODfP#_D[01bmuDHi50Qy]I&6]_]KI3&H6_su0' );
define( 'SECURE_AUTH_SALT', 'wd={PZbMt8=Yk12|c daNu0RR6<As#/gXzT>L;K5jG|G6_IPnJ`w?[~O*KJ}&/+{' );
define( 'LOGGED_IN_SALT',   '[dqn`{km#W3<9p1BQ{6gNJ5Yxdc~&Mt7K*/H9WYUk!ewYY9.LXQ!cJ;`!`rCqp,A' );
define( 'NONCE_SALT',       ':&;W([eY1RHuFx}kAX`-So41%Kn|se^8l9+>g%yYF`S*XCbQ_j%sZt)e,Qv}_h(+' );

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
