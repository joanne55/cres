<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Twenty Minutes
 */
?>
<div id="footer">
	<div class="container">
    <?php if ( ! dynamic_sidebar( 'footer-1' ) ) : ?>
    <?php endif; // end footer widget area ?>
              
    <?php if ( ! dynamic_sidebar( 'footer-2' ) ) : ?>
    <?php endif; // end footer widget area ?>
  
    <?php if ( ! dynamic_sidebar( 'footer-3' ) ) : ?>
    <?php endif; // end footer widget area ?>
    
    <?php if ( ! dynamic_sidebar( 'footer-4' ) ) : ?>
    <?php endif; // end footer widget area ?>      
    <div class="clear"></div>
  </div>    
  <div class="copywrap">
  	<div class="container">
      <a href="<?php echo esc_url(TWENTY_MINUTES_FOOTER_LINK); ?>" target="_blank"><?php echo esc_html(get_theme_mod('twenty_minutes_copyright_line',__('Twenty Minutes WordPress Theme','twenty-minutes'))); ?></a>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>