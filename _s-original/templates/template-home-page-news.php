<?php
/**
 * Template Name: Home Page News
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
              <header class="entry-header">
                <h1 class="home-page-title">Home Page Title</h1>
                <hr />
              </header><!-- .entry-header -->

              <div class="entry-content">
                <?php the_content(); ?>
                <?php
                wp_link_pages( array(
                  'before' => '<div class="page-links">' . __( 'Pages:', 'naicam' ),
                  'after'  => '</div>',
                ) );
                ?>
                <div id="home-page-news-feed">
                  <h2> News &amp; Notices </h2>
                  <hr />
                  <?php
                  $args = array(
                    'posts_per_page'   => 3,
                    'offset'           => 0,
                    'category'         => '',
                    'orderby'          => 'post_date',
                    'order'            => 'DESC',
                    'include'          => '',
                    'exclude'          => '',
                    'meta_key'         => '',
                    'meta_value'       => '',
                    'post_type'        => 'post',
                    'post_mime_type'   => '',
                    'post_parent'      => '',
                    'post_status'      => 'publish',
                    'suppress_filters' => true );
                  $posts = get_posts( $args );
                  if ($posts) {
                    foreach ( $posts as $post ) {
                      setup_postdata($post);
                      echo '<div class="home-news-item">';
                      the_title("<h3 class=\"home-news-title\">", "</h3>");
                      echo '<div class="home-news-content">';
                      echo '<span class="home-news-date">';
                      the_time(get_option('date_format'));
                      echo '</span>'; // .home-news-date
                      the_content();
                      echo '</div>'; // .home-news-content
                      echo '</div>'; // .home-news-item
                    }
                  }
                  ?>
                </div>
              </div><!-- .entry-content -->

              <footer class="entry-footer">
                <a href="/news-archive/" id="posts-page-link">See All News &amp; Notices &#155;&#155;</a>
              </footer><!-- .entry-footer -->
            </article><!-- #post-## -->

          <?php endwhile; // end of the loop. ?>

        </main><!-- #home-page-main -->
        <?php get_sidebar(); ?>

      </div><!-- .grid-x grid-padding-x -->
    </div><!-- .grid-container -->
  </div><!-- #home-page-primary -->

<?php get_footer(); ?>
