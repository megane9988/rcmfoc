<?php 
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );


if ( ! isset( $content_width ) ) $content_width = 900;
if ( is_singular() ) wp_enqueue_script( "comment-reply" );

//editor-style

function megane9988_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'after_setup_theme', 'megane9988_add_editor_styles' );

//widget
function megane_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Widget Area', 'twentyfifteen' ),
    'id'            => 'widget-1',
    'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
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
  'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $megane_custom_header );


//custom-menu
function megane9988_register_nav_menu() {
  register_nav_menus( array(
    'primary'   => __( 'primary menu', 'megane9988' )
  ) );
}
add_action( 'after_setup_theme', 'megane9988_register_nav_menu' );
