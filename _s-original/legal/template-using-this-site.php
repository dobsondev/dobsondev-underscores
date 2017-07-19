<?php
/**
 * Template Name: Using This Site
 * Theme Name: _SsS
 *
 * @package _sSs
 */

get_header(); ?>

  <div id="using-this-site-primary" class="site-primary">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">

        <main id="using-this-site-main" class="site-main small-12 large-8 cell" role="main">

          <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
              </header><!-- .entry-header -->

              <div class="entry-content">

                <p>
                  <?php echo bloginfo('name'); ?> has designed this website to operate on a wide range of web browsers and operating systems. Our goal is to provide website access to all users, regardless of what technology they are using.
                </p>

                <h3>This website is viewable in:</h3>

                <ul>
                  <li>Any modern standards compliant web browser</li>
                  <li>Mozilla Firefox&nbsp;32 and&nbsp;higher (Windows, Mac and Linux)</li>
                  <li>Safari&nbsp;7 and higher&nbsp;(Mac, Windows)</li>
                  <li>Chrome 30 and higher (Windows, Mac and Linux)</li>
                </ul>

                <h3>Mobile Devices</h3>
                <p>
                  This website has been designed to work on iPhone, Blackberry, Android, and Windows mobile devices. On most mobile devices, you should receive the full version of the website. On devices that do not have a full graphical browser, you should receive a simplified version of the website.
                </p>

                <h3>PDF Documents</h3>
                <p>
                  Some documents on this website are available in a PDF format. Adobe Acrobat is needed to open these files. Acrobat is available for download at no charge from <a href="http://get.adobe.com/reader/">Adobe</a>, or some web browsers provide their own PDF viewer.
                </p>

                <h3>Videos</h3>
                <p>
                  Videos on this website are provided in HTML5 format, which should be supported by recent browsers. Most videos should be embedded via YouTube so they can also be easily viewed on mobile devices as well.
                </p>

                <h3>Audio Clips</h3>
                <p>
                  Audio clips on this website are provided in <i>.mp3</i> format and require a suitable audio player. Most modern browsers have this built in.
                </p>

                <h3>Printing Pages</h3>
                <p>
                  All pages on this website should print on regular 8.5" x 11" paper, free of navigation and non-content design elements. You should be able to print all site pages without colour or graphics. You do not require a special print-friendly version. All pages on this site can be printed using your browser's "Print" command.
                </p>

                <h3>Resizing Text on This Website</h3>
                <p>
                  If you find text on this website difficult to read, most web browsers will let you change the default text size. You can easily set this yourself, and the help files in your browser will give you exact instructions.
                </p>

                <h3>Web Applications</h3>
                <p>
                  Some <?php echo bloginfo('name'); ?> web applications may have their own requirements.
                </p>

                <?php
                  wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_sSs' ),
                    'after'  => '</div>',
                  ) );
                ?>
              </div><!-- .entry-content -->

              <footer class="entry-footer">
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

        </main><!-- #using-this-site-main -->
        <?php get_sidebar(); ?>

      </div><!-- .grid-x grid-padding-x -->
    </div><!-- .grid-container -->
  </div><!-- #using-this-site-primary -->

<?php get_footer(); ?>
