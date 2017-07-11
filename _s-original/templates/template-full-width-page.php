<?php
/**
 * Template Name: Full Width Page
 * Theme Name: _SsS
 *
 * @package _sSs
 */

get_header(); ?>
get_header(); ?>

  <div id="page-primary" class="site-primary">
    <div class="row">
      <main id="page-main" class="site-main small-12 columns" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'template-parts/content', 'page' ); ?>

          <?php
            // If comments are open or we have at least one comment, load up the comment template
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;
          ?>

        <?php endwhile; // end of the loop. ?>

      </main><!-- #page-main -->
    </div><!-- .row -->
  </div><!-- #page-primary -->

<?php get_footer(); ?>
