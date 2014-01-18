<?php

/**
 * Run code for just one user of the site.
 * Get your IP from http://whatismyip.com
 */
if ( '0.0.0.0' == $_SERVER[ 'REMOTE_HOST' ] ) {

	echo '<pre>';
	print_r( $wp_query );
	echo '</pre>';

}