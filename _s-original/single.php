<?php
/**
 * The template for displaying all single posts.
 *
 * @package _sSs
 */

get_header(); ?>

	<div id="single-primary" class="site-primary">
		<div class="grid-container">
      <div class="grid-x grid-padding-x">

				<main id="single-main" class="site-main small-12 large-8 cell" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'single' ); ?>

					<?php the_post_navigation(); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>

				</main><!-- #single-main -->
				<?php get_sidebar(); ?>

			</div><!-- .grid-x grid-padding-x -->
    </div><!-- .grid-container -->
	</div><!-- #single-primary -->

<?php get_footer(); ?>
