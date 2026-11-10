<?php
/**
 * Hide out-of-stock variations in variable product dropdowns.
 */
add_filter( 'woocommerce_variation_is_active', function ( $active, $variation ) {
	return $variation->is_in_stock() ? $active : false;
}, 10, 2 );
