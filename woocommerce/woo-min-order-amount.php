<?php
/**
 * Require a minimum order subtotal before checkout.
 */
add_action( 'woocommerce_check_cart_items', function () {
	$minimum  = 25; // store currency.
	$subtotal = (float) WC()->cart->get_subtotal();

	if ( $subtotal > 0 && $subtotal < $minimum ) {
		wc_add_notice(
			sprintf(
				/* translators: 1: minimum, 2: current subtotal */
				__( 'Minimum order is %1$s. Your current subtotal is %2$s.', 'ap' ),
				wc_price( $minimum ),
				wc_price( $subtotal )
			),
			'error'
		);
	}
} );
