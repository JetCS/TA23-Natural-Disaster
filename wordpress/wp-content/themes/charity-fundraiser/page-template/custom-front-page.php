<?php
/**
 * Template Name: Custom home page
 */
get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action('charity_fundraiser_above_slider_section'); ?>

  <?php if( get_theme_mod( 'charity_fundraiser_slider_hide') != '') { ?>
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="<?php echo esc_attr(get_theme_mod('charity_fundraiser_slider_speed',3000)); ?>"> 
        <?php $charity_fundraiser_content_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'charity_fundraiser_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $charity_fundraiser_content_pages[] = $mod;
            }
          }
          if( !empty($charity_fundraiser_content_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $charity_fundraiser_content_pages,
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
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/block-patterns/images/banner.png" alt="" />
              <?php } ?>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <?php if ( get_theme_mod('charity_fundraiser_slider_title',true) != '' ) {?>
                    <h1 class="animated fadeInDown"><?php esc_html(the_title()); ?></h1>
                  <?php }?>
                  <?php if ( get_theme_mod('charity_fundraiser_slider_content',true) != '' ) {?>
                    <p><?php $excerpt = get_the_excerpt(); echo esc_html( charity_fundraiser_string_limit_words( $excerpt, esc_attr(get_theme_mod('charity_fundraiser_slider_excerpt_number','25')))); ?></p>
                  <?php }?>
                  <?php if ( get_theme_mod('charity_fundraiser_slider_button_label','LEARN MORE') != '' && get_theme_mod('charity_fundraiser_slider_button',true) != '') {?>
                    <div class="more-btn my-3">
                      <a href="<?php esc_url(the_permalink()); ?>"><?php echo esc_html( get_theme_mod('charity_fundraiser_slider_button_label',__('LEARN MORE','charity-fundraiser')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('charity_fundraiser_slider_button_label',__('LEARN MORE','charity-fundraiser')) ); ?></span></a>
                    </div>
                  <?php }?>
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
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon py-2 px-3" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e('Previous','charity-fundraiser'); ?></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon py-2 px-3" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e('Next','charity-fundraiser'); ?></span>
        </a>
      </div>  
      <div class="clearfix"></div>
    </section>
  <?php }?>

  <?php do_action('charity_fundraiser_above_help_section'); ?>

  <?php if( get_theme_mod( 'charity_fundraiser_help_title') != '' || get_theme_mod( 'charity_fundraiser_image_post') != '' || get_theme_mod( 'charity_fundraiser_causes_title') != ''  || get_theme_mod( 'charity_fundraiser_help_category') != '') { ?>
    <section id="help" class="py-5">
      <div class="container">
        <?php if( get_theme_mod('charity_fundraiser_help_title') != ''){ ?>
          <h2 class="animated fadeInDown pb-1 text-center"><?php echo esc_html(get_theme_mod('charity_fundraiser_help_title','')); ?></h2>
          <div class="border-image mb-4 text-center">
            <img role="img" src="<?php echo esc_url( get_template_directory_uri().'/images/tittle-line.png' ); ?>" alt="<?php esc_attr_e('Title Border Image','charity-fundraiser'); ?>">
          </div>
        <?php }?>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <?php
            $charity_fundraiser_postData1 =  get_theme_mod('charity_fundraiser_image_post');
            if($charity_fundraiser_postData1){
              $args = array( 'name' => esc_html($charity_fundraiser_postData1 ,'charity-fundraiser'));
              $query = new WP_Query( $args );
              if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post(); ?>
                  <div class="box-image animated fadeInDown">
                    <?php the_post_thumbnail(); ?>
                  </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php else : ?>
                  <div class="no-postfound"></div>
                <?php
            endif; }?>
          </div>
          <div class="col-lg-6 col-md-6">
            <?php if( get_theme_mod('charity_fundraiser_causes_title') != ''){ ?>
              <h3 class="animated fadeInDown"><?php echo esc_html(get_theme_mod('charity_fundraiser_causes_title','')); ?></h3>
              <hr class="help mb-2">
            <?php }?>
            <?php 
            $charity_fundraiser_catData = get_theme_mod('charity_fundraiser_help_category');
              if($charity_fundraiser_catData){
                $page_query = new WP_Query(array( 'category_name' => esc_html( $charity_fundraiser_catData ,'charity-fundraiser')));?>
                <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                  <div class="help-box my-3">
                  <div class="row animated fadeInDown">
                    <div class="col-lg-3 col-md-3">
                      <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="col-lg-9 col-md-9">
                      <h4 class="pt-0"><a href="<?php esc_url(the_permalink()); ?>"><?php esc_html(the_title()); ?><span class="screen-reader-text"><?php esc_html(the_title()); ?></span></a></h4>
                      <p><?php $excerpt = get_the_excerpt(); echo esc_html( charity_fundraiser_string_limit_words( $excerpt,8 ) ); ?></p>
                    </div>
                  </div>
                </div>
              <?php endwhile;
              wp_reset_postdata();
            }
            ?>
          </div>
        </div>
      </div>
    </section>
  <?php }?>

  <?php do_action('charity_fundraiser_after_about_section'); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="entry-content"><?php the_content(); ?></div>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>