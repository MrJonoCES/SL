<?php
/**
 * SL-NEW functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SL-NEW
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'sl_new_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sl_new_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on SL-NEW, use a find and replace
		 * to change 'sl-new' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sl-new', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'sl-new' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'sl_new_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'sl_new_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sl_new_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sl_new_content_width', 640 );
}
add_action( 'after_setup_theme', 'sl_new_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sl_new_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'sl-new' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'sl-new' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'sl_new_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sl_new_scripts() {
	wp_enqueue_style( 'sl-new-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'sl-new-style', 'rtl', 'replace' );

	wp_enqueue_style( 'sl-new-custom', get_template_directory_uri() . '/css/custom.css');
	wp_enqueue_style( 'basscss', get_template_directory_uri() . '/css/basscss.min.css');
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/fonts.css');

	wp_enqueue_style( 'process', get_template_directory_uri() . '/css/process.css');
	// wp_enqueue_style( 'nav', get_template_directory_uri() . '/css/nav.css');
	wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.3.1', true );
	wp_enqueue_script( 'matter', get_template_directory_uri() . '/js/matter.min.js', array(), '0.18.0', true );
	
	if( is_page( array( 'contact' ) ) ){
		wp_enqueue_style( 'contact', get_template_directory_uri() . '/css/contact.css');
        wp_enqueue_script( 'eyes', get_template_directory_uri() . '/js/eyes.js', array(), '1.0.0', true );
	}

	if( is_page( array( 'projects' ) ) ){
		wp_enqueue_script( 'projects', get_template_directory_uri() . '/js/projects.js', array(), '1.0.0', true );
	}

	if( is_front_page() )
    {
		wp_enqueue_script( 'header', get_template_directory_uri() . '/js/header.js', array(), '1.0.0', true );
		wp_enqueue_script( 'backgrounds', get_template_directory_uri() . '/js/backgrounds.js', array(), '1.0.0', true );
		wp_enqueue_script( 'intro2', get_template_directory_uri() . '/js/intro2.js', array(), '1.0.0', true );

    }

	if( is_singular('post') )
    {
		wp_enqueue_style( 'slideshow', get_template_directory_uri() . '/css/slideshow.css');
		wp_enqueue_script( 'title', get_template_directory_uri() . '/js/title.js', array(), '1.0.0', true );
		wp_enqueue_script( 'slideshow', get_template_directory_uri() . '/js/slideshow.js', array(), '1.0.0', true );
    }
}

add_action( 'wp_enqueue_scripts', 'sl_new_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_image_size( 'hero', 1180, 728, true ); 