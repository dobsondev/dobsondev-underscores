<?php
/**
 * Custom template tags for this theme.
 *
 * @package _sSs
 */

/**
 * Creates numeric post navigation links
 */
if ( ! function_exists( 'numeric_posts_navigation' ) ) :
	function numeric_posts_navigation() {
		if ( is_singular() )
			return;
		global $wp_query;
		// Stop execution if there's only 1 page
		if( $wp_query->max_num_pages <= 1 )
			return;
		$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
		$max   = intval( $wp_query->max_num_pages );
		//	Add current page to the array
		if ( $paged >= 1 )
			$links[] = $paged;
		//	Add the pages around the current page to the array
		if ( $paged >= 3 ) {
			$links[] = $paged - 1;
			$links[] = $paged - 2;
		}
		if ( ( $paged + 2 ) <= $max ) {
			$links[] = $paged + 2;
			$links[] = $paged + 1;
		}
		echo '<div class="numeric-post-navigation"><ul>' . "\n";
		//	Previous Post Link
		if ( get_previous_posts_link() )
			printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
		//	Link to first page, plus ellipses if necessary
		if ( ! in_array( 1, $links ) ) {
			$class = 1 == $paged ? ' class="active"' : '';
			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
			if ( ! in_array( 2, $links ) )
				echo '<li>…</li>';
		}
		//	Link to current page, plus 2 pages in either direction if necessary
		sort( $links );
		foreach ( (array) $links as $link ) {
			$class = $paged == $link ? ' class="active"' : '';
			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
		}
		// Link to last page, plus ellipses if necessary
		if ( ! in_array( $max, $links ) ) {
			if ( ! in_array( $max - 1, $links ) )
				echo '<li>…</li>' . "\n";

			$class = $paged == $max ? ' class="active"' : '';
			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
		}
		//	Next Post Link
		if ( get_next_posts_link() )
			printf( '<li>%s</li>' . "\n", get_next_posts_link() );

		echo '</ul></div>' . "\n";
	}
endif;

/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
if ( ! function_exists( '_sSs_posted_on' ) ) :
	function _sSs_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			esc_html_x( 'Posted on %s', 'post date', '_sSs' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		$byline = sprintf(
			esc_html_x( 'by %s', 'post author', '_sSs' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>';

	}
endif;

/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
if ( ! function_exists( '_sSs_entry_footer' ) ) :
	function _sSs_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' == get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', '_sSs' ) );
			if ( $categories_list && is_categorized_blog() ) {
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', '_sSs' ) . '</span>', $categories_list );
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html__( ', ', '_sSs' ) );
			if ( $tags_list ) {
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', '_sSs' ) . '</span>', $tags_list );
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link( esc_html__( 'Leave a comment', '_sSs' ), esc_html__( '1 Comment', '_sSs' ), esc_html__( '% Comments', '_sSs' ) );
			echo '</span>';
		}

		edit_post_link( esc_html__( 'Edit', '_sSs' ), '<span class="edit-link">', '</span>' );
	}
endif;

/**
 * Shim for `the_archive_title()`.
 *
 * Display the archive title based on the queried object.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 *
 * @param string $before Optional. Content to prepend to the title. Default empty.
 * @param string $after  Optional. Content to append to the title. Default empty.
 */
if ( ! function_exists( 'the_archive_title' ) ) :
	function the_archive_title( $before = '', $after = '' ) {
		if ( is_category() ) {
			$title = sprintf( esc_html__( 'Category: %s', '_sSs' ), single_cat_title( '', false ) );
		} elseif ( is_tag() ) {
			$title = sprintf( esc_html__( 'Tag: %s', '_sSs' ), single_tag_title( '', false ) );
		} elseif ( is_author() ) {
			$title = sprintf( esc_html__( 'Author: %s', '_sSs' ), '<span class="vcard">' . get_the_author() . '</span>' );
		} elseif ( is_year() ) {
			$title = sprintf( esc_html__( 'Year: %s', '_sSs' ), get_the_date( esc_html_x( 'Y', 'yearly archives date format', '_sSs' ) ) );
		} elseif ( is_month() ) {
			$title = sprintf( esc_html__( 'Month: %s', '_sSs' ), get_the_date( esc_html_x( 'F Y', 'monthly archives date format', '_sSs' ) ) );
		} elseif ( is_day() ) {
			$title = sprintf( esc_html__( 'Day: %s', '_sSs' ), get_the_date( esc_html_x( 'F j, Y', 'daily archives date format', '_sSs' ) ) );
		} elseif ( is_tax( 'post_format' ) ) {
			if ( is_tax( 'post_format', 'post-format-aside' ) ) {
				$title = esc_html_x( 'Asides', 'post format archive title', '_sSs' );
			} elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
				$title = esc_html_x( 'Galleries', 'post format archive title', '_sSs' );
			} elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
				$title = esc_html_x( 'Images', 'post format archive title', '_sSs' );
			} elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
				$title = esc_html_x( 'Videos', 'post format archive title', '_sSs' );
			} elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
				$title = esc_html_x( 'Quotes', 'post format archive title', '_sSs' );
			} elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
				$title = esc_html_x( 'Links', 'post format archive title', '_sSs' );
			} elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
				$title = esc_html_x( 'Statuses', 'post format archive title', '_sSs' );
			} elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
				$title = esc_html_x( 'Audio', 'post format archive title', '_sSs' );
			} elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
				$title = esc_html_x( 'Chats', 'post format archive title', '_sSs' );
			}
		} elseif ( is_post_type_archive() ) {
			$title = sprintf( esc_html__( 'Archives: %s', '_sSs' ), post_type_archive_title( '', false ) );
		} elseif ( is_tax() ) {
			$tax = get_taxonomy( get_queried_object()->taxonomy );
			/* translators: 1: Taxonomy singular name, 2: Current taxonomy term */
			$title = sprintf( esc_html__( '%1$s: %2$s', '_sSs' ), $tax->labels->singular_name, single_term_title( '', false ) );
		} else {
			$title = esc_html__( 'Archives', '_sSs' );
		}

		/**
		 * Filter the archive title.
		 *
		 * @param string $title Archive title to be displayed.
		 */
		$title = apply_filters( 'get_the_archive_title', $title );

		if ( ! empty( $title ) ) {
			echo $before . $title . $after;
		}
	}
endif;

/**
 * Shim for `the_archive_description()`.
 *
 * Display category, tag, or term description.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 *
 * @param string $before Optional. Content to prepend to the description. Default empty.
 * @param string $after  Optional. Content to append to the description. Default empty.
 */
if ( ! function_exists( 'the_archive_description' ) ) :
	function the_archive_description( $before = '', $after = '' ) {
		$description = apply_filters( 'get_the_archive_description', term_description() );

		if ( ! empty( $description ) ) {
			/**
			 * Filter the archive description.
			 *
			 * @see term_description()
			 *
			 * @param string $description Archive description to be displayed.
			 */
			echo $before . $description . $after;
		}
	}
endif;
