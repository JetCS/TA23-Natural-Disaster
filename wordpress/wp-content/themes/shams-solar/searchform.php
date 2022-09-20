<?php
/**
 * Template for displaying search forms in Shams Solar
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search', 'label', 'shams-solar' ); ?></span>
		<input role="tab" type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'shams-solar' ); ?>" value="<?php esc_attr( get_search_query()) ?>" name="s" />
	</label>
	<button role="tab" type="submit" class="search-submit"><span><?php echo esc_html_x( 'Search', 'submit button', 'shams-solar' ); ?></span></button>
</form>