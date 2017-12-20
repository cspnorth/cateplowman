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
define('DB_NAME', 'cateplowman');

/** MySQL database username */
define('DB_USER', 'cateplowman');

/** MySQL database password */
define('DB_PASSWORD', 'C1ate@Rogue');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.}N7d]@)^^|Vqh`BykVLuuH@Ar[gG|4+c4bPcJwZ7!,+q&)CSIq5#p4_?D8+8uY_');
define('SECURE_AUTH_KEY',  'G2#T1|F1UeMpNYGkR5: BJs;9HKd2}A(Z@<8}ej#;Vb8IxeNAGLBsL|:a^H=(Ht^');
define('LOGGED_IN_KEY',    '2A4T-B)miCtM?|ZnSYho8  aw/4=kki`oEC.O0e/ k2p_Y&|thb4UaeH)1Z3Jn +');
define('NONCE_KEY',        '=1T~;#b~>+A0`|vn{X?7l}4u7b]fd5DD?lAq=]DUv}SzB+-{a8@sG)7>Fb{Viz6U');
define('AUTH_SALT',        'uhsZ()G*wa&)uEwm]~cs[W9n>MQoBAL=#OWT0%?8ywi-sc9YaWN:pN=TC`U^q!Sb');
define('SECURE_AUTH_SALT', 'dST~1^J&]fH^N4:nL^_zqt^qEw-/ISFS%`1sM6&PF2W )9(Q;r(kS HU}4&~tM=S');
define('LOGGED_IN_SALT',   '-rKa`ID=0H}ux!,zV{sn-V^R64f2uC>;$:36$XgWkG9Lne!<CG?p`&]tw:U1;cz2');
define('NONCE_SALT',       'tZUOnDq!A3,amLHiAiaEAD#:MhE_:N,U6O$H_A9Tl6aB%Cp^&h{CCQ$VF/cO8]@a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
