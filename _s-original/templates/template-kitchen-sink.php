<?php
/**
 * Template Name: Kitchen Sink
 * Theme Name: _SsS
 *
 * @package _sSs
 */

get_header(); ?>

  <div id="kitchen-sink-primary" class="site-primary">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">

        <main id="kitchen-sink-main" class="site-main small-12 cell" role="main">

          <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <div class="entry-content">

                <p>
                  <h1>H1 - Primary header</h1>
                  <h2>H2 - Sub header</h2>
                  <h3>H3 - Sub header</h3>
                  <h4>H4 - Sub header</h4>
                  <h5>H5 - Sub header</h5>
                  <h6>H6 - Sub header</h6>
                </p>

                <h4>Paragraph (&lt;p&gt;) Examples:</h4>
                <p>
                  A small paragraph to <em>emphasis</em> and show <strong>important</strong> bits. We can also <u>underline</u> things. Tousled drinking vinegar occupy, readymade vice post-ironic mustache vaporware lomo organic fap brunch health goth cronut. Chicharrones meggings chillwave, organic VHS coloring book fam vice kinfolk iceland four loko woke.
                </p>

                <p>
                  Meh craft beer +1, aesthetic before they sold out 3 wolf moon pork belly offal venmo roof party. Succulents thundercats pabst wayfarers, vinyl raw denim migas sriracha chia fixie ramps microdosing kale chips. Stumptown green juice +1 edison bulb, bushwick tbh VHS kale chips heirloom master cleanse williamsburg.
                </p>

                <h4>Horizontal Link (&lt;hr&gt;) Example:</h4>
                <p>
                  <hr />
                </p>

                <h4>Unordered List (&lt;ul&gt;) Example:</h4>
                <ul>
                  <li>This is a list item</li>
                  <li>So is this - there could be more</li>
                  <li>Make sure to style list items to:
                    <ul>
                      <li>Not forgetting child list items</li>
                      <li>Not forgetting child list items</li>
                      <li>Not forgetting child list items</li>
                      <li>Not forgetting child list items</li>
                    </ul>
                  </li>
                  <li>A couple more</li>
                  <li>top level list items</li>
                </ul>

                <h4>Ordered List (&lt;ol&gt;) Example:</h4>
                <ol>
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                  <li>Aliquam tincidunt mauris eu risus.
                    <ol>
                      <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                      <li>Aliquam tincidunt mauris eu risus.</li>
                    </ol>
                  </li>
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                  <li>Aliquam tincidunt mauris eu risus.
                </ol>

                <h4>Table (&lt;table&gt;) Example:</h4>
                <table>
                  <tr>
                    <th>Table Heading</th>
                    <th>Table Heading</th>
                  </tr>
                  <tr>
                    <td>table data</td>
                    <td>table data</td>
                  </tr>
                  <tr>
                    <td>table data</td>
                    <td>table data</td>
                  </tr>
                  <tr>
                    <td>table data</td>
                    <td>table data</td>
                  </tr>
                  <tr>
                    <td>table data</td>
                    <td>table data</td>
                  </tr>
                </table>

                <h4>Blockquote (&lt;blockquote&gt;) Example</h4>
                <blockquote>
                  <p>
                    “Ooh - a blockquote! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.”
                  </p>
                </blockquote>

                <h4>Code (&lt;pre&gt;&lt;code&gt;) Example:</h4>
                <p>
  <pre><code>#header h1 a {
    display: block;
    width: 300px;
    height: 80px;
  }</code></pre>
                </p>

                <h5>Other phrase examples:</h5>
                <p>
                  &lt;em&gt; Renders as <em>emphasized text</em><br />
                  &lt;strong&gt; Defines <strong>important text</strong><br />
                  &lt;code&gt; Defines a <code>piece of computer code</code><br />
                  &lt;samp&gt; Defines <samp>sample output from a computer program</samp><br />
                  &lt;kbd&gt;  Defines <kbd>keyboard input</kbd><br />
                  &lt;var&gt;  Defines a <var>variable</var>
                </p>

                <h4>Definition List (&lt;dl&gt;) Example:</h4>
                <dl>
                  <dt>Word One</dt>
                  <dd>
                    Definition of word one... Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eacommodo consequat.
                  </dd>
                  <dt>Word Two</dt>
                  <dd>
                    Definition of word two... Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaaliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eacommodo consequat.
                  </dd>
                </dl>

                <h2>Libraries</h2>
                <hr />

                <h4>Font Awesome</h4>
                <h6><a href="http://fontawesome.io/" title="Font Awesome">http://fontawesome.io/</a></h6>
                <p>
                  <i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook<br />
                  <i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter<br />
                  <i class="fa fa-instagram" aria-hidden="true"></i> Instagram<br />
                  <i class="fa fa-linkedin-square" aria-hidden="true"></i> LinkedIn<br />
                  <i class="fa fa-google-plus-square" aria-hidden="true"></i> Google Plus<br />
                  <i class="fa fa-youtube-square" aria-hidden="true"></i> YouTube
                </p>

                <h4>JQuery Mask</h4>
                <h6><a href="https://igorescobar.github.io/jQuery-Mask-Plugin/" title="jQuery Mask Plugin">https://igorescobar.github.io/jQuery-Mask-Plugin/</a></h6>
                <p>
                  <input type="text" name="phone" data-mask="(000) 000 0000" />
                </p>

                <h2>Foundation Specific Stuff</h2>
                <hr />

                <h6><a href="http://foundation.zurb.com/sites/docs/kitchen-sink.html" title="Foundation Kitchen Sink" target="_blank">Click Here to See More Examples and Code for the Examples</a></h6>

                <h4>Form Example:</h4>
                <p>
                  <form>
                    <label>Input Label
                      <input type="text" placeholder=".small-12.columns" aria-describedby="exampleHelpText">
                    </label>
                    <p class="help-text" id="exampleHelpText">Here's how you use this input field!</p>
                    <label>
                      How many puppies?
                      <input type="number" value="100">
                    </label>
                    <label>
                      What books did you read over summer break?
                      <textarea placeholder="None"></textarea>
                    </label>
                    <label>Select Menu
                      <select>
                        <option value="husker">Husker</option>
                        <option value="starbuck">Starbuck</option>
                        <option value="hotdog">Hot Dog</option>
                        <option value="apollo">Apollo</option>
                      </select>
                    </label>
                    <div class="row">
                      <fieldset class="large-6 columns">
                        <legend>Choose Your Favorite</legend>
                        <input type="radio" name="pokemon" value="Red" id="pokemonRed" required><label for="pokemonRed">Red</label>
                        <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Blue</label>
                        <input type="radio" name="pokemon" value="Yellow" id="pokemonYellow"><label for="pokemonYellow">Yellow</label>
                      </fieldset>
                      <fieldset class="large-6 columns">
                        <legend>Check these out</legend>
                        <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
                        <input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label>
                        <input id="checkbox3" type="checkbox"><label for="checkbox3">Checkbox 3</label>
                      </fieldset>
                    </div>
                    <div class="row">
                      <div class="small-3 columns">
                        <label for="middle-label" class="text-right middle">Label</label>
                      </div>
                      <div class="small-9 columns">
                        <input type="text" id="middle-label" placeholder="Right- and middle-aligned text input">
                      </div>
                    </div>
                    <div class="input-group">
                      <span class="input-group-label">$</span>
                      <input class="input-group-field" type="url">
                      <a class="input-group-button button">Submit</a>
                    </div>
                  </form>
                </p>

                <h4>Badges Example:</h4>
                <p>
                  Secondary Badge: <span class="secondary badge">2</span><br />
                  Success Badge: <span class="success badge">3</span><br />
                  Alert Badge: <span class="alert badge">A</span><br />
                  Warning Badge: <span class="warning badge">B</span>
                </p>

                <h4>Label Examples:</h4>
                <p>
                  <span class="secondary label">Secondary Label</span><br />
                  <span class="success label">Success Label</span><br />
                  <span class="alert label">Alert Label</span><br />
                  <span class="warning label">Warning Label</span>
                </p>

                <h4>Button Examples:</h4>
                <p>
                  <button class="button">Button</button><br />
                  <button type="button" class="success button">Success Button</button><br />
                  <button type="button" class="alert button">Alert Button</button><br />
                  <a class="tiny button" href="#0">Tiny</a><br />
                  <a class="small button" href="#0">Small</a><br />
                  <a class="large button" href="#0">Large</a><br />
                  <a class="expanded button" href="#0">Expanded</a>
                </p>

                <h4>Callout Examples:</h4>
                <p>
                  <div class="callout">
                    <h5>This is a callout.</h5>
                    <p>It has an easy to override visual style, and is appropriately subdued.</p>
                    <a href="#0">It's dangerous to go alone, take this.</a>
                  </div>

                  <div class="callout secondary">
                    <h5>This is a secondary callout</h5>
                    <p>It has an easy to override visual style, and is appropriately subdued.</p>
                    <a href="#0">It's dangerous to go alone, take this.</a>
                  </div>

                  <div class="callout success">
                    <h5>This is a success callout</h5>
                    <p>It has an easy to override visual style, and is appropriately subdued.</p>
                    <a href="#0">It's dangerous to go alone, take this.</a>
                  </div>

                  <div class="callout warning">
                    <h5>This is a warning callout</h5>
                    <p>It has an easy to override visual style, and is appropriately subdued.</p>
                    <a href="#0">It's dangerous to go alone, take this.</a>
                  </div>

                  <div class="callout alert">
                    <h5>This is an alert callout</h5>
                    <p>It has an easy to override visual style, and is appropriately subdued.</p>
                    <a href="#0">It's dangerous to go alone, take this.</a>
                  </div>

                  <div class="callout">
                    <button class="close-button" aria-label="Close alert" type="button">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <p>This is a static close button example.</p>
                  </div>
                </p>

                <h4>Dropdown Pane Example:</h4>
                <p>
                  <button class="button" type="button" data-toggle="example-dropdown">Toggle Dropdown</button>
                  <div class="dropdown-pane" id="example-dropdown" data-dropdown>
                    Just some junk that needs to be said. Or not. Your choice.
                  </div>
                </p>

                <h4>Tabs Example</h4>
                <p>
                  <ul class="tabs" data-tabs id="example-tabs">
                    <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Tab 1</a></li>
                    <li class="tabs-title"><a href="#panel2">Tab 2</a></li>
                    <li class="tabs-title"><a href="#panel3">Tab 3</a></li>
                    <li class="tabs-title"><a href="#panel4">Tab 4</a></li>
                    <li class="tabs-title"><a href="#panel5">Tab 5</a></li>
                    <li class="tabs-title"><a href="#panel6">Tab 6</a></li>
                  </ul>

                  <div class="tabs-content" data-tabs-content="example-tabs">
                    <div class="tabs-panel is-active" id="panel1">
                      <p>one</p>
                      <p>Check me out! I'm a super cool Tab panel with text content!</p>
                    </div>
                    <div class="tabs-panel" id="panel2">
                      <p>two</p>
                      <p>Check me out! I'm a super cool Tab panel with text content!</p>
                    </div>
                    <div class="tabs-panel" id="panel3">
                      <p>three</p>
                      <p>Check me out! I'm a super cool Tab panel with text content!</p>
                    </div>
                    <div class="tabs-panel" id="panel4">
                      <p>four</p>
                      <p>Check me out! I'm a super cool Tab panel with text content!</p>
                    </div>
                    <div class="tabs-panel" id="panel5">
                      <p>five</p>
                      <p>Check me out! I'm a super cool Tab panel with text content!</p>
                    </div>
                    <div class="tabs-panel" id="panel6">
                      <p>six</p>
                      <p>Check me out! I'm a super cool Tab panel with text content!</p>
                    </div>
                  </div>
                </p>

                <h4>Switch Examples</h4>
                <p>
                  <div class="switch tiny">
                    <input class="switch-input" id="tinySwitch" type="checkbox" name="exampleSwitch">
                    <label class="switch-paddle" for="tinySwitch">
                      <span class="show-for-sr">Tiny Sandwiches Enabled</span>
                    </label>
                  </div>

                  <div class="switch small">
                    <input class="switch-input" id="smallSwitch" type="checkbox" name="exampleSwitch">
                    <label class="switch-paddle" for="smallSwitch">
                      <span class="show-for-sr">Small Portions Only</span>
                    </label>
                  </div>

                  <div class="switch large">
                    <input class="switch-input" id="largeSwitch" type="checkbox" name="exampleSwitch">
                    <label class="switch-paddle" for="largeSwitch">
                      <span class="show-for-sr">Show Large Elephants</span>
                    </label>
                  </div>
                </p>

                <?php
                  wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kjflaw_' ),
                    'after'  => '</div>',
                  ) );
                ?>
              </div><!-- .entry-content -->

              <footer class="entry-footer">
                <?php edit_post_link( esc_html__( 'Edit', 'kjflaw_' ), '<span class="edit-link">', '</span>' ); ?>
              </footer><!-- .entry-footer -->
            </article><!-- #post-## -->

            <?php
              // If comments are open or we have at least one comment, load up the comment template
              if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif;
            ?>

          <?php endwhile; // end of the loop. ?>

        </main><!-- #kitchen-sink-main -->

      </div><!-- .grid-x grid-padding-x -->
    </div><!-- .grid-container -->
  </div><!-- #kitchen-sink-primary -->

<?php get_footer(); ?>