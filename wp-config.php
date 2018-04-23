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
define('DB_NAME', 'fbhomes');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'u>2i%xRd@nBL}H4dV$M+byA?/fJ, &6G^.6mT)daqb1:MnQ<o[/;`2|(Z>X&X `7');
define('SECURE_AUTH_KEY',  'nag{?yxB$lMIt}=F(WUy.2uM.nc_R$*uJj,^,FmYEGA67MgW*z*tFGt}0Cq(@e&p');
define('LOGGED_IN_KEY',    'yT?q,Wz%+20K!|t<zpNd*y4u:g@&dNUI0Uv=0D]ZU3cI=4O{/`<D^x-{Sn?62oYN');
define('NONCE_KEY',        'ZH~L+`=M{lOFM^ul$DWRV-4=k.KJDE(k,_00ou>ZhTes`05kKuc^<t0aSQQ8xT:(');
define('AUTH_SALT',        '-VVE)I|yaavg.Z@!{<B9F:KytC%~WREDD|v}|EGqmlShJWSIY8/v?/<sja4~=VuL');
define('SECURE_AUTH_SALT', 'l/%`CM;I/(>bjVPtSuG]}c%nN`85gVB)iKVtxLiN5<C AT6t`%N&sM20`kMYD#{-');
define('LOGGED_IN_SALT',   'J%cp#3SCY{UATQqh,TO-%)vLy-dV%[!hUU x5/bedt^ai-xZ_s3s3EREpm k!d5E');
define('NONCE_SALT',       '/ 247S4x~oaqVS~KEtB4Xz?(M+f3xX ! tbN~YcBB}%AWJB<p*OI.>#6MrMrygfs');

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
