<?php
/**
 * The Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Twenty Minutes
 */

get_header(); ?>

<div id="content">
  <?php
    $hidcatslide = get_theme_mod('twenty_minutes_hide_categorysec', '1');
    if( $hidcatslide == ''){
  ?>  
    <section id="catsliderarea">
      <div class="catwrapslider">
        <div class="owl-carousel">
          <?php if( get_theme_mod('twenty_minutes_slidersection',false) ) { ?>
          <?php $queryvar = new WP_Query('cat='.esc_attr(get_theme_mod('twenty_minutes_slidersection',true)));
            while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>
              <div class="slidesection"> 
                <?php the_post_thumbnail( 'full' ); ?>
                <div class="slider-box">
                  <h3><?php the_title(); ?></h3>
                  <?php if ( get_theme_mod('twenty_minutes_button_text') != "") { ?>
                    <div class="read-btn">
                      <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('twenty_minutes_button_text','Read More','twenty-minutes')); ?></a>
                    </div>
                  <?php }?>
                </div>
              </div>
            <?php endwhile; wp_reset_postdata(); ?>
          <?php } ?>
        </div>
      </div>
      <div class="clear"></div>
    </section>
  <?php } ?>

  <section id="second-sec">
    <div class="container">
      <?php if ( get_theme_mod('twenty_minutes_section_text') != "") { ?>
        <h6><?php echo esc_html(get_theme_mod('twenty_minutes_section_text','')); ?></h6>
      <?php } ?>
      <?php if ( get_theme_mod('twenty_minutes_section_title') != "") { ?>
        <h3><?php echo esc_html(get_theme_mod('twenty_minutes_section_title','')); ?></h3>
        <div class="line-box"></div>
      <?php } ?>
      <div class="inner-main-box">
        <div class="row">
          <?php if( get_theme_mod('twenty_minutes_services_section',false) ) { ?>
          <?php $queryvar = new WP_Query('cat='.esc_attr(get_theme_mod('twenty_minutes_services_section',true)));
            while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>
              <div class="col-lg-4 col-md-4">
                <div class="inner-service-box"> 
                  <?php the_post_thumbnail( 'full' ); ?>
                  <div class="title-box">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  </div>
                </div>
              </div>
            <?php endwhile; wp_reset_postdata(); ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

  <section id="content-creation">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </section>
</div>

<?php get_footer(); ?>