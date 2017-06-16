<?php
define('CHILD_THEME_DIR', get_stylesheet_directory());
echo CHILD_THEME_DIR;
define('CHILD_ADMIN_DIR', CHILD_THEME_DIR . '/admin');
// define('CHILD_THEME_URI', get_stylesheet_directory_uri());
// require_once CHILD_ADMIN_DIR.'/initialize.php';

function my_theme_enqueue_styles() {
    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' ,array('bootstrap','animate','simpletextrotator','rose-javascript','rose-main','rose-responsive'));
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style('child-fix-theme',
	get_stylesheet_directory_uri().'/assets/css/style.css');
    wp_dequeue_script('rose-functions');
    wp_register_script( 'rose-functions', get_stylesheet_directory_uri() .'/assets/js/functions.js', array('jquery'), false, true );
 wp_localize_script( 'rose-functions', 'rose_ajax', array(
    'ajaxurl' => esc_url(admin_url( 'admin-ajax.php' 
  ) ) ) );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );