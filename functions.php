<?php

include 'nzdebug.php';
add_action('wp_enqueue_scripts', 'wordpress_bootstrap_parent_theme_enqueue_styles');

function wordpress_bootstrap_parent_theme_enqueue_styles()
{
    /* wp_enqueue_style('wordpress-bootstrap-style', get_template_directory_uri() . '/style.css'); */
    /*wp_enqueue_style('amagency-style', get_stylesheet_directory_uri() . '/style.css', array('wordpress-bootstrap-style'));*/
}

 function wp_bootstrap_theme_styles() { 
        // This is the compiled css file from LESS - this means you compile the LESS file locally and put it in the appropriate directory
        //  if you want to make any changes to the master bootstrap.css.
        wp_register_style( 'wpbs', get_stylesheet_directory_uri() . '/library/dist/css/styles.7ad1d800.min.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'wpbs' );

        // For child themes
        wp_register_style( 'wpbs-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'wpbs-style' );
    }

// enqueue javascript

function wp_bootstrap_theme_js()
{
    /* d('sdf'); */
    // This is the full Bootstrap js distribution file. If you only use a few components that require the js files consider loading them individually instead
    wp_register_script('bootstrap', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.js', array('jquery'), '1.2');

    wp_register_script('wpbs-js', get_stylesheet_directory_uri() . '/library/dist/js/scripts.6003a033.min.js', array('bootstrap'), '1.2');
    wp_register_script('wpbs-js-dev', get_stylesheet_directory_uri() . '/library/dist/js/scripts.min.js', array('bootstrap'), '1.2');

    wp_register_script('modernizr', get_template_directory_uri() . '/bower_components/modernizer/modernizr.js', array('jquery'), '1.2');

    wp_enqueue_script('bootstrap');
    wp_enqueue_script('wpbs-js-dev');
    wp_enqueue_script('modernizr');
}
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
function single_page_app_query($query)
{
    if (!$query->is_main_query() || is_admin()) {
        return;
    }
    $query->set('showposts', -1);
    $query->set('post_type', array('page'));
    $query->set('orderby', array('menu_order' => 'ASC'));
}
add_action('pre_get_posts', 'single_page_app_query');



// Sidebars & Widgetizes Areas
function nzwp_bootstrap_register_sidebars()
{
    register_sidebar(array(
        'id' => 'footer',
        'name' => 'Footer',
        'before_widget' => '<div id="%1$s" class="widget col-xs-12  col-lg-offset-3 col-lg-6 %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'id' => 'after_footer',
        'name' => 'After Footer',
        'before_widget' => '<div id="%1$s" class="widget col-xs-12 %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));
}
// don't remove this bracket!
 add_action( 'widgets_init', 'nzwp_bootstrap_register_sidebars' ); 