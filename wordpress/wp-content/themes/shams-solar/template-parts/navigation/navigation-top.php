<?php
/**
 * Displays top navigation
 */
?>

<div class="header-menu">
	<div class="row m-0">
		<div class="logo col-lg-3 col-md-3 p-lg-0 p-md-1 p-3 align-self-center">
			<?php if ( has_custom_logo() ) : ?>
				<div class="site-logo"><?php the_custom_logo(); ?></div>
			<?php endif; ?>
			<?php $blog_info = get_bloginfo( 'name' ); ?>
			<?php if ( ! empty( $blog_info ) ) : ?>
				<?php if( get_theme_mod('shams_solar_show_site_title',true) != ''){ ?>
				    <?php if ( is_front_page() && is_home() ) : ?>
				    	<h1 class="site-title m-0 p-0 text-uppercase"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-uppercase"><?php bloginfo( 'name' ); ?></a></h1>
				    <?php else : ?>
				    	<p class="site-title m-0 p-0 text-uppercase"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				    <?php endif; ?>
				<?php }?>
			<?php endif; ?>
			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) :
			?>
				<?php if( get_theme_mod('shams_solar_show_tagline',true) != ''){ ?>
					<p class="site-description m-0">
				    <?php echo esc_html($description); ?>
					</p>
				<?php }?>
			<?php endif; ?>
		</div>
		<div class="col-lg-8 col-md-8 align-self-center">
			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'shams-solar' ); ?>">
				<button role="tab" class="menu-toggle p-3" aria-controls="top-menu" aria-expanded="false">
					<?php
						esc_html_e( 'Menu', 'shams-solar' );
					?>
				</button>
				<?php wp_nav_menu( array(
					'theme_location' => 'top',
					'menu_id'        => 'top-menu',
				) ); ?>				
			</nav>
		</div>
		<?php if( get_theme_mod('shams_solar_show_hide_search',true) != ''){ ?>
			<div class="col-lg-1 col-md-1 align-self-center">
				<div class="search-body text-center align-self-center">
					<button type="button" class="search-show"><i class="<?php echo esc_attr(get_theme_mod('shams_solar_search_icon_changer','fas fa-search')); ?>"></i></button>
				</div>
			</div>
		<?php } ?>
	</div>
	<div class="searchform-inner">
		<?php get_search_form(); ?>
		<button type="button" class="close"aria-label="Close"><span aria-hidden="true">X</span></button>
	</div>
</div>