<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u546700959_0ETg2' );
/** MySQL database username */
define( 'DB_USER', 'u546700959_sfJeK' );
/** MySQL database password */
define( 'DB_PASSWORD', 'FH6AtGjuHO' );
/** MySQL hostname */
define( 'DB_HOST', 'mysql' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'S:l@/T`w<25hZ-x1CvZ c HPaJFZR[~Wdl4~5qe5jsIMtT#,7)VdKkQlpx!bh/Ll' );
define( 'SECURE_AUTH_KEY',   '2HJ3p<4]`6$xCoxiXb3a8~cm 9-~iD$JrkyFtO$XP8acyc3t$Y?5`6-8Gr&P J{]' );
define( 'LOGGED_IN_KEY',     '9~~F{`|?FSYU}l6}W{; bkzTl<[_=gUYmGg#SQN{]XSb3>{bNkJ9aZW}]uuhyro3' );
define( 'NONCE_KEY',         '>_ OfB{Ath(!GnPG1tC6?b5,]J=1rRE_NIvb~MPznP(/E,m-<@^a$2#+/WE$e&J^' );
define( 'AUTH_SALT',         'tq,S}SX~Y],#yHz@5UHK^d:C/vaB#Ak#Mxw$!vS$US*=34-&![9_C7{)iM]RLSJ]' );
define( 'SECURE_AUTH_SALT',  'jmb#nO}/+G>wZ%QG9jx$@G3uAol,p O/VIr>aMt&Jk?*Ijipxoi)C>mQ:0A=0qk`' );
define( 'LOGGED_IN_SALT',    'Mv&xZieSeN1)nlhr1H~ ?JqJ36c`Pg;?y1iB]lt,Qmfc72^qqD-tF@Wbc3ka$]RJ' );
define( 'NONCE_SALT',        '!T9x)-[AcL|v[m2;Go$#UYu>s-}OhEbr1nUXYH@PhPdTtL0?j=e>4uzuCl&n9qi:' );
define( 'WP_CACHE_KEY_SALT', 'YO-Jt?gR#U$u][TBw1xGB!2vGk#15NvwEPH>d7D)c5UK{}_rJo5yya-5 8$pkS%a' );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
