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
  </div><!-- #content-wrapper -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-widgets row">
      <div class="colophon-widget small-12 medium-6 large-3 columns" id="colophon-widget-1">
        <?php dynamic_sidebar( 'footer-1' ); ?>
      </div>
      <div class="colophon-widget small-12 medium-6 large-3 columns" id="colophon-widget-2">
        <?php dynamic_sidebar( 'footer-2' ); ?>
      </div>
      <div class="colophon-widget small-12 medium-6 large-3 columns" id="colophon-widget-3">
        <?php dynamic_sidebar( 'footer-3' ); ?>
      </div>
      <div class="colophon-widget small-12 medium-6 large-3 columns" id="colophon-widget-4">
        <?php dynamic_sidebar( 'footer-4' ); ?>
      </div>
    </div><!-- .footer-widgets -->
  </footer><!-- #colophon -->

  <div id="bottom-bar">
    <div class="row" id="bottom-bar-row">
      <div class="site-info">
        &copy; Copyright <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> All Rights Reserved &nbsp;|&nbsp; Website Design &amp; Development by <a href="http://dobsondev.com/" title="DobsonDev | Web Development" target="_blank">DobsonDev</a>
      </div><!-- .site-info -->
    </div><!-- #bottom-bar-row -->
  </div><!-- #bottom-bar -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
