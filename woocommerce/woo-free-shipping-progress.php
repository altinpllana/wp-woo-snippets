<?php
/**
 * "You're X away from free shipping" notice on cart & checkout.
 * Set the threshold to match your Free Shipping method.
 */
add_action( 'woocommerce_before_cart', 'ap_free_shipping_notice' );
add_action( 'woocommerce_before_checkout_form', 'ap_free_shipping_notice' );

function ap_free_shipping_notice() {
	$threshold = 100; // store currency.
	$subtotal  = (float) WC()->cart->get_displayed_subtotal();

	if ( $subtotal >= $threshold ) {
		wc_print_notice( __( 'You qualify for free shipping!', 'ap' ), 'success' );
		return;
	}

	$remaining = $threshold - $subtotal;
	wc_print_notice(
		sprintf(
			/* translators: %s: amount remaining */
			__( 'Add %s more to get free shipping.', 'ap' ),
			wc_price( $remaining )
		),
		'notice'
	);
}
