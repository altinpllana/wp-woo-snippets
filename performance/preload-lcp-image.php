<?php
/**
 * Preload the featured image on single posts/pages to improve LCP.
 */
add_action( 'wp_head', function () {
	if ( ! is_singular() || ! has_post_thumbnail() ) {
		return;
	}
	$id     = get_post_thumbnail_id();
	$src    = wp_get_attachment_image_url( $id, 'large' );
	$srcset = wp_get_attachment_image_srcset( $id, 'large' );
	if ( ! $src ) {
		return;
	}
	printf(
		'<link rel="preload" as="image" href="%s"%s fetchpriority="high">' . "\n",
		esc_url( $src ),
		$srcset ? ' imagesrcset="' . esc_attr( $srcset ) . '" imagesizes="100vw"' : ''
	);
}, 1 );
