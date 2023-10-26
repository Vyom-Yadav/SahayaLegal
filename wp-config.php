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
define( 'DB_NAME', 'u887026317_sahayalegal' );

/** MySQL database username */
define( 'DB_USER', 'u887026317_sahayalegal' );

/** MySQL database password */
define( 'DB_PASSWORD', 'v+4VVUDE[40Q' );

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
define( 'AUTH_KEY',         '!0Ss{ukd~w(]WcNItS4!wFSb`7v:yw7;z>34b<*1aE-v$MK:P%REf+5NxjTVeU4)' );
define( 'SECURE_AUTH_KEY',  'BMR,1}p#B]<Rw.q[|FQ*1Yo,X(o^nd4BB~Y2k#_KIH<DD 9sw?@%>Zl[DcFS7=y,' );
define( 'LOGGED_IN_KEY',    '8%[_PpA%>fC3DyVju5q$<#*W&tfVj+z}VwE1F@Ya|-5tT6.Od-s4M[Sok(-Nc]9o' );
define( 'NONCE_KEY',        'jMk)=Dv=X/LNK:hgzpudODdxEXv~|@8l3m.CS@]>sv2Yv.cy6C.#WQ.b{lQb,$<;' );
define( 'AUTH_SALT',        'iMaauycD9=+{jG4pV(1e=9-W^Yi)-b8,2Vx^{,%!<[`uA6Ptr[M@8b2K)&rk9v&?' );
define( 'SECURE_AUTH_SALT', '<!*.V5Rh4wn~73G1:p]oT*Ey*3+=<Uwm&hP][i0qvYC{4RG/xu}V7-:W(28Hnotf' );
define( 'LOGGED_IN_SALT',   'rhb}vXwYFhK8:1<EKW(|=y(/(!Oj_T9$bC8KO6_)veFF3-J;:e}-B=h:SKSsncKU' );
define( 'NONCE_SALT',       ':&|6=K1iov}F7{rWa;hfG k{@d=.rz=^*AxbH3F-c]73HO{z5C7siQJEWflR8RUD' );

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
