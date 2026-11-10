<?php
/**
 * Stop Elementor from loading Google Fonts from Google's CDN
 * (GDPR + performance). Self-host the fonts you need instead.
 */
add_filter( 'elementor/frontend/print_google_fonts', '__return_false' );
