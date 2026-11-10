<?php
/**
 * Keep the database & admin lean:
 * - slow the Heartbeat API to 60s
 * - cap post revisions at 5 (or define WP_POST_REVISIONS in wp-config.php)
 */
add_filter( 'heartbeat_settings', function ( $settings ) {
	$settings['interval'] = 60;
	return $settings;
} );

add_filter( 'wp_revisions_to_keep', function () {
	return 5;
} );
