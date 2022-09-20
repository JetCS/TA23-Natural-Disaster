<?php
/**
 * Template Name: Home Custom Page
 */
get_header(); ?>

<main id="main" role="main">
  <?php do_action( 'shams_solar_before_slider' ); ?>

  <?php if( get_theme_mod('shams_solar_slider_arrows', false) != '' || get_theme_mod( 'shams_solar_enable_disable_slider', false) != ''){ ?>
    <section id="slider">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('shams_solar_slider_speed', 3000)); ?>"> 
        <?php $shams_solar_slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'shams_solar_slide_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $shams_solar_slider_pages[] = $mod;
            }
          }
          if( !empty($shams_solar_slider_pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $shams_solar_slider_pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <?php if(has_post_thumbnail()){
                the_post_thumbnail();
              } else{?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/slider.png" alt="" />
              <?php } ?>
            <div class="carousel-caption">
              <div class="inner_carousel">
                <?php if( get_theme_mod('shams_solar_slider_title',true) != ''){ ?>
                  <h1 class="text-capitalize"><?php the_title();?></h1>
                <?php } ?>
                <?php if( get_theme_mod('shams_solar_slider_content',true) != ''){ ?>
                  <p><?php $excerpt = get_the_excerpt(); echo esc_html( shams_solar_string_limit_words( $excerpt, esc_attr(get_theme_mod('shams_solar_slider_excerpt_number','20')))); ?></p>
                <?php } ?>
                <?php if (get_theme_mod( 'shams_solar_slider_button',true) != '' || get_theme_mod( 'shams_solar_show_hide_slider_button',true) != ''){ ?>
                  <?php if( get_theme_mod('shams_solar_slider_button_text','Discover More') != ''){ ?>
                    <div class ="readbutton mt-md-4">
                      <a href="<?php the_permalink(); ?>"> <i class="<?php echo esc_attr(get_theme_mod('shams_solar_slider_button_icon_changer','far fa-hand-point-right'));?> pe-1"></i><?php echo esc_html(get_theme_mod('shams_solar_slider_button_text','Discover More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('shams_solar_slider_button_text','Discover More'));?></span></a>
                    </div>
                  <?php } ?>
                <?php } ?>
              </div>
            </div>
          </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','shams-solar' );?></span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','shams-solar' );?></span>
        </a>
      </div> 
      <div class="clearfix"></div>
    </section> 
  <?php }?> 

  <?php do_action( 'shams_solar_after_slider' ); ?>

  <?php if( get_theme_mod('shams_solar_service_section_title') != '' || get_theme_mod('shams_solar_service_section_category') != '' || get_theme_mod('shams_solar_text') != ''){ ?>
    <section id="services" class="py-5 text-center">
      <div class="container">
        <?php if( get_theme_mod('shams_solar_service_section_title') != ''){ ?>
          <h2 class="text-capitalize"><?php echo esc_html(get_theme_mod('shams_solar_service_section_title','')); ?>
          </h2>
          <img role="img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/headline.png'); ?>" alt="<?php esc_attr_e( 'Headline Image','shams-solar' );?>">
        <?php }?>
        <div class="row">
          <?php 
            $shams_solar_catData=  get_theme_mod('shams_solar_service_section_category');
            if($shams_solar_catData){
            $page_query = new WP_Query(array( 'category_name' => esc_html( $shams_solar_catData ,'shams-solar')));?>
              <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                <div class="col-lg-4 col-md-4">
                  <div class="service-box my-3">
                    <div class="service-para">
                      <?php the_post_thumbnail(); ?>
                      <p class="mb-0 p-4"><?php $excerpt = get_the_excerpt(); echo esc_html( shams_solar_string_limit_words( $excerpt,15 ) ); ?></p>
                    </div>
                    <h3 class="p-2"><a href="<?php echo esc_url( get_permalink() );?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
                  </div>
                </div>
                <?php endwhile;
              wp_reset_postdata();
            } ?>
        </div>
      </div>
    </section>
  <?php }?>

  <?php do_action( 'shams_solar_after_services' ); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post();?>
      <?php the_content(); ?>
    <?php endwhile; // End of the loop.
    wp_reset_postdata(); ?>
  </div>
</main>

<?php get_footer(); ?>