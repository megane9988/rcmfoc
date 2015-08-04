<?php

add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );

if ( ! isset( $content_width ) ) $content_width = 800;

//wp_enqueue_scripts
function rcmfoc_scripts() {
	wp_enqueue_style( 'rcmfoc-style', get_stylesheet_uri() );
	wp_enqueue_script( 'rcmfoc-script', get_template_directory_uri() . '/js/app.js', array ( 'jquery' ),'',true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rcmfoc_scripts' );

//editor-style
function rcmfoc_add_editor_styles() {
		add_editor_style( 'editor-style.css' );
}
add_action( 'after_setup_theme', 'rcmfoc_add_editor_styles' );

//widget
function megane_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'rcmfoc' ),
		'id'            => 'widget-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'rcmfoc' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'megane_widgets_init' );


//custom-background
$megane_custom_background = array(
	'default-color' => 'ffffff'
);
add_theme_support( 'custom-background', $megane_custom_background );


//custom-header
$megane_custom_header = array(
	'width'         => 980,
	'height'        => 200,
	'default-image' => get_template_directory_uri() . '/images/headerimg.png',
);
add_theme_support( 'custom-header', $megane_custom_header );


//custom-menu
function rcmfoc_register_nav_menu() {
	register_nav_menus( array(
		'primary'   => __( 'primary menu', 'rcmfoc' )
	) );
}
add_action( 'after_setup_theme', 'rcmfoc_register_nav_menu' );


//load_theme_textdomain
function rcmfoc_load_theme_textdomain() {
load_theme_textdomain( 'rcmfoc', get_template_directory().'/languages' );
}
add_action( 'after_setup_theme', 'rcmfoc_load_theme_textdomain' );