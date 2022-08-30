<?php
/**
 * The template for displaying 404 pages (Not Found).
 * @package Charity Fundraiser
 */
get_header(); ?>

<div class="container">
    <main id="maincontent" role="main" class="page-content">
		<div class="notfound py-3 text-center">
			<?php if(get_theme_mod('charity_fundraiser_404_title','404 Not Found')){ ?>
				<h1><?php echo esc_html( get_theme_mod('charity_fundraiser_404_title',__('404 Not Found', 'charity-fundraiser' )) ); ?></h1>
			<?php }?>
			<?php if(get_theme_mod('charity_fundraiser_404_button_label','404 Not Found')){ ?>
				<div class="read-moresec mt-3">
	        		<a href="<?php echo esc_url( home_url() ); ?>" class="button py-2 px-4"><?php echo esc_html( get_theme_mod('charity_fundraiser_404_button_label',__('Return to the home page', 'charity-fundraiser' )) ); ?><span class="screen-reader-text"><?php esc_html_e('Return to the home page','charity-fundraiser'); ?></span></a>
				</div>
			<?php }?>
		</div>
		<div class="clearfix"></div>
    </main>
</div>

<?php get_footer(); ?>