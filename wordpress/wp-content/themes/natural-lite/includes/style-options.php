<?php
/**
 * This template is used to manage style options.
 *
 * @package Natural Lite
 * @since Natural Lite 1.0
 */

/**
 * Changes styles upon user defined options.
 */
function natural_lite_custom_styles() {

	$display_title = get_theme_mod( 'natural_lite_site_title', '1' );
	$display_tagline = get_theme_mod( 'header_text', '1' );
	?>

	<style>

		.site-title {
			<?php
			if ( '1' != $display_title ) {
				echo
				'position: absolute;
				left: -9999px;
				margin: 0px;
				padding: 0px;';
			};
			?>
		}

		.site-description {
			<?php
			if ( '1' != $display_tagline ) {
				echo
				'position: absolute;
				left: -9999px;
				margin: 0px;
				padding: 0px;';
			};
			?>
		}

		<?php if ( 'center' == get_theme_mod( 'title_align', 'center' ) ) { ?>
		.custom-logo-link, .site-title, .site-description, #navigation {
			text-align: center;
		}
		#custom-header .logo-title {
			text-align: center;
			margin: 0px auto 0px;
		}
		<?php } ?>

		<?php if ( 'right' == get_theme_mod( 'title_align', 'center' ) ) { ?>
		.custom-logo-link, .site-title, .site-description, #navigation {
			text-align: right;
		}
		#custom-header .header-img {
			text-align: right;
			justify-content: flex-end;
		}
		<?php } ?>

		<?php if ( 'left' == get_theme_mod( 'title_align', 'center' ) ) { ?>
		.custom-logo-link, .site-title, .site-description, #navigation {
			text-align: left;
		}
		#custom-header .header-img {
			text-align: left;
			justify-content: flex-start;
		}
		<?php } ?>

	</style>

	<?php
}
add_action( 'wp_head', 'natural_lite_custom_styles', 100 );
