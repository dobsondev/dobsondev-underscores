<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _sSs
 */
?>

  </div><!-- #content -->

	<footer id="bottom-footer" class="site-footer" role="contentinfo">
    <div class="footer-widgets row">
      <div class="bottom-footer-widget small-12 medium-6 large-3 columns" id="bottom-footer-widget-1">
        <?php dynamic_sidebar( 'footer-1' ); ?>
      </div>
      <div class="bottom-footer-widget small-12 medium-6 large-3 columns" id="bottom-footer-widget-2">
        <?php dynamic_sidebar( 'footer-2' ); ?>
      </div>
      <div class="bottom-footer-widget small-12 medium-6 large-3 columns" id="bottom-footer-widget-3">
        <?php dynamic_sidebar( 'footer-3' ); ?>
      </div>
      <div class="bottom-footer-widget small-12 medium-6 large-3 columns" id="bottom-footer-widget-4">
        <?php dynamic_sidebar( 'footer-4' ); ?>
      </div>
    </div><!-- .footer-widgets -->
  </footer><!-- #bottom-footer -->

  <div id="bottom-bar">
    <div class="row">
      <div class="site-info">
        &copy; Copyright <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> All Rights Reserved &nbsp;|&nbsp; Website Design &amp; Development by <a href="http://dobsondev.com/" title="DobsonDev | Web Development" target="_blank">DobsonDev</a>
        <br />
        Proudly Powered by <a href="http://wordpress.org/" title="WordPress" target="_blank">WordPress</a>
      </div><!-- .site-info -->
    </div><!-- .row -->
  </div><!-- #bottom-bar -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
