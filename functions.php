<?php
/**
 * warm heart functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package warm_heart
 */

if ( ! function_exists( 'warm_heart_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function warm_heart_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on warm heart, use a find and replace
	 * to change 'warm-heart' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'warm-heart', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'warm-heart' ),
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
	add_theme_support( 'custom-background', apply_filters( 'warm_heart_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'warm_heart_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function warm_heart_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'warm_heart_content_width', 640 );
}
add_action( 'after_setup_theme', 'warm_heart_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function warm_heart_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'warm-heart' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'warm-heart' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'warm_heart_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function warm_heart_scripts() {
	wp_enqueue_style( 'warm-heart-style', get_stylesheet_uri() );

	wp_enqueue_script( 'warm-heart-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'warm-heart-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'warm_heart_scripts' );

function loadScriptSite(){
    /*
     * get_template_directory_uri()
     * Получает URL текущей темы. Учитывает SSL. Не учитывает наличие дочерней темы. Не содержит закрывающий слэш.
     * https://wp-kama.ru/function/get_template_directory_uri
     */
    $version = null;
    wp_register_style(
        'WarmHeart-bootstrap', //$handle
        get_template_directory_uri().'/bootstrap/css/bootstrap.css', // $src
        array(), //$deps,
        $version // $ver
    );
   wp_register_style(
        'WarmHeart-main', //$handle
        get_template_directory_uri().'/main.css', // $src
        array(), //$deps,
        $version // $ver
    );
    wp_enqueue_style('WarmHeart-bootstrap');
    wp_enqueue_style('WarmHeart-main');

    wp_register_script(
        'WarmHeart', //$handle
        get_template_directory_uri().'/bootstrap/js/bootstrap.js', //$src
        array(
            'jquery'
        ), //$deps
        $version, //$ver
        true //$$in_footer
    );
    
    wp_enqueue_script('WarmHeart');
}
add_action( 'wp_enqueue_scripts', 'loadScriptSite');

function registerNavMenu() {
      register_nav_menu( 'menu', 'Primary Menu' );
}
add_action( 'after_setup_theme', 'registerNavMenu' ); 

add_theme_support( 'post-thumbnails' );


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

/**
 * Load TGM Plugin Activation.
 */
require get_template_directory() . '/tgm-plugin-activation/warm-heart-tgm-plugin-activation.php';


/**
 * Custom Post Type Cat
 */
function my_custom_post_cat() {
    $labels = array(
        'name'               => _x( 'Коты', 'post type general name' ),
        'singular_name'      => _x( 'Кот', 'post type singular name' ),
        'add_new'            => _x( 'Добавить', 'cat' ),
        'add_new_item'       => __( 'Добавить' ),
        'edit_item'          => __( 'Редактировать' ),
        'new_item'           => __( 'Новый котик' ),
        'all_items'          => __( 'Все котики' ),
        'view_item'          => __( 'Просмотр котиков' ),
        'search_items'       => __( 'Поиск котиков' ),
        'not_found'          => __( 'Кот не найден' ),
        'not_found_in_trash' => __( 'Кот не найден в корзине' ), 
        'parent_item_colon'  => '',
        'menu_name'          => 'Коты'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our products and product specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail' ),
    );
    register_post_type( 'cat', $args );    
    flush_rewrite_rules(false);
}
add_action( 'init', 'my_custom_post_cat' );

/**
 * Custom Post Type Dog
 */
function my_custom_post_dog() {
    $labels = array(
        'name'               => _x( 'Собаки', 'post type general name' ),
        'singular_name'      => _x( 'Собака', 'post type singular name' ),
        'add_new'            => _x( 'Добавить', 'dog' ),
        'add_new_item'       => __( 'Добавить' ),
        'edit_item'          => __( 'Редактировать' ),
        'new_item'           => __( 'Новая собачка' ),
        'all_items'          => __( 'Все собачки' ),
        'view_item'          => __( 'Просмотр собачек' ),
        'search_items'       => __( 'Поиск собачек' ),
        'not_found'          => __( 'Собака не найдена' ),
        'not_found_in_trash' => __( 'Собака не найдена в корзине' ), 
        'parent_item_colon'  => '',
        'menu_name'          => 'Собаки'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our products and product specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail' ),
    );
    register_post_type( 'dog', $args );    
    flush_rewrite_rules(false);
}
add_action( 'init', 'my_custom_post_dog' );
