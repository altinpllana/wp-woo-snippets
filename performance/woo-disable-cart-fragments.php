<?php
/**
 * Stop WooCommerce cart-fragments AJAX on pages that don't need it.
 * Keeps it on cart/checkout and when the cart is not empty.
 */
add_action( 'wp_enqueue_scripts', function () {
	if ( ! function_exists( 'is_woocommerce' ) ) {
		return;
	}
	if ( is_cart() || is_checkout() ) {
		return;
	}
	if ( WC()->cart && ! WC()->cart->is_empty() ) {
		return;
	}
	wp_dequeue_script( 'wc-cart-fragments' );
}, 99 );
