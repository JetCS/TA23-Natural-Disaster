<?php

	require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function charity_fundraiser_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Elementor Page Builder', 'charity-fundraiser' ),
			'slug'             => 'elementor',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'WooCommerce', 'charity-fundraiser' ),
			'slug'             => 'woocommerce',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'charity_fundraiser_register_recommended_plugins' );