<?php
/**
 * The template for displaying search forms in Charity Fundraiser
 * @package Charity Fundraiser
 */
?>
<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'charity-fundraiser' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr( get_theme_mod('charity_fundraiser_search_placeholder', __('Search', 'charity-fundraiser')) ); ?>" value="<?php the_search_query(); ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'charity-fundraiser' ); ?>">
</form>