<?php
/**
 * Template Name: Home Page
 * Theme Name: _SsS
 *
 * @package _sSs
 */

get_header(); ?>

  <div id="home-page-primary" class="site-primary">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">

        <main id="home-page-main" class="site-main small-12 large-8 cell" role="main">

          <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <header id="home-page-entry-header" class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
              </header><!-- .entry-header -->

              <div id="home-page-entry-content" class="entry-content">
                <?php the_content(); ?>
                <?php
                  wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_sSs' ),
                    'after'  => '</div>',
                  ) );
                ?>
              </div><!-- .entry-content -->

              <footer id="home-page-entry-footer" class="entry-footer">
                <?php edit_post_link( esc_html__( 'Edit', '_sSs' ), '<span class="edit-link">', '</span>' ); ?>
              </footer><!-- .entry-footer -->
            </article><!-- #post-## -->

            <?php
              // If comments are open or we have at least one comment, load up the comment template
              if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif;
            ?>

          <?php endwhile; // end of the loop. ?>

        </main><!-- #home-page-main -->
        <?php get_sidebar(); ?>

      </div><!-- .grid-x grid-padding-x -->
    </div><!-- .grid-container -->
  </div><!-- #home-page-primary -->

<?php get_footer(); ?>