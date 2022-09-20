<?php
/**
 * Custom header implementation
 */

function shams_solar_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'shams_solar_custom_header_args', array(

		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1055,
		'height'                 => 195,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'shams_solar_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'shams_solar_custom_header_setup' );

if ( ! function_exists( 'shams_solar_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see shams_solar_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'shams_solar_header_style' );
function shams_solar_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$shams_solar_custom_css = "
        #masthead, .page-template-home-custom #masthead{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'shams-solar-basic-style', $shams_solar_custom_css );
	endif;
}
endif; // shams_solar_header_style