<?php
/**
 * NexosTrade functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package NexosTrade
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function nexostrade_setup() {

	load_theme_textdomain( 'nexostrade', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'nexostrade' ),
		)
	);
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
			'nexostrade_custom_background_args',
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
add_action( 'after_setup_theme', 'nexostrade_setup' );

function nexostrade_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nexostrade_content_width', 640 );
}
add_action( 'after_setup_theme', 'nexostrade_content_width', 0 );

function nexostrade_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'nexostrade' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'nexostrade' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nexostrade_widgets_init' );

function nexostrade_scripts() {
	wp_enqueue_style( 'nexostrade-splide', "https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css", array(), _S_VERSION );
	wp_enqueue_style( 'nexostrade-style', get_stylesheet_uri(), array(), _S_VERSION );
	
	wp_enqueue_style( 'nexostrade-fonts', get_template_directory_uri() . '/assets/fonts.css"', array(), _S_VERSION );
	wp_enqueue_style( 'nexostrade-animation', get_template_directory_uri() . '/assets/animation.css"', array(), _S_VERSION );
	wp_enqueue_style( 'nexostrade-range', get_template_directory_uri() . '/assets/range-input.css"', array(), _S_VERSION );

	


	wp_enqueue_script( 'nexostrade-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'nexostrade-header', get_template_directory_uri() . '/js/header.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'nexostrade-splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'nexostrade-splide-scroll', 'https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'nexostrade-chart', 'https://cdn.jsdelivr.net/npm/chart.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nexostrade_scripts' );

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

