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
    <div class="grid-container">
      <div class="footer-widgets grid-x grid-padding-x">
        <div class="bottom-footer-widget small-12 medium-6 large-3 cell" id="bottom-footer-widget-1">
          <?php dynamic_sidebar( 'footer-1' ); ?>
        </div>
        <div class="bottom-footer-widget small-12 medium-6 large-3 cell" id="bottom-footer-widget-2">
          <?php dynamic_sidebar( 'footer-2' ); ?>
        </div>
        <div class="bottom-footer-widget small-12 medium-6 large-3 cell" id="bottom-footer-widget-3">
          <?php dynamic_sidebar( 'footer-3' ); ?>
        </div>
        <div class="bottom-footer-widget small-12 medium-6 large-3 cell" id="bottom-footer-widget-4">
          <?php dynamic_sidebar( 'footer-4' ); ?>
        </div>
      </div><!-- .footer-widgets -->
    </div><!-- .grid-container -->
  </footer><!-- #bottom-footer -->

  <div id="bottom-bar">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="site-info small-12 cell">
          &copy; Copyright <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> All Rights Reserved &nbsp;|&nbsp; Website Design &amp; Development by <a href="https://dobsondev.com/" title="DobsonDev | Web Development" target="_blank">DobsonDev</a>
          <br />
          Proudly Powered by <a href="http://wordpress.org/" title="WordPress" target="_blank">WordPress</a>
        </div><!-- .site-info -->
      </div><!-- .grid-x grid-padding-x -->
    </div><!-- .grid-container -->
  </div><!-- #bottom-bar -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
