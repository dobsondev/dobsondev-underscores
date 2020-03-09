<?php
/**
 * A collection of extra and extremely useful filters, actions and hooks.
 *
 * @package _sSs
 */

/**
 * Flush out the transients used in vefane_categorized_blog.
 */
function dobsondev_category_transient_flusher() {
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return;
  }
  // Like, beat it. Dig?
  delete_transient( 'vefane_categories' );
}
add_action( 'edit_category', 'dobsondev_category_transient_flusher' );
add_action( 'save_post',     'dobsondev_category_transient_flusher' );

/**
 * Change default embed to have wrapper so we can style it properly. Style can be found
 * in section 10.3 in style.css.
 *
 * https://wordpress.stackexchange.com/questions/134228/how-to-overwrite-youtube-embed
 * https://developer.wordpress.org/reference/hooks/embed_oembed_html/
 */
function dobsondev_embed_oembed_html($html, $url, $attr, $post_id) {
  return '<div class="embed-container">' . $html . '</div>';
}
add_filter( 'embed_oembed_html', 'dobsondev_embed_oembed_html', 99, 4 );