<?php
/**
 * Template Name: Conditions of Use
 * Theme Name: _SsS
 *
 * @package _sSs
 */

get_header(); ?>

  <div id="conditions-of-use-primary" class="site-primary">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">

        <main id="conditions-of-use-main" class="site-main small-12 large-8 cell" role="main">

          <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
              </header><!-- .entry-header -->

              <div class="entry-content">

                <h3><?php echo bloginfo( 'name' ); ?> owns this Web site.</h3>
                <p>
                  <?php echo bloginfo( 'name' ); ?> ("The Site Owner") either owns the intellectual property rights in the underlying HTML, text, audio clips, video clips and other content ("the Content") that is made available to you on this Web site, or has obtained the permission of the owner of the intellectual property to use the Content on this Web site.
                </p>
                <h5>
                  <strong>You may use this Web site only if you agree to the following terms.</strong>
                </h5>
                <p>
                  The Site Owner grants to you a limited license to display on your computer, print, download and use all Content that is made available to you on this Web site, only if you agree to the following terms:
                </p>
                <ol>
                  <li>
                    You will only use the Web site for personal, educational or non-commercial purposes.
                  </li>
                  <li>
                    You will not modify the Content of the web site and you will display the Copyright notice and this Conditions of Use on each copy of the Web site.
                  </li>
                  <li>
                    You agree that you will not violate (or attempt to violate) the security of this Web site by hacking, cracking, mail bombing, mounting a denial of service attack, breaching of netiquette, or any other similar malicious, careless or negligent conduct.
                  </li>
                  <li>
                    You agree not to upload content or computer code of any type to this Web site.
                  </li>
                  <li>
                    You acknowledge that you have no right to the intellectual property associated with this Web site and that you have only a limited right to use this Web site.
                  </li>
                  <li>
                    You acknowledge that The Site Owner does not warrant the accuracy or availability of this Web site.
                  </li>
                  <li>
                    You acknowledge that The Site Owner is not responsible for any loss, damage, or injury that you may have as a result of your use of this Web site.
                  </li>
                  <li>
                    You agree to be bound by the laws applicable in Canada with respect to your use of the Web site and you agree that any court proceedings relating to your use of the Web site will take place in Canada.
                  </li>
                  <li>
                    You agree to grant The Site Owner all intellectual property rights in the content of any e-mail that you send to The Site Owner.
                  </li>
                </ol>
                <h5>
                  <strong>If you do not agree to all of these terms, you must log off this Web site immediately.</strong>
                </h5>

                <hr />

                <h3>Disclaimer</h3>
                <p>
                  The Site Owner does not guarantee the quality, accuracy, or completeness of any information on this Web site. This Web site may include inaccuracies or typographical errors and the information is provided without warranty or condition of any kind.
                </p>

                <hr />

                <h3>Privacy</h3>
                <p>
                  The Site Owner recognizes that the privacy and confidentiality of a person's personal information is important. The Site Owner has developed a Web Privacy Code that outlines how The Site Owner obtains, retains, and uses personal information obtained through this Web site.
                </p>
                <h5>
                  <strong>This website may contain links to other websites. The Site Owner is not responsible for the privacy practices of such websites.</strong>
                </h5>

                <hr />

                <h3>Trade Marks</h3>
                <p>
                  The Site Owner logo, crest and banner are registered Trademarks of The Site Owner.
                </p>
                <p>
                  All product names mentioned on this Web site are the trademarks of their respective owners.
                </p>

                <hr />

                <h3>No Endorsement</h3>
                <p>
                  The Site Owner does not endorse any products or services that may be referred to in, or linked to, this Web site.
                </p>

                <hr />

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

        </main><!-- #conditions-of-use-main -->
        <?php get_sidebar(); ?>

      </div><!-- .grid-x grid-padding-x -->
    </div><!-- .grid-container -->
  </div><!-- #conditions-of-use-primary -->

<?php get_footer(); ?>
