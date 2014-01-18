<?php
/**
 * http://codex.wordpress.org/Editing_wp-config.php
 */

if (
	// Is this site being access on a domain we use for testing?
	// 'staging.com' matches 'site.staging.com'
	false !== strpos( $_SERVER['HTTP_HOST'], 'staging.com' )

	// Are we in a local environment?
	|| ( '127.0.0.1' == $_SERVER['SERVER_ADDR'] && '127.0.0.1' == $_SERVER['REMOTE_ADDR'] ) // IPv4
	|| ( '::1' == $_SERVER['SERVER_ADDR'] && '::1' == $_SERVER['REMOTE_ADDR'] ) // IPv6
) {
	include dirname( __FILE__ ) . '/wp-config-dev.php'; 
}else {
	include dirname( __FILE__ ) . '/wp-config-live.php';
}


/**
 * Settings shared by all environments
 */

/**
 * WordPress Localized Language, defaults to English.
 */
define('WPLANG', '');


/**
 * Authentication Unique Keys and Salts.
 * https://api.wordpress.org/secret-key/1.1/salt
 */
define('AUTH_KEY',         'V`_5u|}Tu-Vr1Y1>+l3I-n3ImuRfct~FhE,)7~P8,|yuGK%5g#Z[&8(`JO]M^@{J');
define('SECURE_AUTH_KEY',  'S=jFtzk|*3L[:g)E3*-d|G<AeyR9=-`W+BsS$|7#X1-pBsKxH=i;()i~GvF-+K V');
define('LOGGED_IN_KEY',    'm.yg^_!)7#pO%q@z,nyVVCh6,5+HO-0KMkJ0|}sWaFUswV.a%*eu*|C[bqiIL[|1');
define('NONCE_KEY',        ')mD.[*!k8nk=kEoP1[Q>aFE6~+M%u$NtGm[%@y#1Q:0Os|{$|2c?7Z@}PYl]~0-{');
define('AUTH_SALT',        '|TWDQ$b5Cuqb&1SOnfZqJgX/V^?NHy,d%*n&+DBO,&.E<*%19(uV<=$(H4[1:zAA');
define('SECURE_AUTH_SALT', 'e1cfuY7EL-jVkdU9beE2wm+9U@SK3;jV-!u=RNm56^O<-8/8a[9L=>d6m _Z9Hpd');
define('LOGGED_IN_SALT',   'wCQuhMO#Fv)1CFp#.sK|`b.lDn~M7YSuPykyuG}x*Q1F%|#0h(IU)dJ9kX*PDDs-');
define('NONCE_SALT',       '/$b11J]leKryM]s_QJ$@u%e<8I`_H|+AlyyZR#Hu:Nga1XOw!-O?WvkK.KdO4?|D');


// That's all, stop editing! Happy blogging.

// Absolute path to the WordPress directory.
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

// Sets up WordPress vars and included files.
require_once(ABSPATH . 'wp-settings.php');
