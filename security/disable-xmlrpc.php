<?php
/**
 * Disable XML-RPC (common brute-force vector) and remove the
 * pingback header. Skip this if you rely on Jetpack or the mobile app.
 */
add_filter( 'xmlrpc_enabled', '__return_false' );

add_filter( 'wp_headers', function ( $headers ) {
	unset( $headers['X-Pingback'] );
	return $headers;
} );
