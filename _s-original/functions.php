<?php
/**
 * _SsS functions and definitions
 *
 * @package _sSs
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1200; /* pixels */
}

if ( ! function_exists( '_sSs_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function _sSs_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on _s, use a find and replace
	 * to change '_s' to the name of your theme in all the template files
	 */
	load_theme_textdomain( '_sSs', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', '_sSs' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	// add_theme_support( 'post-formats', array(
	// 	'aside', 'image', 'video', 'quote', 'link',
	// ) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( '_sSs_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // _sSs_setup
add_action( 'after_setup_theme', '_sSs_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function _sSs_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', '_sSs' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 1', '_sSs' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2', '_sSs' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 3', '_sSs' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 4', '_sSs' ),
		'id'            => 'footer-4',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', '_sSs_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function _sSs_scripts() {
	wp_enqueue_script( '_sSs-foundation-what-input-js', get_template_directory_uri() . '/js/foundation/what-input.min.js', array( 'jquery' ), false, true );

	wp_enqueue_script( '_sSs-foundation-js', get_template_directory_uri() . '/js/foundation/foundation.min.js', array( 'jquery' ), false, true );

	wp_enqueue_script( '_sSs-foundation-start-foundation-js', get_template_directory_uri() . '/js/foundation/start-foundation.min.js', array( 'jquery' ), false, true );

	wp_enqueue_script( '_sSs-jquery-mask-js', get_template_directory_uri() . '/js/jquery-mask/jquery-mask.min.js', array( 'jquery' ), false, true );

	wp_enqueue_script( '_sSs-navigation', get_template_directory_uri() . '/js/navigation.min.js', array(), false, true );

	wp_enqueue_script( '_sSs-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.min.js', array(), false, true );

	wp_enqueue_style( '_sSs-foundation-style', get_template_directory_uri() . '/css/foundation/foundation.min.css' );

	wp_enqueue_style( '_sSs-font-awesome-style', get_template_directory_uri() . '/css/font-awesome/font-awesome.min.css' );

	wp_enqueue_style( '_sSs-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_sSs_scripts' );

/**
 * Enqueue admin scripts and styles.
 */
function _sSs_admin_scripts() {
	wp_enqueue_style( '_sSs-foundation-admin-style', get_template_directory_uri() . '/css/foundation/foundation-grid.min.css' );

	wp_enqueue_style( '_sSs-admin-style', get_template_directory_uri() . '/style-admin.css' );
}
add_action( 'admin_enqueue_scripts', '_sSs_admin_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Change default embed to have wrapper so we can style it properly. Style can be found
 * in section 10.3 in style.css.
 *
 * https://wordpress.stackexchange.com/questions/134228/how-to-overwrite-youtube-embed
 * https://developer.wordpress.org/reference/hooks/embed_oembed_html/
 */
function my_embed_oembed_html($html, $url, $attr, $post_id) {
  return '<div class="embed-container">' . $html . '</div>';
}
add_filter( 'embed_oembed_html', 'my_embed_oembed_html', 99, 4 );

/**
 * Outputs a 2D array as a CSV file.
 *
 * Remeber to include the following before you make the call to this function:
 * header("Content-Type: text/csv");
 * header("Content-Disposition: attachment; filename=file.csv");
 *
 * https://stackoverflow.com/questions/217424/create-a-csv-file-for-a-user-in-php#answer-6493794
 */
function outputCSV($data) {
  $output = fopen("php://output", "w");
  foreach ($data as $row)
    fputcsv($output, $row); // here you can change delimiter/enclosure
  fclose($output);
}
