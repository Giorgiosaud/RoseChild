<?php
define('CHILD_THEME_URI', get_stylesheet_directory_uri());
define('CHILD_THEME_DIR', get_stylesheet_directory());
define('CHILD_ADMIN_DIR', CHILD_THEME_DIR . '/admin');
require_once CHILD_ADMIN_DIR.'/initialize.php';
require_once( 'wp-sass/wp-sass.php' );
remove_action( 'wp_enqueue_scripts', 'rose_theme_scripts_styles' );

function my_theme_enqueue_styles() {
  global $wp_scripts, $aq_theme_options;
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
    }
    wp_enqueue_style('bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.css' );
    wp_enqueue_style('animate', get_template_directory_uri() .'/assets/css/animate.css' );
    wp_enqueue_style('simpletextrotator', get_template_directory_uri() .'/assets/css/simpletextrotator.css' );
    wp_enqueue_style('rose-javascript', get_template_directory_uri() .'/assets/css/javascript.css' );
    wp_enqueue_style('rose-main', get_template_directory_uri() .'/assets/css/style.css' );
    wp_enqueue_style('rose-responsive', get_template_directory_uri() .'/assets/css/responsive.css' );
    // wp_enqueue_style('rose-style', get_stylesheet_uri() );
    $parent_style = 'rose-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    

    wp_enqueue_style('child-fix-theme',
       get_stylesheet_directory_uri().'/assets/css/style.css');
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
        );
    wp_enqueue_style( 'scss-style', get_stylesheet_directory_uri() . '/scss/style.scss.php' );
    wp_enqueue_script( 'jquery.flexslider', get_template_directory_uri() .'/assets/js/jquery.flexslider.js', array('jquery'), false, true );
    wp_enqueue_script( 'parallax', get_template_directory_uri() .'/assets/js/jquery.parallax-1.1.3.js', array('jquery'), '1.1.3', true );
    wp_enqueue_script( 'scrollto', get_template_directory_uri() .'/assets/js/jquery.scrollto-1.4.3.1.js', array('jquery'), '1.4.3.1', true );
    wp_enqueue_script( 'localscroll', get_template_directory_uri() .'/assets/js/jquery.localscroll-1.2.7.js', array('jquery'), '1.2.7', true );
    wp_register_script( 'isotope', get_template_directory_uri() .'/assets/js/jquery.isotope.js', array('jquery'), false, true );
    wp_enqueue_script( 'masonry', get_template_directory_uri() .'/assets/js/jquery.masonry.min.js', array('jquery'), false, true );
    wp_enqueue_script( 'owl.carousel', get_template_directory_uri() .'/assets/js/owl.carousel.js', array('jquery'), false, true );
    wp_register_script( 'countTo', get_template_directory_uri() .'/assets/js/jquery.countTo.js', array('jquery'), false, true );
    wp_enqueue_script( 'wow', get_template_directory_uri() .'/assets/js/wow.js', array('jquery'), false, true );
  wp_enqueue_script( 'tabby', get_template_directory_uri() .'/assets/js/tabby.min.js', array('jquery'), false, true );
  wp_enqueue_script( 'tweetie', get_template_directory_uri() .'/assets/js/tweetie.min.js', array('jquery'), false, true );
  wp_enqueue_script( 'instafeed', get_template_directory_uri() .'/assets/js/instafeed.min.js', array('jquery'), false, true );
  wp_enqueue_script( 'magnific-popup', get_template_directory_uri() .'/assets/js/jquery.magnific-popup.js', array('jquery'), false, true );
  wp_enqueue_script( 'simple-text-rotator', get_template_directory_uri() .'/assets/js/jquery.simple-text-rotator.js', array('jquery'), false, true );
  wp_enqueue_script( 'validator', get_template_directory_uri() .'/assets/js/validator.min.js', array('jquery'), false, true );
  // wp_register_script( 'rose-functions', get_template_directory_uri() .'/assets/js/functions.js', array('jquery'), false, true );
  wp_register_script( 'rose-functions', get_stylesheet_directory_uri() .'/assets/js/functions.js', array('jquery'), false, true );
  wp_localize_script( 'rose-functions', 'rose_ajax', array(
    'ajaxurl' => esc_url(admin_url( 'admin-ajax.php' 
  ) ) ) );


    // wp_dequeue_script('rose-functions');


    // wp_dequeue_style('rose-style');
    

}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

add_action( 'admin_enqueue_scripts', 'load_admin_style' );
function load_admin_style(){
    wp_enqueue_style( 'scss-admin', get_stylesheet_directory_uri() . '/scss/admin.scss.php' );
    add_editor_style( 'editor-style.sass' );
}
// you can also use .less files as mce editor style sheets

