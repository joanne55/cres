<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Twenty Minutes
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
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

<div id="preloader">
  <div id="status">&nbsp;</div>
</div>

<a class="screen-reader-text skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'twenty-minutes' ); ?></a>

<div id="pageholder" <?php if( get_theme_mod( 'twenty_minutes_box_layout' ) ) { echo 'class="boxlayout"'; } ?>>

<div class="header-top">
  <div class="row m-0">
    <div class="col-lg-7 col-md-7">
      <div class="social-icons">
        <?php if ( get_theme_mod('twenty_minutes_fb_link') != "") { ?>
          <a title="<?php esc_attr('facebook', 'twenty-minutes'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('twenty_minutes_fb_link')); ?>"><i class="fab fa-facebook-f"></i></a> 
        <?php } ?>
        <?php if ( get_theme_mod('twenty_minutes_twitt_link') != "") { ?>
          <a title="<?php esc_attr('twitter', 'twenty-minutes'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('twenty_minutes_twitt_link')); ?>"><i class="fab fa-twitter"></i></a>
        <?php } ?>
        <?php if ( get_theme_mod('twenty_minutes_linked_link') != "") { ?> 
          <a title="<?php esc_attr('linkedin', 'twenty-minutes'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('twenty_minutes_linked_link')); ?>"><i class="fab fa-linkedin-in"></i></a>
        <?php } ?>
        <?php if ( get_theme_mod('twenty_minutes_insta_link') != "") { ?> 
          <a title="<?php esc_attr('instagram', 'twenty-minutes'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('twenty_minutes_insta_link')); ?>"><i class="fab fa-instagram"></i></a>
        <?php } ?>
        <?php if ( get_theme_mod('twenty_minutes_youtube_link') != "") { ?> 
          <a title="<?php esc_attr('youtube', 'twenty-minutes'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('twenty_minutes_youtube_link')); ?>"><i class="fab fa-youtube"></i></a>
        <?php } ?>
      </div>
    </div>
    <div class="col-lg-5 col-md-5 p-0">
      <div class="info-box">
        <span><i class="fas fa-phone"></i><?php echo esc_html(get_theme_mod ('twenty_minutes_phone_number','')); ?></span>
        <span><i class="far fa-envelope"></i><?php echo esc_html(get_theme_mod ('twenty_minutes_email_address','')); ?></span>
      </div>
    </div>
  </div>
</div>

<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-8 col-8">
        <div class="logo">
          <?php twenty_minutes_the_custom_logo(); ?>
          <div class="site-branding-text">
            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
              <span class="site-description"><?php echo esc_html( $description ); ?></span>
            <?php endif; ?> 
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-md-4 col-4">
        <div class="toggle-nav">
          <?php if(has_nav_menu('primary')){ ?>
            <button role="tab"><?php esc_html_e('MENU','twenty-minutes'); ?></button>
          <?php }?>
        </div>
        <div id="mySidenav" class="nav sidenav">
          <nav id="site-navigation" class="main-nav" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu','twenty-minutes' ); ?>">
            <?php if(has_nav_menu('primary')){
              wp_nav_menu( array( 
                'theme_location' => 'primary',
                'container_class' => 'main-menu clearfix' ,
                'menu_class' => 'clearfix',
                'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                'fallback_cb' => 'wp_page_menu',
              ) ); 
            } ?>
            <a href="javascript:void(0)" class="close-button"><?php esc_html_e('CLOSE','twenty-minutes'); ?></a>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>