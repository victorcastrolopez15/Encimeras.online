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
define( 'DB_NAME', 'encimeras' );

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
define( 'AUTH_KEY',         '=xyS8d!,CSVwr;y+Y8q{vsEktd=]/y>1:3W6yb:n$Rct]P55`&0dGF&HioJu(hb.' );
define( 'SECURE_AUTH_KEY',  'Q$n(jFMh-qfzSTpu+irkc}N k%07|[swsXGmX,(;xIZikMh%@3f)a3Z2? ?|A(FJ' );
define( 'LOGGED_IN_KEY',    'C^`?9-}szzOpTpo@Lb[oG4!f]6s;)zI8>npU)aNF{:uj=KsA0n1]/r(e=5ZTfz>@' );
define( 'NONCE_KEY',        '.1kfTNoMLE{6;XzZz{U$n$*Ui6)X%^KcouhZSU&%ePK}A#C.Dw_tRc5UX%={Koq7' );
define( 'AUTH_SALT',        'N`n/OA>?d+x Lj6FnPK$|+0#Z*5~Z>OR+dPys7{D@8vCc[vQd9QFhifn^<:MG8~m' );
define( 'SECURE_AUTH_SALT', 'yRk,iygk|n>9^Av`BI&|eb lcu<ke8-m/vCbg8xURhTz1{T:Qum*7!PGO.a5_{(/' );
define( 'LOGGED_IN_SALT',   '7rd7yi:`n+Yw xxE^fYFMOS3$SZ_Q<mx1ahq[+/k.=l6{&yJl,2w-kb~9hL6ZXk@' );
define( 'NONCE_SALT',       'E)q~V,D-b!%+:Cj/{I5,!i# HKBbEmTluKc X+F[pfz5pMBOwpN/(PZBw1x&pYID' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pw_';

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
