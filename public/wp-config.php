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

// ** MySQL settings ** //
if(file_exists(dirname(__FILE__) . '/local.php')){
	// Local database settings
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
}else{
	// Live database settings
	define( 'DB_NAME', 'aboozarm_universitydata' );
	define( 'DB_USER', 'aboozarm_wp638' );
	define( 'DB_PASSWORD', 'aboozarmojdeh1234!!!' );
	define( 'DB_HOST', 'localhost' );
}



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
define('AUTH_KEY',         'ujl/Te8e>c7bOwbZN7D+Dh!ju}i??lfUzTPCqw0+:eq[|oMPh2ky5=>DOGxckUmQ');
define('SECURE_AUTH_KEY',  '%m24fuxVi5r#SZCK=}g;q00C(~|>S|GdGrW~exhYmIyv-FPRjh4UTM-+Uhx|S!f!');
define('LOGGED_IN_KEY',    '(H{-F.2nzmUf-20d3WM]v@k/-$2QP iz`X*c$~pxcS+(*nEOJ5w1iHRz2w{^nX9H');
define('NONCE_KEY',        '$C4- vp-<Li4%+[G/&K_RhNA)T@7DQA{k>/0o.N[w,4X!cO&Oicq^~+7!8GL+9`[');
define('AUTH_SALT',        'hw+[Cu}:Sw2Wn+1dbQFz:+y^qXlw,,[k`aF7A1@?0Mb(p{oOXW5@,[%=j:=-k+XT');
define('SECURE_AUTH_SALT', 'cDaiNv%Zt7Aj>eEm!]I%n%*J!nD-]v|)$!#n9#;CmDBA+8Q|$$gtKuerfWRr:5:1');
define('LOGGED_IN_SALT',   '/@<MJ@%fv+ 8oon|&:P-MxQgx:V,|sQ?4i<W#a$q?_:^[<^N!2.|:j:^T*@c&G;j');
define('NONCE_SALT',       ')@[AoX,lp!S-&IA+00LFT`:fG8FE,.74T.Ah(}ilP>M6Jnn.4/8|@EcOz4dyEq!k');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
