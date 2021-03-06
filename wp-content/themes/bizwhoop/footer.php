<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package bizwhoop
 */
?>
<!--==================== bizwhoop-FOOTER AREA ====================-->
<footer>
    <div class="overlay">
      <?php if ( is_active_sidebar( 'footer_widget_area' ) ) { ?>
      <div class="bizwhoop-footer-widget-area">
        <div class="container">
          <div class="row">
            <?php  dynamic_sidebar( 'footer_widget_area' ); ?>
          </div>
          <!--/row-->
        </div>
        <!--/container-->
      </div>
      <?php } ?>
      <div class="bizwhoop-footer-copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
			<p>&copy; <?php echo date_i18n(__('Y','bizwhoop')).' '; bloginfo( 'name' ); ?> | <?php printf( esc_html__( 'Theme by %1$s', 'bizwhoop' ),  '<a href="'.esc_url('https://www.themeansar.com').'" rel="designer">Theme Ansar</a>' ); ?></p>
			</div>
			
			
            <div class="col-md-6 text-right text-xs">
              <ul class="bizwhoop-social">
                <?php if(get_theme_mod('social_link_facebook','#')) { ?>
                <li><span class="icon-soci"> <a href="<?php echo esc_url(get_theme_mod('social_link_facebook')); ?>" <?php if(get_theme_mod('Social_link_facebook_tab')==1){ echo "target='_blank'"; } ?> ><i class="fa fa-facebook"></i></a></span></li>
                <?php } if(get_theme_mod('social_link_twitter','#')) { ?>
            <li><span class="icon-soci"><a href="<?php echo esc_url(get_theme_mod('social_link_twitter')); ?>" <?php if(get_theme_mod('Social_link_twitter_tab')==1){ echo "target='_blank'"; } ?> ><i class="fa fa-twitter"></i></a></span></li>
            <?php } if(get_theme_mod('social_link_linkedin','#')) { ?>
            <li><span class="icon-soci"><a href="<?php echo esc_url(get_theme_mod('social_link_linkedin')); ?>" <?php if(get_theme_mod('Social_link_linkedin_tab')==1){ echo "target='_blank'"; } ?> ><i class="fa fa-linkedin"></i></a></span></li>
            <?php } if(get_theme_mod('social_link_google','#')) { ?>
            <li><span class="icon-soci"><a href="<?php echo esc_url(get_theme_mod('social_link_google')); ?>" <?php if(get_theme_mod('Social_link_google_tab')==1){ echo "target='_blank'"; } ?> ><i class="fa fa-google-plus"></i></a></span></li>
            <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/overlay-->
  </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>