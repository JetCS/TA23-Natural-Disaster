<?php
/**
 * Template part for displaying posts
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="blogger p-2 mb-4">
    <div class="post-image">
      <?php
        if ( ! is_single() ) {
          // If not a single post, highlight the gallery.
          if ( get_post_gallery() ) {
            echo '<div class="entry-gallery">';
              echo ( get_post_gallery() );
            echo '</div>';
          };
        };
      ?>
    </div>
    <h2 class="py-2 mb-0"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>" class="text-capitalize"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
    <?php if( get_theme_mod( 'shams_solar_date_hide',true) != '' || get_theme_mod( 'shams_solar_comment_hide',true) != '' || get_theme_mod( 'shams_solar_author_hide',true) != '') { ?>
      <div class="post-info py-1 px-2 mb-2">
        <?php if( get_theme_mod( 'shams_solar_date_hide',true) != '') { ?>
          <span class="entry-date me-3"><i class="<?php echo esc_attr(get_theme_mod('shams_solar_post_date_icon_changer','fa fa-calendar'));?> me-1"></i> <a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><?php echo esc_html( get_theme_mod('shams_solar_blog_post_metabox_seperator') ); ?>
        <?php } ?>
        <?php if( get_theme_mod( 'shams_solar_author_hide',true) != '') { ?>
          <span class="entry-author me-3"><i class="<?php echo esc_attr(get_theme_mod('shams_solar_post_author_icon_changer','fa fa-user'));?> me-1"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><?php echo esc_html( get_theme_mod('shams_solar_blog_post_metabox_seperator') ); ?>
        <?php } ?>
        <?php if( get_theme_mod( 'shams_solar_comment_hide',true) != '') { ?>
          <i class="<?php echo esc_attr(get_theme_mod('shams_solar_post_comment_icon_changer','fas fa-comments'));?> me-3"></i><span class="entry-comments me-1"><?php comments_number( __('0 Comments','shams-solar'), __('0 Comments','shams-solar'), __('% Comments','shams-solar') ); ?></span>
        <?php } ?>
        <?php if( get_theme_mod( 'shams_solar_post_time_show',false) != '') { ?>
          <span class="entry-time"><i class="fas fa-clock"></i> <?php echo esc_html( get_the_time() ); ?></span>
        <?php }?>
      </div>
    <?php }?>
    <?php if(get_theme_mod('shams_solar_blog_description') == 'Post Content'){ ?>
      <div class="text"><?php the_content(); ?></div>
    <?php }
    if(get_theme_mod('shams_solar_blog_description', 'Post Excerpt') == 'Post Excerpt'){ ?>
      <?php if(get_the_excerpt()) { ?>
        <div class="text"><p class="m-0"><?php $excerpt = get_the_excerpt(); echo esc_html( shams_solar_string_limit_words( $excerpt, esc_attr(get_theme_mod('shams_solar_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('shams_solar_post_excerpt_suffix','{...}') ); ?></p></div>
      <?php } ?>
    <?php }?>
    <?php if( get_theme_mod('shams_solar_button_text','READ MORE') != ''){ ?>
      <div class="post-link my-3 text-end">
        <a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html(get_theme_mod('shams_solar_button_text','READ MORE'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('shams_solar_button_text','READ MORE'));?></span></a>
      </div>
    <?php } ?>
  </div>
</article>
