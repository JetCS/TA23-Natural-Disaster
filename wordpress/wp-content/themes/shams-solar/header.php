<?php
/**
 * The header for our theme 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
	  wp_body_open(); 
	} else { 
	  do_action( 'wp_body_open' ); 
	} ?>	
	<?php if(get_theme_mod('shams_solar_loader_setting', false)){ ?>
	    <div id="pre-loader">
			<div class='demo'>
				<?php $shams_solar_theme_lay = get_theme_mod( 'shams_solar_preloader_types','Default');
				if($shams_solar_theme_lay == 'Default'){ ?>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
				<?php }elseif($shams_solar_theme_lay == 'Circle'){ ?>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
				<?php }elseif($shams_solar_theme_lay == 'Two Circle'){ ?>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
				<?php } ?>
			</div>
	    </div>
	<?php }?>
	<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'shams-solar' ); ?></a>
	<div id="page" class="site">
		<header id="masthead" class="site-header" role="banner">
			<div class="main-header">
				<div class="container">
					<?php if( get_theme_mod('shams_solar_show_hide_topbar', false) != '' || get_theme_mod( 'shams_solar_enable_disable_topbar', false) != ''){ ?>
						<div class="topbar px-2 text-lg-start text-center">
							<div class="row m-0">
								<div class="col-lg-8 col-md-12">
									<?php if( get_theme_mod( 'shams_solar_contact_number','' ) != '') { ?>
						                <a class="call ps-md-4" href="tel:<?php echo esc_attr( get_theme_mod('shams_solar_contact_number','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('shams_solar_phone_icon_changer','fa fa-phone')); ?> py-3 pe-2" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('shams_solar_contact_number','' )); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('shams_solar_contact_number','' )); ?></span></a>
						            <?php } ?>
						            <?php if( get_theme_mod( 'shams_solar_email_address','' ) != '') { ?>
						                <a class="email ps-md-4" href="mailto:<?php echo esc_attr( get_theme_mod('shams_solar_email_address','') ); ?>"><i class="<?php echo esc_attr(get_theme_mod('shams_solar_email_icon_changer','far fa-envelope')); ?> py-3 pe-2" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('shams_solar_email_address','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('shams_solar_email_address','') ); ?></span></a>
						            <?php } ?>
						            <?php if( get_theme_mod( 'shams_solar_time','' ) != '') { ?>
						                <span class="time ps-md-4"><i class="<?php echo esc_attr(get_theme_mod('shams_solar_time_icon_changer','far fa-clock')); ?> py-3 pe-2" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('shams_solar_time','') ); ?></span>
						            <?php } ?>
						        </div>
								<div class="social-icon col-lg-4 col-md-12 text-lg-end text-center pe-4">
									<?php if( get_theme_mod( 'shams_solar_facebook_url') != '' || get_theme_mod( 'shams_solar_twitter_url') != '' || get_theme_mod( 'shams_solar_youtube_url') != '' || get_theme_mod( 'shams_solar_linkedin_url') != '' || get_theme_mod( 'shams_solar_instagram_url') != '' ) { ?>
										<span><?php esc_html_e('Follow us:','shams-solar') ?></span>
										<?php if( get_theme_mod( 'shams_solar_facebook_url') != '') { ?>
										    <a href="<?php echo esc_url( get_theme_mod( 'shams_solar_facebook_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('shams_solar_facebook_icon_changer','fab fa-facebook-f')); ?> py-3 px-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','shams-solar' );?></span></a>
										<?php } ?>
										<?php if( get_theme_mod( 'shams_solar_twitter_url') != '') { ?>
										    <a href="<?php echo esc_url( get_theme_mod( 'shams_solar_twitter_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('shams_solar_twitter_icon_changer','fab fa-twitter')); ?> py-3 px-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','shams-solar' );?></span></a>
										<?php } ?>
										<?php if( get_theme_mod( 'shams_solar_youtube_url') != '') { ?>
										    <a href="<?php echo esc_url( get_theme_mod( 'shams_solar_youtube_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('shams_solar_youtube_icon_changer','fab fa-youtube'));?> py-3 px-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','shams-solar' );?></span></a>
										<?php } ?>
										<?php if( get_theme_mod( 'shams_solar_linkedin_url') != '') { ?>
										    <a href="<?php echo esc_url( get_theme_mod( 'shams_solar_linkedin_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('shams_solar_linkedin_icon_changer','fab fa-linkedin-in'));?> py-3 px-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','shams-solar' );?></span></a>
										<?php } ?>
										<?php if( get_theme_mod( 'shams_solar_instagram_url') != '') { ?>
										    <a href="<?php echo esc_url( get_theme_mod( 'shams_solar_instagram_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('shams_solar_instagram_icon_changer','fab fa-instagram'));?> py-3 px-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','shams-solar' );?></span></a>
										<?php } ?>
									<?php }?>
								</div>
							</div>
						</div>
					<?php } ?>
					<div class="<?php if( get_theme_mod( 'shams_solar_fixed_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
						<?php if ( has_nav_menu( 'top' ) ) : ?>
							<nav role="navigation" class="navigation-top">
								<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
							</nav>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</header>
		
	<div class="site-content-contain">
		<div id="content" class="pt-5">