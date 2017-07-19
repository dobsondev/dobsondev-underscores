<?php
/**
 * Template Name: Web Privacy Code
 * Theme Name: _SsS
 *
 * @package _sSs
 */

get_header(); ?>

  <div id="web-privacy-code-primary" class="site-primary">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">

        <main id="web-privacy-code-main" class="site-main small-12 large-8 cell" role="main">

          <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
              </header><!-- .entry-header -->

              <div class="entry-content">

                <ol>
                  <li>
                    <p>
                      <?php echo bloginfo('name'); ?> ("The Site Owner") recognizes that the privacy and confidentiality of a person's personal information is important. All personal information is managed according to the Alberta <i>Freedom of Information and Protection of Privacy Act</i>. This means that:
                    </p>
                    <p style="padding-left: 1.5em;">
                      <strong>1. 01</strong> &middot; You will be informed, at the point of collection, that your personal information is being collected and the purpose for which it is being collected;<br />
                      <strong>1. 02</strong> &middot; You have a right of access to your information;<br />
                      <strong>1. 03</strong> &middot; You have control over how The Site Owner obtains, uses, and discloses your personal information;<br />
                      <strong>1. 04</strong> &middot; All uses of information are subject to you not having refused or withdrawn consent, unless disclosure is made for legal purposes.
                    </p>
                  </li>

                  <li>
                    <p>
                      Even if you do nothing more during your visit than browse through the web site, read pages, or download information, please be aware that The Site Owner automatically gathers and stores certain information about your visit. This information does not identify you personally. The Site Owner collects and stores only the following information about your visit:
                    </p>
                    <p style="padding-left: 1.5em;">
                      <strong>2. 01</strong> &middot; The Internet domain and Internet Protocol (IP) address from which you access The Site Owner's web site;<br />
                      <strong>2. 02</strong> &middot; The type of browser and operating system used to access The Site Owner's site;<br />
                      <strong>2. 03</strong> &middot; The date and time you access The Site Owner's site;<br />
                      <strong>2. 04</strong> &middot; The pages you visit on The Site Owner's site; and<br />
                      <strong>2. 05</strong> &middot; If you are linked to The Site Owner web site from another web site, the address of that web site.
                    </p>
                    <p>
                      The Site Owner uses this information to help us make our site more useful to visitors, to learn about the number of visitors to our site and the types of technology our visitors use. The Site Owner does not track or record information about individuals and their visits.
                    </p>
                  </li>

                  <li>
                    <p>
                      The Site Owner web site may contain links to other sites. The Site Owner is not responsible for the content and privacy practices of other web sites and The Site Owner encourages you to examine the privacy policy and disclaimer of each site and make your own decisions regarding the disclosure of your personal information to that site.
                    </p>
                  </li>

                  <li>
                    <p>
                      The Site Owner may use electronic "cookies". A cookie is a small amount of data that is transferred to your browser by a web server. It cannot be executed as code or deliver viruses. A session ID, along with time and date and other information may be placed in the cookie. This information is used to provide the user with an enriched experience while using The Site Owner's web site. Once the user leaves The Site Owner's web site, the session is considered done and the cookie expires. The Site Owner does not build profiles of users through the use of cookies and does not attempt to track individual users through the use of cookies. In order for a cookie to be written to your computer, cookies must be enabled by your browser. Most browsers are initially set to accept cookies. You can set your browser to notify you when you receive a cookie, giving you the chance to decide whether to accept it. If you decide to refuse a cookie, you may find that the web site does not behave as designed.
                    </p>
                  </li>

                  <li>
                    <p>
                      If you choose to provide The Site Owner with personal information in an e-mail or by filling out an electronic form and submit it to The Site Owner through our web site, The Site Owner will use that information to respond to your message and to assist us to provide you the requested information or service.
                    </p>
                  </li>

                  <li>
                    <p>
                      E-mail messages are subject to the Act. The personal information you share with The Site Owner is provided only to those areas that are required to carry out the business that relates to you. All e-mail messages sent or received are the property of The Site Owner and may be accessed by department heads or their delegates without further consent of the author. All e-mail messages required to be retained by law will be printed and maintained through a records management process.
                    </p>
                  </li>

                  <li>
                    <p>
                      Security measures are implemented in order that web services remain available to all users. The Site Owner computer system employs software programs to monitor network traffic to identify attempts to tamper with information, or to otherwise cause damage.
                    </p>
                  </li>
                </ol>

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

        </main><!-- #web-privacy-code-main -->
        <?php get_sidebar(); ?>

      </div><!-- .grid-x grid-padding-x -->
    </div><!-- .grid-container -->
  </div><!-- #web-privacy-code-primary -->

<?php get_footer(); ?>
