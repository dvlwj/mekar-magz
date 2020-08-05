<?php
/**
 * mekar functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mekar
 */

if ( ! function_exists( 'mekar_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mekar_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mekar, use a find and replace
		 * to change 'mekar' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mekar', get_template_directory() . '/languages' );

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
		// register_nav_menus( array(
    //         'main'       	=> esc_html__( 'Main', 'mekar' ),
    //         'sidebar'       => esc_html__( 'Sidebar', 'mekar' ),
    //         'product'       => esc_html__( 'Product', 'mekar' ),
    //         'product_detail'=> esc_html__( 'Product Detail', 'mekar' ),
    //         'benefit'       => esc_html__( 'Benefit', 'mekar' ),
    //         'services'      => esc_html__( 'Services', 'mekar' ),
    //         'about_us'      => esc_html__( 'About Us', 'mekar' ),
    //         'contact_us'    => esc_html__( 'Contact Us', 'mekar' )
		// ) );

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
		add_theme_support( 'custom-background', apply_filters( 'mekar_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 69,
			'width'       => 150,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'mekar_setup' );

/**
 * Enqueue scripts and styles.
 */
function mekar_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_register_style('fontawesome', get_template_directory_uri() . '/css/fontawesome.all.min.css' );
    wp_register_style('index', get_template_directory_uri() . '/css/index.css' );
    $dependencies = array('bootstrap','fontawesome','index');
    wp_enqueue_style( 'mekar-style', get_stylesheet_uri(), $dependencies );
}
add_action( 'wp_enqueue_scripts', 'mekar_enqueue_styles' );

function mekar_enqueue_scripts() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.min.js');
    wp_enqueue_script('popper', get_template_directory_uri().'/js/popper.min.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.bundle.min.js');
    wp_enqueue_script('index', get_template_directory_uri().'/js/index.js','jquery','',true);
    $dependencies = array('jquery','popper','bootstrap','index');
}

add_action( 'wp_enqueue_scripts', 'mekar_enqueue_scripts' );

function theme_image($image){
    return  get_stylesheet_directory_uri() . '/assets/img/' . $image;
}
function theme_icon($icon){
    return  get_stylesheet_directory_uri() . '/assets/icon/' . $icon;
}

function get_excerpt($character_count){
    $excerpt = get_the_content();
    $excerpt = preg_replace(" ([.*?])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $character_count);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    if (strlen($excerpt) > 0) {
        $excerpt = $excerpt.'... <a href="'.get_the_permalink().'" class="article-details">Selengkapnya <i class="fa fas fa-chevron-right"></i><i class="fa fas fa-chevron-right"></i><i class="fa fas fa-chevron-right"></i></a>';
    } else {
        $excerpt = '<a href="'.get_the_permalink().'" class="text-center ml-auto mr-auto d-block article-details">Selengkapnya <i class="fa fas fa-chevron-right"></i><i class="fa fas fa-chevron-right"></i><i class="fa fas fa-chevron-right"></i></a>';
    }
    return $excerpt;
}

function get_editor_message($post_amount,$offset = NULL){
    if(is_null($offset)) $offset = 0;
    $categoryID = isset($_GET['cat']) ? $_GET['cat'] : '0';
    $args = array(
        'post_type' => 'meja_redaksi',
        'post_status' => 'publish',
        'cat' => $categoryID,
        'order_by' => 'publish_date',
        'posts_per_page' => $post_amount,
        'offset' => $offset,
        'order' => 'desc',
    );
    $new_query = new WP_Query ($args);
    return $new_query;
}

function get_saint_profile($post_amount,$offset = NULL){
    if(is_null($offset)) $offset = 0;
    $categoryID = isset($_GET['cat']) ? $_GET['cat'] : '0';
    $args = array(
        'post_type' => 'orang_kudus',
        'post_status' => 'publish',
        'cat' => $categoryID,
        'order_by' => 'publish_date',
        'posts_per_page' => $post_amount,
        'offset' => $offset,
        'order' => 'desc',
    );
    $new_query = new WP_Query ($args);
    return $new_query;
}

function get_short_story($post_amount,$offset = NULL){
    if(is_null($offset)) $offset = 0;
    $categoryID = isset($_GET['cat']) ? $_GET['cat'] : '0';
    $args = array(
        'post_type' => 'cerita_pendek',
        'post_status' => 'publish',
        'cat' => $categoryID,
        'order_by' => 'publish_date',
        'posts_per_page' => $post_amount,
        'offset' => $offset,
        'order' => 'desc',
    );
    $new_query = new WP_Query ($args);
    return $new_query;
}

function get_serial_story($post_amount,$offset = NULL){
    if(is_null($offset)) $offset = 0;
    $categoryID = isset($_GET['cat']) ? $_GET['cat'] : '0';
    $args = array(
        'post_type' => 'cerita_bersambung',
        'post_status' => 'publish',
        'cat' => $categoryID,
        'order_by' => 'publish_date',
        'posts_per_page' => $post_amount,
        'offset' => $offset,
        'order' => 'desc',
    );
    $new_query = new WP_Query ($args);
    return $new_query;
}
function get_comic($post_amount,$offset = NULL){
    if(is_null($offset)) $offset = 0;
    $categoryID = isset($_GET['cat']) ? $_GET['cat'] : '0';
    $args = array(
        'post_type' => 'cerita_bergambar',
        'post_status' => 'publish',
        'cat' => $categoryID,
        'order_by' => 'publish_date',
        'posts_per_page' => $post_amount,
        'offset' => $offset,
        'order' => 'desc',
    );
    $new_query = new WP_Query ($args);
    return $new_query;
}
function get_religion_knowledge($post_amount,$offset = NULL){
    if(is_null($offset)) $offset = 0;
    $categoryID = isset($_GET['cat']) ? $_GET['cat'] : '0';
    $args = array(
        'post_type' => 'pengetahuan_agama',
        'post_status' => 'publish',
        'cat' => $categoryID,
        'order_by' => 'publish_date',
        'posts_per_page' => $post_amount,
        'offset' => $offset,
        'order' => 'desc',
    );
    $new_query = new WP_Query ($args);
    return $new_query;
}
function get_information_notice($post_amount,$offset = NULL){
    if(is_null($offset)) $offset = 0;
    $categoryID = isset($_GET['cat']) ? $_GET['cat'] : '0';
    $args = array(
        'post_type' => 'sekilas_info',
        'post_status' => 'publish',
        'cat' => $categoryID,
        'order_by' => 'publish_date',
        'posts_per_page' => $post_amount,
        'offset' => $offset,
        'order' => 'desc',
    );
    $new_query = new WP_Query ($args);
    return $new_query;
}
function get_pen_pal($post_amount,$offset = NULL){
    if(is_null($offset)) $offset = 0;
    $categoryID = isset($_GET['cat']) ? $_GET['cat'] : '0';
    $args = array(
        'post_type' => 'sahabat_mekar',
        'post_status' => 'publish',
        'cat' => $categoryID,
        'order_by' => 'publish_date',
        'posts_per_page' => $post_amount,
        'offset' => $offset,
        'order' => 'desc',
    );
    $new_query = new WP_Query ($args);
    return $new_query;
}

function get_bible_message($post_amount,$offset = NULL){
    if(is_null($offset)) $offset = 0;
    $categoryID = isset($_GET['cat']) ? $_GET['cat'] : '0';
    $args = array(
        'post_type' => 'pesan_kitab_suci',
        'post_status' => 'publish',
        'cat' => $categoryID,
        'order_by' => 'publish_date',
        'posts_per_page' => $post_amount,
        'offset' => $offset,
        'order' => 'desc',
    );
    $new_query = new WP_Query ($args);
    return $new_query;
}

function get_pray_message($post_amount,$offset = NULL){
    if(is_null($offset)) $offset = 0;
    $categoryID = isset($_GET['cat']) ? $_GET['cat'] : '0';
    $args = array(
        'post_type' => 'ujud_doa',
        'post_status' => 'publish',
        'cat' => $categoryID,
        'order_by' => 'publish_date',
        'posts_per_page' => $post_amount,
        'offset' => $offset,
        'order' => 'desc',
    );
    $new_query = new WP_Query ($args);
    return $new_query;
}

function get_poem($post_amount,$offset = NULL){
    if(is_null($offset)) $offset = 0;
    $categoryID = isset($_GET['cat']) ? $_GET['cat'] : '0';
    $args = array(
        'post_type' => 'puisi',
        'post_status' => 'publish',
        'cat' => $categoryID,
        'order_by' => 'publish_date',
        'posts_per_page' => $post_amount,
        'offset' => $offset,
        'order' => 'desc',
    );
    $new_query = new WP_Query ($args);
    return $new_query;
}

function get_last_posts($post_amount,$offset = NULL){
    if(is_null($offset)) $offset = 0;
    $categoryID = isset($_GET['cat']) ? $_GET['cat'] : '0';
    $post_types = get_post_types(['public' => true]);
    $args = array(
        'post_type' => $post_types,
        'post_status' => 'publish',
        'cat' => $categoryID,
        'order_by' => 'publish_date',
        'posts_per_page' => $post_amount,
        'offset' => $offset,
        'order' => 'desc',
    );
    $new_query = new WP_Query ($args);
    return $new_query;
}

?>