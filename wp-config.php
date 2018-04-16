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
define('DB_NAME', 'bondasro_filiptest');

/** MySQL database username */
define('DB_USER', 'bondasro_filipte');

/** MySQL database password */
define('DB_PASSWORD', 'W~~sLoUBDa)7');

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
define('AUTH_KEY',         'Lwl$ H~~WJ,5J>Wp1}Ct>cX>;#,c+y3$?3DrI&^@,^QL)ze.@*9yw|ML/v,9sU$k');
define('SECURE_AUTH_KEY',  '4%qc|JhVn6Qle8n`D1C[ErfVh_p& ??0=<tY}][/qj+.$~5dP}nnHXlj%w,>|6`c');
define('LOGGED_IN_KEY',    'kwXE4u>09/s*8bthR]5ZgY48OF`^sI9/N4 E):4^P!zKvfFE;/&l:MK6.AUD)y.H');
define('NONCE_KEY',        ';1o=.&`> j.?Dk y]>K6t.Hc_^ZKPIVXT=z~zv z=_^)+D%$ 1fBc^9fS#2ebg!g');
define('AUTH_SALT',        '/4<_T/uL,sB#jwG!XJDA}T>kijvod u}Kw~_ ZF$MBY`0t~+p2);Nnl#UeQbI_y^');
define('SECURE_AUTH_SALT', '**nd#ht4U41^S500,Y4Y.AVLNo@Yx8Gm8Xn%HW*geX2Rr-%$E{(v8RNm49?|,*N(');
define('LOGGED_IN_SALT',   'Y9/k >28DZ>o~1>cxI8xs[/vb`!~H%t=yA[W=*O{<.1C$F}Z]D4_>]nr}m(qk%uM');
define('NONCE_SALT',       'A;Bb^?(.SF`K|U_l:V$zSc,rWNP$ekq*M{~ g!kmN4{SzXL,oAgE8S;@1W3s|Gi1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ft_';

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
 
define( 'WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
