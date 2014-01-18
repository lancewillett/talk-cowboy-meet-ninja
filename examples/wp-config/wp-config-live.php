<?php
/**
 * Production / Live
 */

/**
 * PHP Error Output
 */
define( 'WP_DEBUG', false );

error_reporting( 0 ); // Use E_ALL if using logs

@ini_set( 'display_errors', 'Off' );
@ini_set( 'display_startup_errors', 'Off' );

// Optional: Error log
// error_reporting( E_ALL ); // Instead of 0 used above.
// @ini_set( 'log_errors', 'On' );
// @ini_set( 'error_log', dirname( dirname( __FILE__ ) ) . '/error.log' );

// Optional: Misc
// @ini_set( 'log_errors_max_len', 0 );
// @ini_set( 'ignore_repeated_errors', 'On' );
// @ini_set( 'ignore_repeated_source', 'Off' );
// @ini_set( 'report_memleaks', 'On' );

/**
 * Database
 */
define( 'DB_NAME',     'production_database');
define( 'DB_USER',     'production_database');
define( 'DB_PASSWORD', 'somethingrandomandunmemorable');

define( 'DB_HOST',     'localhost');
define( 'DB_CHARSET',  'utf8');
define( 'DB_COLLATE',  '');

$table_prefix  = 'wp_';