<?php
/**
 * Development / Staging
 */

/**
 * PHP errors
 */
define('WP_DEBUG', true);
error_reporting( E_ALL ); // Optional: & ~E_STRICT & ~E_NOTICE
ini_set( 'display_errors', 'On' );

/**
 * JavaScript errors
 */
define( 'SCRIPT_DEBUG', true );
define( 'CONCATENATE_SCRIPTS', false );

/**
 * Database
 */
define( 'DB_NAME',     'development_database');
define( 'DB_USER',     'development_database');
define( 'DB_PASSWORD', 'somethingrandomandunmemorable');

define( 'DB_HOST',     'localhost');
define( 'DB_CHARSET',  'utf8');
define( 'DB_COLLATE',  '');

$table_prefix  = 'wp_';