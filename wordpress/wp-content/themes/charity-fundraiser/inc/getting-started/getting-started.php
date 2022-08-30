<?php
//about theme info
add_action( 'admin_menu', 'charity_fundraiser_gettingstarted' );
function charity_fundraiser_gettingstarted() {    	
	add_theme_page( esc_html__('Get Started', 'charity-fundraiser'), esc_html__('Get Started', 'charity-fundraiser'), 'edit_theme_options', 'charity_fundraiser_guide', 'charity_fundraiser_mostrar_guide');   
}
// Add a Custom CSS file to WP Admin Area
function charity_fundraiser_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'charity_fundraiser_admin_theme_style');

//guidline for about theme
function charity_fundraiser_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'charity-fundraiser' );
?>
<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Charity Fundraiser WordPress Theme', 'charity-fundraiser' ); ?></h3>
		</div>
		<div class="color_bg_blue">
			<p>Version: <?php echo esc_html($theme['Version']);?></p>
				<p class="intro_version"><?php esc_html_e( 'Congratulations! You are about to use the most easy to use and felxible WordPress theme.', 'charity-fundraiser' ); ?></p>
				<div class="blink">
					<h4><?php esc_html_e( 'Theme Created By Themesglance', 'charity-fundraiser' ); ?></h4>
				</div>
			<div class="intro-text"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/themesglance-logo.png" alt="" /></div>
			<div class="coupon-code"><?php esc_html_e( 'Get', 'charity-fundraiser' ); ?> <span><?php esc_html_e( '20% off', 'charity-fundraiser' ); ?></span> <?php esc_html_e( 'on Premium Theme with the discount code: ', 'charity-fundraiser' ); ?> <span><?php esc_html_e( '" Get20 "', 'charity-fundraiser' ); ?></span></div>
		</div>
		<div class="started">
			<h3><?php esc_html_e( 'Lite Theme Info', 'charity-fundraiser' ); ?></h3>
			<p><?php esc_html_e( 'Charity Fundraiser is a robust, engaging and beautiful charity WordPress theme for charities, non-profit organizations, NGOs and websites organising donation camps, fundraising events and campaigns. The theme will help you get the much needed attention through its inviting layout and attention seeking design. It has a user-friendly interface to help you indulge in smooth navigation. The theme is responsive to give superb look on all devices irrespective of their screen size. It is cross-browser compatible and ensures speedy loading. The theme is designed keeping in mind the SEO factor. It is translation ready to encourage people in their language which surely will work positively. Its homepage can be donned with banners and sliders to give the website a completely different look. The theme is integrated with social media icons to reach maximum people in minimum time. It is built to be readily customizable to mould the site design according to your wish. It is built on Bootstrap framework which further eases its usage. It has placed Call to Action buttons to take your visitors where you want them to pay attention. This charity theme is written in clean and secure codes. The theme is compatible with various third party plugins to get extended functionality.', 'charity-fundraiser')?></p>
			<hr>
			<h3><?php esc_html_e( 'Help Docs', 'charity-fundraiser' ); ?></h3>
			<ul>
				<p><?php esc_html_e( 'Charity Fundraiser', 'charity-fundraiser' ); ?> <a href="<?php echo esc_url( CHARITY_FUNDRAISER_THEMESGLANCE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'charity-fundraiser' ); ?></a></p>
			</ul>
			<hr>
			<h3><?php esc_html_e( 'Get started with Charity Fundraiser Theme', 'charity-fundraiser' ); ?></h3>
			<div class="col-left-inner"> 
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/free-screenshot.png" alt="" />
			</div>		
			<div class="col-right-inner">
				<p><?php esc_html_e( 'Go to', 'charity-fundraiser' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'charity-fundraiser' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'charity-fundraiser' ); ?></p>
				<ul>
					<li><?php esc_html_e( 'Easily customizable ', 'charity-fundraiser' ); ?> </li>
					<li><?php esc_html_e( 'Absolutely free', 'charity-fundraiser' ); ?> </li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'charity-fundraiser'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/responsive.png" alt="" />
			<hr class="firsthr">
			<a href="<?php echo esc_url( CHARITY_FUNDRAISER_THEMESGLANCE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'charity-fundraiser'); ?></a>
			<a href="<?php echo esc_url( CHARITY_FUNDRAISER_THEMESGLANCE_PRO_THEME_URL ); ?>"><?php esc_html_e('Buy Pro', 'charity-fundraiser'); ?></a>
			<a href="<?php echo esc_url( CHARITY_FUNDRAISER_THEMESGLANCE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'charity-fundraiser'); ?></a>
			<hr class="secondhr">
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'charity-fundraiser'); ?></h3>
		<ul>
		 	<li><?php esc_html_e( 'Slider with unlimited slides', 'charity-fundraiser'); ?></li>
		 	<li><?php esc_html_e( 'Custom Posttype for "Cause" listing', 'charity-fundraiser'); ?></li>
		 	<li><?php esc_html_e( 'Custom Posttype for "Events" listing', 'charity-fundraiser'); ?></li>
		 	<li><?php esc_html_e( 'Donation form with contact form 7', 'charity-fundraiser'); ?></li>
		 	<li><?php esc_html_e( 'Gallery Plugin with shortcode', 'charity-fundraiser'); ?></li>
		 	<li><?php esc_html_e( 'Custom Posttype for "Volunteers" listing', 'charity-fundraiser'); ?></li>
		 	<li><?php esc_html_e( 'Social Icon widget', 'charity-fundraiser'); ?></li>
		 	<li><?php esc_html_e( 'Custom Posttype for "Testimonials" listing', 'charity-fundraiser'); ?></li>
		 	<li><?php esc_html_e( 'Contact widget for footer', 'charity-fundraiser'); ?></li>
		 	<li><?php esc_html_e( 'Custom Posttype for "Donators" listing', 'charity-fundraiser'); ?></li>
		 	<li><?php esc_html_e( 'Contact page Template', 'charity-fundraiser'); ?></li>
		 	<li><?php esc_html_e( 'Partner listing with slider', 'charity-fundraiser'); ?></li>
		 	<li><?php esc_html_e( 'Recent Post Widget with thumbnails', 'charity-fundraiser'); ?></li>
		 	<li><?php esc_html_e( 'Blog full width, With Left and Right sidebar Template', 'charity-fundraiser'); ?></li>
		</ul>
	</div>
	<div class="service">
		<div class="col-lg-3 col-md-3">
			<h3><span class="dashicons dashicons-media-document"></span> <?php esc_html_e('Get Support', 'charity-fundraiser'); ?></h3>
			<ol>
				<li>
				<a href="<?php echo esc_url( CHARITY_FUNDRAISER_THEMESGLANCE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'charity-fundraiser'); ?></a>
				</li>
			</ol>
		</div>
		<div class="col-lg-3 col-md-3">
			<h3><span class="dashicons dashicons-welcome-widgets-menus"></span> <?php esc_html_e('Getting Started', 'charity-fundraiser'); ?></h3>
			<ol>
				<li> <?php esc_html_e('Start', 'charity-fundraiser'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'charity-fundraiser'); ?></a> <?php esc_html_e('your website.', 'charity-fundraiser'); ?></li>
			</ol>
		</div>
		<div class="col-lg-3 col-md-3">
			<h3><span class="dashicons dashicons-star-filled"></span> <?php esc_html_e('Rate This Theme', 'charity-fundraiser'); ?></h3>
			<ol>
				<li>
				<a href="<?php echo esc_url( CHARITY_FUNDRAISER_THEMESGLANCE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Rate it here', 'charity-fundraiser'); ?></a>
				</li>
			</ol>
		</div>
		<div class="col-lg-3 col-md-3">
			<h3><span class="dashicons dashicons-editor-help"></span> <?php esc_html_e( 'Help Docs', 'charity-fundraiser' ); ?></h3>
			<ol>
				<li><?php esc_html_e( 'Charity Fundraiser Lite', 'charity-fundraiser' ); ?> <a href="<?php echo esc_url( CHARITY_FUNDRAISER_THEMESGLANCE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'charity-fundraiser' ); ?></a></li>
			</ol>
		</div>
	</div>
</div>
<?php } ?>