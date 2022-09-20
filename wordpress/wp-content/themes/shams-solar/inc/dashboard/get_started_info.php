<?php

add_action( 'admin_menu', 'shams_solar_gettingstarted' );
function shams_solar_gettingstarted() {
	add_theme_page( esc_html__('About Theme', 'shams-solar'), esc_html__('About Theme', 'shams-solar'), 'edit_theme_options', 'shams-solar-guide-page', 'shams_solar_guide');   
}

function shams_solar_admin_theme_style() {
   wp_enqueue_style('shams-solar-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/get_started_info.css');
   wp_enqueue_script('tabs', esc_url(get_template_directory_uri()) . '/inc/dashboard/js/tab.js');
}
add_action('admin_enqueue_scripts', 'shams_solar_admin_theme_style');

function shams_solar_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php esc_html_e( 'Thanks for installing Shams Solar Theme', 'shams-solar' ) ?> </h2>
			<p><?php esc_html_e( "Please Click on the link below to know the theme setup information", 'shams-solar' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=shams-solar-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Get Started ', 'shams-solar' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'shams_solar_notice');


/**
 * Theme Info Page
 */
function shams_solar_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'shams-solar' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
				<div class="intro">
					<div class="pad-box">
						<h2 align="center"><?php esc_html_e( 'Welcome to Shams Solar Theme', 'shams-solar' ); ?>
						<span class="version" align="center">Version: <?php echo esc_html($theme['Version']);?></span></h2>	
						</span>
						<div class="powered-by">
							<p align="center"><strong><?php esc_html_e( 'Theme created by ThemesEye', 'shams-solar' ); ?></strong></p>
							<p align="center">
								<img role="img" class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/logo.png'); ?>"/>
							</p>
						</div>
					</div>
				</div>

			<div class="tab">
			  <button role="tab" class="tablinks" onclick="shams_solar_open(event, 'lite_theme')">Getting Started</button>		  
			  <button role="tab" class="tablinks" onclick="shams_solar_open(event, 'pro_theme')">Get Premium</button>
			</div>

			<!-- Tab content -->
			<div id="lite_theme" class="tabcontent open">
				<h2 class="tg-docs-section intruction-title" id="section-4" align="center"><?php esc_html_e( '1). Shams Solar Lite Theme', 'shams-solar' ); ?></h2>
				<div class="row">
					<div class="col-md-5">
						<div class="pad-box">
	              			<img role="img" role="img" class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
	              		 </div> 
					</div>
					<div class="theme-instruction-block col-md-7">
						<div class="pad-box">
		                    <div class="table-image">
								<table class="tablebox">
									<thead>
										<tr>
											<th><?php esc_html_e('Setup', 'shams-solar'); ?></th>
											<th><?php esc_html_e('Click Here', 'shams-solar'); ?></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php esc_html_e('Logo', 'shams-solar'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Click', 'shams-solar'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Menus', 'shams-solar'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Click', 'shams-solar'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Top Header', 'shams-solar'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=shams_solar_contact_details') ); ?>" target="_blank"><?php esc_html_e('Click', 'shams-solar'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Slider', 'shams-solar'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=shams_solar_slider') ); ?>" target="_blank"><?php esc_html_e('Click', 'shams-solar'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Post Settings', 'shams-solar'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=shams_solar_blog_post') ); ?>" target="_blank"><?php esc_html_e('Click', 'shams-solar'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Footer', 'shams-solar'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=shams_solar_footer') ); ?>" target="_blank"><?php esc_html_e('Click', 'shams-solar'); ?></a></td>
										</tr>
									</tbody>
								</table>
							</div>
							<ol>
								<li><?php esc_html_e( 'Start','shams-solar'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','shams-solar'); ?></a> <?php esc_html_e( 'your website.','shams-solar'); ?> </li>
								<li><?php esc_html_e( 'Shams Solar','shams-solar'); ?> <a target="_blank" href="<?php echo esc_url( SHAMS_SOLAR_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','shams-solar'); ?></a> </li>
							</ol>
	                    </div>
	                </div>
				</div><br><br>
				
	        </div>
	        <div id="pro_theme" class="tabcontent">
				<h2 class="dashboard-install-title" align="center"><?php esc_html_e( '2.) Premium Theme Information.','shams-solar'); ?></h2>
            	<div class="row">
					<div class="col-md-7">
						<img role="img" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
						<div class="pro-links" >
					    	<a href="<?php echo esc_url( SHAMS_SOLAR_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'shams-solar'); ?></a>
							<a href="<?php echo esc_url( SHAMS_SOLAR_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'shams-solar'); ?></a>
							<a href="<?php echo esc_url( SHAMS_SOLAR_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'shams-solar'); ?></a>
						</div>
						<div class="pad-box">
							<h3><?php esc_html_e( 'Pro Theme Description','shams-solar'); ?></h3>
                    		<p class="pad-box-p"><?php esc_html_e( 'Premium solar energy WordPress theme is a top category theme related to the alternative energy businesses or consultancy and has wide application for the industries related to the conservation. It is a perfect alternative energy theme for the recycling industries and comes with a bundle of rich features that can take your business growth or consultancy to an altogether different level. Because of the special WooCommerce compatibility associated with the solar energy WordPress theme, it is a good one for the sale of solar products and you can do all this by opening up an online shop and if you sell the products related to the wind energy, you can but this solar energy theme at affordable cost from various genuine theme selling companies in the online international market. One of the special features with this solar WordPress theme is the display options and apart from that, it is accompanied with the interactive demo as well.', 'shams-solar' ); ?><p>
                    	</div>
					</div>
					<div class="col-md-5 install-plugin-right">
						<div class="pad-box">								
							<h3><?php esc_html_e( 'Pro Theme Features','shams-solar'); ?></h3>
							<div class="dashboard-install-benefit">
								<ul>
									<li><?php esc_html_e( 'Easy install 10 minute setup Themes','shams-solar'); ?></li>
									<li><?php esc_html_e( 'Multiplue Domain Usage','shams-solar'); ?></li>
									<li><?php esc_html_e( 'Premium Technical Support','shams-solar'); ?></li>
									<li><?php esc_html_e( 'FREE Shortcodes','shams-solar'); ?></li>
									<li><?php esc_html_e( 'Multiple page templates','shams-solar'); ?></li>
									<li><?php esc_html_e( 'Google Font Integration','shams-solar'); ?></li>
									<li><?php esc_html_e( 'Customizable Colors','shams-solar'); ?></li>
									<li><?php esc_html_e( 'Theme customizer ','shams-solar'); ?></li>
									<li><?php esc_html_e( 'Documention','shams-solar'); ?></li>
									<li><?php esc_html_e( 'Unlimited Color Option','shams-solar'); ?></li>
									<li><?php esc_html_e( 'Plugin Compatible','shams-solar'); ?></li>
									<li><?php esc_html_e( 'Social Media Integration','shams-solar'); ?></li>
									<li><?php esc_html_e( 'Incredible Support','shams-solar'); ?></li>
									<li><?php esc_html_e( 'Eye Appealing Design','shams-solar'); ?></li>
									<li><?php esc_html_e( 'Simple To Install','shams-solar'); ?></li>
									<li><?php esc_html_e( 'Fully Responsive ','shams-solar'); ?></li>
									<li><?php esc_html_e( 'Translation Ready','shams-solar'); ?></li>
									<li><?php esc_html_e( 'Custom Page Templates ','shams-solar'); ?></li>
									<li><?php esc_html_e( 'WooCommerce Integration','shams-solar'); ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
          	<div class="dashboard__blocks">
				<div class="row">
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Get Support','shams-solar'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( SHAMS_SOLAR_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','shams-solar'); ?></a></li>
							<li><a target="_blank" href="<?php echo esc_url( SHAMS_SOLAR_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','shams-solar'); ?></a></li>
						</ol>
					</div>

					<div class="col-md-3">
						<h3><?php esc_html_e( 'Getting Started','shams-solar'); ?></h3>
						<ol>
							<li><?php esc_html_e( 'Start','shams-solar'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','shams-solar'); ?></a> <?php esc_html_e( 'your website.','shams-solar'); ?> </li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Help Docs','shams-solar'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( SHAMS_SOLAR_FREE_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','shams-solar'); ?></a></li>
							<li><a target="_blank" href="<?php echo esc_url( SHAMS_SOLAR_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','shams-solar'); ?></a></li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Buy Premium','shams-solar'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( SHAMS_SOLAR_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'shams-solar'); ?></a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		
	</div>

<?php
}?>