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
define( 'DB_NAME', 'Planty2' );

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
define( 'AUTH_KEY',         'sk|[6Y4y/NxJNJ`rg*}giZ#_LGs6Ru/{^# hc,B~{#c|nzGR<bAk]94W`0s!*81q' );
define( 'SECURE_AUTH_KEY',  'B.$MZgU?ZOIQgNxahHW,g#Q&p>D[K&fW4H4tj1+v&jsam7O)L}(=35W?irkv=P09' );
define( 'LOGGED_IN_KEY',    ':YW0ZS_p^)Q2BaMG>4Q~GlGP`<A1aN2yMyNtD_v-BPi{U-^E4N y%,.jqdv gQq$' );
define( 'NONCE_KEY',        '0x;/?:W>:@Q#D1_9yUH?iM+F(5ou}@A-A^ltLurLVuFoD/:VRS]?2kdlauoj89F_' );
define( 'AUTH_SALT',        '<n<mNJ)l|z%pC>o6LKpe(]D7Uu=bsB)daDfX=oBZeH]cE;V.lrm5?jYy#_:I-J2n' );
define( 'SECURE_AUTH_SALT', 'CtRfCp8 KhV0pEe>V_mwtQm5Pq8LHh;F$~bRETK4.%Ve7?ORm!(7@KiBm2>b&sr*' );
define( 'LOGGED_IN_SALT',   'dHc`A)`rP~uncxBVCPN[d{7b^OXQx>>Xq4;#n#x#!g65X,%oGc>PM$AamW`~8E5m' );
define( 'NONCE_SALT',       'P ]iA[ig`3V&O}&l*1btlQg[a=?dW)O_#g@5~LRDul`w}2f]NDX)EOp8NkxF.]wJ' );

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
