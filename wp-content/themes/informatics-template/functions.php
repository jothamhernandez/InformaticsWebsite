<?php
/**
 * WP Bootstrap 4 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Informatics_Template
 */

if ( ! function_exists( 'informatics_template_setup' ) ) :
	function informatics_template_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'informatics-template', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Enable Post formats
		add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio', 'status', 'quote', 'link' ) );

		// Enable support for woocommerce.
		add_theme_support( 'woocommerce' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'informatics-template' ),
			'menu-2' => esc_html__( 'Secondary', 'informatics-template' ),
			'quick-links' => __('Quick Links', 'informatics-template')
		) );

		// Switch default core markup for search form, comment form, and comments
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'wp_bootstrap_4_custom_background_args', array(
			'default-color' => 'f8f9fa',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for core custom logo.
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'informatics_template_setup' );




/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_4_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_bootstrap_4_content_width', 800 );
}
add_action( 'after_setup_theme', 'wp_bootstrap_4_content_width', 0 );




/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_bootstrap_4_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'informatics-template' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'informatics-template' ),
		'before_widget' => '<section id="%1$s" class="widget border-bottom %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'informatics-template' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'informatics-template' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'informatics-template' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'informatics-template' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'informatics-template' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'informatics-template' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 4', 'wp-bootstrap-4' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'wp_bootstrap_4_widgets_init' );




/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_4_scripts() {
// 	wp_register_style('font-awesome-all','https://use.fontawesome.com/releases/v5.5.0/css/all.css');
// 	wp_enqueue_style('font-awesome-all');
	wp_register_style('informatics-css',get_template_directory_uri().'/informatics.css');
	wp_enqueue_style('informatics-css');
	wp_register_script('vue-script',get_template_directory_uri().'/assets/js/vue.js');
	wp_enqueue_script('vue-script');
	wp_register_script('info-js','/wp-content/themes/informatics-template/assets/js/informatics.js');
	wp_enqueue_script('info-js');
	wp_register_script('scroll-reveal','https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js');
	wp_enqueue_script('scroll-reveal');
	// wp_register_script('informatics-js',get_template_directory_uri().'/assets/js/informatics.js',[],'',true);
	// wp_enqueue_script('informatics-js');

	wp_enqueue_style( 'open-iconic-bootstrap', get_template_directory_uri() . '/assets/css/open-iconic-bootstrap.css', array(), 'v4.0.0', 'all' );
	wp_enqueue_style( 'bootstrap-4', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), 'v4.0.0', 'all' );
	wp_enqueue_style( 'wp-bootstrap-4-style', get_stylesheet_uri(), array(), '1.0.2', 'all' );

	wp_enqueue_script( 'bootstrap-4-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), 'v4.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_4_scripts' );


/**
 * Registers an editor stylesheet for the theme.
 */
function wp_bootstrap_4_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'wp_bootstrap_4_add_editor_styles' );


// Implement the Custom Header feature.
require get_template_directory() . '/inc/custom-header.php';

// Implement the Custom Comment feature.
require get_template_directory() . '/inc/custom-comment.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Custom Navbar
require get_template_directory() . '/inc/custom-navbar.php';

// Customizer additions.
require get_template_directory() . '/inc/tgmpa/tgmpa-init.php';

// Use Kirki for customizer API
require get_template_directory() . '/inc/theme-options/add-settings.php';

// Customizer additions.
require get_template_directory() . '/inc/customizer.php';

// Load Jetpack compatibility file.
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Load WooCommerce compatibility file.
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


// for SVG
function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

function custom_excerpt_length($length) {
  return 8;
}
add_filter('excerpt_length', 'custom_excerpt_length');


function wpbsearchform( $form ) {
 
    $form = '<form role="search" method="get" class="searchform wp-bootstrap-4-searchform mt-4 mb-3" action="' . home_url( '/' ) . '" >
    <div>
    <input type="text" class="s form-control faq-search"" value="' . get_search_query() . '" name="s" id="s" placeholder="Type keywords to find answers"/>
    </div>
    </form>';
 
    return $form;
}
 
add_shortcode('wpbsearch', 'wpbsearchform');


function register_shop_menu(){
	register_nav_menu('shop-menu',__('Shop Menu'));
}
add_action('init','register_shop_menu');

function register_shop_sub_menu(){
	register_nav_menu('shop-sub-menu',__('Shop Sub Menu'));
}
add_action('init','register_shop_sub_menu');


remove_action( 'woocommerce_proceed_to_checkout', 'woocommerce_button_proceed_to_checkout', 20 );



// add_filter( 'woocommerce_checkout_fields' , 'bbloomer_add_email_verification_field_checkout' );
  
// function bbloomer_add_email_verification_field_checkout( $fields ) {
 
// $fields['billing']['billing_email']['class'] = array('form-row-first');
 
// $fields['billing']['billing_em_ver'] = array(
//     'label' => __('Email Address Verification', 'bbloomer'),
//     'required' => true,
//     'class' => array('form-row-last'),
//     'clear' => true,
//     'priority' => 999,
// );
 
// return $fields;
// }
 
// // ---------------------------------
// // 3) Generate error message if field values are different
 
// add_action('woocommerce_checkout_process', 'bbloomer_matching_email_addresses');
 
// function bbloomer_matching_email_addresses() { 
// $email1 = $_POST['billing_email'];
// $email2 = $_POST['billing_em_ver'];
// if ( $email2 !== $email1 ) {
// wc_add_notice( __( 'Your email addresses do not match', 'bbloomer' ), 'error' );
// }
// }