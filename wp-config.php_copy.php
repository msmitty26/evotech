<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'evotech');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Jtmb^c]eQA[|$T-)r6.o+SrF^Wa|PGE/L ili6kK&l>+|JMKR+FihT5~?saD~*b:');
define('SECURE_AUTH_KEY',  '!~`KWU@{3@3WoOSgZ:O2DfF~Ex4F(WMzh&i5k1DaVMsQHJYSltNljSI+u5g1d4xl');
define('LOGGED_IN_KEY',    'y_0eBY#!|y|[-3GG-X)Ig2,AW`0F`S?h@Q;Jt=raL`Q9<*A6)mfHnJaTV8vXXna=');
define('NONCE_KEY',        'TR*K`>;2W^MziMO0iv*Cn]{ytX 827n9hKmOP({8-|@7(+=S,}m`k=5/!P]+-|+J');
define('AUTH_SALT',        '<Pk-`-q2rG0AE;t#jMJEF-0BP4A!+(sNin>$>6`:DFc>sQrGae6c~wN]bLiPpbrS');
define('SECURE_AUTH_SALT', 'UQ+<6AzJo3^!S+Df~:~6K*k!/tgh{Tj%M{<y}++ei@PpH-5xV8dYy-N.UoZrJ3H+');
define('LOGGED_IN_SALT',   'adD/pa>w^jPM_&+]/dB}XMCe3-~fGNd.gE]64:I{TFJ^L8#v[0g |PseiC-n3)h1');
define('NONCE_SALT',       'Ib4swx)L9{pfM^Z^tqW..M#YWK}xJyO?cHQUd/Dj.M-(MEaU2q[{c}Qr#|r~D@;6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
