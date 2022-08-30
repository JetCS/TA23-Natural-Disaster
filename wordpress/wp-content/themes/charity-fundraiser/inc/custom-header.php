<?php
/**
 * @package Charity Fundraiser
 * @subpackage charity-fundraiser
 * Setup the WordPress core custom header feature.
 *
 * @uses charity_fundraiser_header_style()
*/

function charity_fundraiser_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'charity_fundraiser_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'wp-head-callback'       => 'charity_fundraiser_header_style',
	) ) );

}

add_action( 'after_setup_theme', 'charity_fundraiser_custom_header_setup' );

if ( ! function_exists( 'charity_fundraiser_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see charity_fundraiser_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'charity_fundraiser_header_style' );
function charity_fundraiser_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$charity_fundraiser_custom_css = "
        .top-bar{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'charity-fundraiser-basic-style', $charity_fundraiser_custom_css );
	endif;
}
endif; //charity_fundraiser_header_style