<?php
/**
 * StoryWork functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package StoryWork
 */

if ( ! function_exists( 'storywork_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function storywork_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on StoryWork, use a find and replace
	 * to change 'storywork' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'storywork', get_template_directory() . '/languages' );

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
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'storywork' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'storywork_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'storywork_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function storywork_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'storywork_content_width', 640 );
}
add_action( 'after_setup_theme', 'storywork_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function storywork_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'storywork' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'storywork' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'storywork_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function storywork_scripts() {
	wp_enqueue_style( 'storywork-style', get_stylesheet_uri() );

	wp_enqueue_script( 'storywork-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'storywork-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'storywork_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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


function load_template_part($template_name) {
	ob_start();
	get_template_part($template_name);
	$var = ob_get_contents();
	ob_end_clean();
	return $var;
}

function my_enqueue($hook) {
    if($hook == "post.php" || $hook == "post-new.php" ){

        wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js' );
        wp_localize_script( 'main_js', 'ajaxurl', array( 'url' => admin_url( 'admin-ajax.php' )));
    }
}
add_action( 'admin_enqueue_scripts', 'my_enqueue' );

function search_customer() {
    $text = strtolower( $_GET['term'] );
    $suggestions = array();

    $args = array(
        'post_type' => 'customer',
        'meta_query' => array(
            array(
                'key'     => 'client_name',
                'value'   => $text,
                'compare' => 'LIKE',
            ),
        )
    );

    $loop = new WP_Query( $args );

    while( $loop->have_posts() ) {
        $loop->the_post();
        $suggestion = array();
        $suggestion['label'] = get_field('client_name');
        $suggestion['client_contact_person'] = get_field('client_contact_person');
        $suggestion['client_address'] = get_field('client_address');
        $suggestion['client_tel'] = get_field('client_tel');
        $suggestion['client_fax'] = get_field('client_fax');
        $suggestion['client_phone'] = get_field('client_phone');
        $suggestion['client_email'] = get_field('client_email');


        $suggestions[] = $suggestion;
    }

    wp_reset_query();


    $response = json_encode( $suggestions );
    echo $response;
    exit();

}

add_action( 'wp_ajax_search_customer', 'search_customer' );
add_action( 'wp_ajax_nopriv_search_customer', 'search_customer' );

function custom_menu_page_removing() {
    remove_menu_page( 'edit.php' );                   //Posts
    remove_menu_page( 'upload.php' );                 //Media
    remove_menu_page( 'edit.php?post_type=page' );    //Pages
    remove_menu_page( 'edit-comments.php' );          //Comments
}
add_action( 'admin_menu', 'custom_menu_page_removing' );

add_action( 'admin_bar_menu', 'wpse126922_remove_newpost', 999 );

function wpse126922_remove_newpost ( $wp_admin_bar ) {

    //var_dump($wp_admin_bar);

    $wp_admin_bar->remove_node( 'new-post' );
    $wp_admin_bar->remove_node( 'new-page' );
    $wp_admin_bar->remove_node( 'new-media' );
    $wp_admin_bar->remove_node( 'comments' );
}

