<?php
/**
 * Template Name: Full Width Page
 * Theme Name: _SsS
 *
 * @package _sSs
 */

get_header(); ?>

  <div id="full-width-page-primary" class="site-primary">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">

        <main id="full-width-page-main" class="site-main small-12 cell" role="main">

          <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'page' ); ?>

            <?php
              // If comments are open or we have at least one comment, load up the comment template
              if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif;
            ?>

          <?php endwhile; // end of the loop. ?>

        </main><!-- #full-width-page-main -->

      </div><!-- .grid-x grid-padding-x -->
    </div><!-- .grid-container -->
  </div><!-- #full-width-page-primary -->

<?php get_footer(); ?>
