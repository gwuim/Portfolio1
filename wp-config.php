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
define( 'DB_NAME', 'portfolio1_db' );

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
define( 'AUTH_KEY',         'Lm}w2YpjwjvD-!Le&UqeU+h/zEF4WVYe;B@ti[$2m/*eO&ze^qiG?pb,!I a}1#<' );
define( 'SECURE_AUTH_KEY',  'tHL2$+WS3/h#i{yePt:BqaHhU`r7pU9hpaRrnoQ8wGGnIHX:iF]c}3u=dW@V#;]b' );
define( 'LOGGED_IN_KEY',    'g8roCRIi5WjV|ICZ!BO%:?T8-r a]G]6OZ6EA_bu2Qo7F:uXKdJN-m[o.yqQ(,2[' );
define( 'NONCE_KEY',        'G;HHAC!w78aF.Pga{D@8e-E~`TH#d()MxdfVC.[G5n|?x4zRWxnc/f~dVX8J5:mV' );
define( 'AUTH_SALT',        'hvL8V@*YgD/N_kOuh}Rq(,maz7.K5o-@n8k]z^nn:U]_C0c;U8{~_)>q%WMWxp:=' );
define( 'SECURE_AUTH_SALT', 'XFK_p4F*?<7OD{hD4~$?W:uJW|](>,yO;%^BT^w|/;_Rt*37c4V8%vIkcH @>E?A' );
define( 'LOGGED_IN_SALT',   '@i,?Y{@~Eheu5UrD?:CboWg#J}[*D&DSu?QCK=f:ypc&5WzAPu:rSrMJf#/TOd~%' );
define( 'NONCE_SALT',       '0>p3b`S%=c0J~GFw(T,gxHpRySk-`t1>@:E-*o9IDI*d%Xs*s=$f%%]Vo_|p0.fb' );

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
