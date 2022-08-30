<?php
/**
 * The Header for our theme.
 * @package Charity Fundraiser
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  }?>

  <?php if(get_theme_mod('charity_fundraiser_preloader',false) || get_theme_mod('charity_fundraiser_preloader_responsive',false)){ ?>
    <?php if(get_theme_mod( 'charity_fundraiser_preloader_type','Square') == 'Square'){ ?>
      <div id="overlayer"></div>
      <span class="tg-loader">
        <span class="tg-loader-inner"></span>
      </span>
    <?php }else if(get_theme_mod( 'charity_fundraiser_preloader_type') == 'Circle') {?>    
      <div class="preloader text-center">
        <div class="preloader-container">
          <span class="animated-preloader"></span>
        </div>
      </div>
    <?php }?>
  <?php }?>

  <header role="banner">
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'charity-fundraiser' ); ?><span class="screen-reader-text"><?php esc_html_e('Skip to Content','charity-fundraiser'); ?></span></a>
    <?php if (has_nav_menu('primary')){ ?>
      <div class="toggle-menu responsive-menu p-2">
        <button role="tab"><i class="<?php echo esc_html(get_theme_mod('charity_fundraiser_menu_open_icon','fas fa-bars')); ?> pe-1"></i><?php echo esc_html( get_theme_mod('charity_fundraiser_mobile_menu_label', __('Menu','charity-fundraiser'))); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('charity_fundraiser_mobile_menu_label', __('Menu','charity-fundraiser'))); ?></span></button>
      </div>
      <div id="sidelong-menu" class="nav side-nav">
        <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'charity-fundraiser' ); ?>">
          <?php if (has_nav_menu('primary')){ 
            wp_nav_menu( array( 
              'theme_location' => 'primary',
              'container_class' => 'main-menu-navigation clearfix' ,
              'menu_class' => 'clearfix',
              'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
              'fallback_cb' => 'wp_page_menu',
            ) ); 
          } ?>
          <a href="javascript:void(0)" class="closebtn responsive-menu p-1"><?php echo esc_html( get_theme_mod('charity_fundraiser_close_menu_label', __('Close Menu','charity-fundraiser'))); ?><i class="<?php echo esc_html(get_theme_mod('charity_fundraiser_menu_close_icon','fas fa-times-circle')); ?> m-3"></i><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('charity_fundraiser_close_menu_label', __('Close Menu','charity-fundraiser'))); ?></span></a>
        </nav>
      </div>
    <?php }?>
    <div class="top-bar text-md-start text-center">
      <div class="top-header">
        <div class="container">
          <div class="row">
            <div class="logo col-lg-3 col-md-3 py-1 px-2">
              <?php if ( has_custom_logo() ) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
              <?php endif; ?>
              <?php $blog_info = get_bloginfo( 'name' ); ?>
              <?php if ( ! empty( $blog_info ) ) : ?>
                <?php if( get_theme_mod('charity_fundraiser_show_site_title',true) != ''){ ?>
                  <?php if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                  <?php else : ?>
                    <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php endif; ?>
                <?php }?>
              <?php endif; ?>
              <?php if( get_theme_mod('charity_fundraiser_show_tagline',true) != ''){ ?>
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) :
                ?>
                  <p class="site-description m-0">
                    <?php echo esc_html($description); ?>
                  </p>
                <?php endif; ?>
              <?php }?>
            </div>
            <div class="col-lg-3 col-md-3 align-self-center pe-md-0">
              <div class="contact-details py-2">
                <div class="row">
                  <?php if ( get_theme_mod('charity_fundraiser_email_text','') != "" ) {?>
                    <div class="col-lg-2 col-md-2 p-0 conatct-font">
                      <i class="<?php echo esc_html(get_theme_mod('charity_fundraiser_email_icon','fas fa-envelope')); ?>"></i>
                    </div>
                    <div class="col-lg-8 col-md-8">
                      <?php if ( get_theme_mod('charity_fundraiser_email_text','') != "" ) {?>
                        <p class="bold-font mb-0"><?php echo esc_html( get_theme_mod('charity_fundraiser_email_text','') ); ?></p>
                      <?php }?>
                      <?php if ( get_theme_mod('charity_fundraiser_email','') != "" ) {?>
                        <p class="mb-0"><a href="mailto:<?php echo esc_attr( get_theme_mod('charity_fundraiser_email','') ); ?>"><?php echo esc_html( get_theme_mod('charity_fundraiser_email','') ); ?><span class="screen-reader-text"><?php esc_html_e('Email', 'charity-fundraiser') ?></span></a></p>
                      <?php }?>
                    </div>
                  <?php }?>
                </div>
              </div>
            </div>          
            <div class="col-lg-3 col-md-3 align-self-center">
              <div class="contact-details py-2">
                <div class="row">
                  <?php if ( get_theme_mod('charity_fundraiser_call_text','') != "" ) {?>
                    <div class="col-lg-2 col-md-2 p-0 conatct-font">
                      <i class="<?php echo esc_html(get_theme_mod('charity_fundraiser_phone_icon','fas fa-phone')); ?>"></i>
                    </div>
                    <div class="col-lg-8 col-md-8">
                      <?php if ( get_theme_mod('charity_fundraiser_call_text','') != "" ) {?>
                        <p class="bold-font mb-0"><?php echo esc_html( get_theme_mod('charity_fundraiser_call_text','' )); ?></p>
                      <?php }?>
                      <?php if ( get_theme_mod('charity_fundraiser_call_number','') != "" ) {?>
                        <p class="mb-0"><a href="tel:<?php echo esc_attr( get_theme_mod('charity_fundraiser_call_number','') ); ?>"><?php echo esc_html( get_theme_mod('charity_fundraiser_call_number','' )); ?><span class="screen-reader-text"><?php esc_html_e('Phone Number', 'charity-fundraiser') ?></span></a></p>
                      <?php }?>
                    </div>
                  <?php }?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 align-self-center">
              <div class="social-media text-md-end text-center py-3">
                <?php if( get_theme_mod( 'charity_fundraiser_facebook' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'charity_fundraiser_facebook','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('charity_fundraiser_facebook_icon','fab fa-facebook-f')); ?> me-lg-0 me-md-2 mb-lg-0 mb-2"></i><span class="screen-reader-text"><?php esc_html_e('Facebook','charity-fundraiser'); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'charity_fundraiser_twitter' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'charity_fundraiser_twitter','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('charity_fundraiser_twitter_icon','fab fa-twitter')); ?> me-lg-0 me-md-2 mb-lg-0 mb-2"></i><span class="screen-reader-text"><?php esc_html_e('Twitter','charity-fundraiser'); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'charity_fundraiser_pintrest' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'charity_fundraiser_pintrest','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('charity_fundraiser_pintrest_icon','fab fa-pinterest')); ?> me-lg-0 me-md-2 mb-lg-0 mb-2"></i><span class="screen-reader-text"><?php esc_html_e('Pinterest','charity-fundraiser'); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'charity_fundraiser_insta' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'charity_fundraiser_insta','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('charity_fundraiser_insta_icon','fab fa-instagram')); ?> me-lg-0 me-md-2 mb-lg-0 mb-2"></i><span class="screen-reader-text"><?php esc_html_e('Instagram','charity-fundraiser'); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'charity_fundraiser_linkdin' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'charity_fundraiser_linkdin','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('charity_fundraiser_linkdin_icon','fab fa-linkedin-in')); ?> me-lg-0 me-md-2 mb-lg-0 mb-2"></i><span class="screen-reader-text"><?php esc_html_e('Linkedin','charity-fundraiser'); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'charity_fundraiser_youtube' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'charity_fundraiser_youtube','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('charity_fundraiser_youtube_icon','fab fa-youtube')); ?> me-lg-0 me-md-2 mb-lg-0 mb-2"></i><span class="screen-reader-text"><?php esc_html_e('Youtube','charity-fundraiser'); ?></span></a>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>   
      </div> 
      <div id="header">
        <div class="container">
          <div class="menu-sec ps-md-4 ps-0 <?php if( get_theme_mod( 'charity_fundraiser_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
            <div class="row m-0">
              <div class="menubox align-self-center <?php if( get_theme_mod( 'charity_fundraiser_donate_link') != '') { ?> col-lg-9 col-md-1"<?php } else { ?>col-lg-11 col-md-1 <?php } ?>">
                <div id="sidelong-menu" class="nav side-nav">
                  <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'charity-fundraiser' ); ?>">
                    <?php if (has_nav_menu('primary')){ 
                      wp_nav_menu( array( 
                        'theme_location' => 'primary',
                        'container_class' => 'main-menu-navigation clearfix' ,
                        'menu_class' => 'clearfix',
                        'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                        'fallback_cb' => 'wp_page_menu',
                      ) ); 
                    } ?>
                  </nav>
                </div>
              </div>
              <?php if(get_theme_mod('charity_fundraiser_show_search',true) ){ ?>
                <div class="search-box position-relative align-self-center <?php if( get_theme_mod( 'charity_fundraiser_donate_link') != '') { ?> col-lg-1 col-md-5"<?php } else { ?>col-lg-1 col-md-11 <?php } ?>">
                  <div class="wrap"><?php get_search_form(); ?></div>
                </div>
              <?php }?>
              <?php if ( get_theme_mod('charity_fundraiser_donate_text','') != "" ) {?>
                <div class="donate-link py-3 text-center <?php if( get_theme_mod( 'charity_fundraiser_show_search') != true) { ?> col-lg-2 col-md-6"<?php } else { ?>col-lg-3 col-md-12 <?php } ?>"> 
                  <a href="<?php echo esc_url( get_theme_mod('charity_fundraiser_donate_link','') ); ?>"><i class="<?php echo esc_html(get_theme_mod('charity_fundraiser_donate_icon','fas fa-heart')); ?> me-1"></i><?php echo esc_html( get_theme_mod('charity_fundraiser_donate_text','') ); ?><span class="screen-reader-text"><?php esc_html_e('Donate Button','charity-fundraiser'); ?></span></a>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <?php if(get_theme_mod('charity_fundraiser_post_featured_image') == 'banner' ){
    if( is_singular() ) {?>
      <div id="page-site-header">
        <div class='page-header'> 
          <?php the_title( '<h1>', '</h1>' ); ?>
        </div>
      </div>
    <?php }
  }?>