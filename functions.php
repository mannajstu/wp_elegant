<?php

if (!file_exists(get_template_directory() . '/class-wp-bootstrap-navwalker.php')) {
    // file does not exist... return an error.
    return new WP_Error('class-wp-bootstrap-navwalker-missing', __('It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker'));
} else {
    // file exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

function wp_elegant_scripts()
{

    //css

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.2');
    if (is_page('Choosepack')) {
        wp_enqueue_style('package', get_template_directory_uri() . '/css/style-package.css', array(), '3.2');
    } else {

        wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), '3.2');
        wp_enqueue_style('jquery-idealforms', get_template_directory_uri() . '/css/jquery.idealforms.css', array(), '3.2');
        wp_enqueue_style('prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css', array(), '3.2');

        wp_enqueue_style('style-elegant', get_template_directory_uri() . '/css/style.css', array(), '3.2');

        wp_enqueue_style('additional', get_template_directory_uri() . '/css/additional.css', array(), '3.2');

        wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), '20141010', true);
        wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '3.2');
        wp_enqueue_style('googleapis', 'http://fonts.googleapis.com/css?family=Lato', array(), '3.2');
        wp_enqueue_style('elegant-style', get_template_directory_uri() . '/css/styleNew.css', array(), '3.2');

        wp_enqueue_style('overlay', get_template_directory_uri() . '/dist/overlay.css', array(), '3.2');
    }

// wp_enqueue_style( 'single-page', get_template_directory_uri() . '/css/single-page.css', array(), '3.2' );

//javacript

    wp_enqueue_script('ajax', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', array(), '20141010', true);

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20141010', true);

    wp_enqueue_script('main-jqurey', get_template_directory_uri() . '/js/jquery.main.js', array(), '20141010', true);

    wp_enqueue_script('main-jqurey', get_template_directory_uri() . '/js/package.js', array(), '20141010', true);

    wp_enqueue_script('maps-googleapis', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAOgeU-CRns0fQa7Tu340isaUZ3uKwjkB0
						    &callback=initMap', array(), '20141010', true);
    wp_enqueue_script('maps-googleapis-sensor', 'http://maps.google.com/maps/api/js?sensor=false', array(), '20141010', true);

    wp_enqueue_script('gmap-jqurey', get_template_directory_uri() . '/js/jquery.gmap.min.js', array(), '20141010', true);

    wp_enqueue_script('idealforms', get_template_directory_uri() . '/js/jquery.idealforms.min.js', array(), '20141010', true);

    wp_enqueue_script('carouFredSel', get_template_directory_uri() . '/js/jquery.carouFredSel-6.2.1-packed.js', array(), '20141010', true);

    wp_enqueue_script('prettyPhoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array(), '20141010', true);

    wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array(), '20141010', true);

    wp_enqueue_script('shuffle', get_template_directory_uri() . '/js/jquery.shuffle.min.js', array(), '20141010', true);

    wp_enqueue_script('idealforms', get_template_directory_uri() . '/js/jquery.idealforms.min.js', array(), '20141010', true);
    wp_enqueue_script('jquery-latest', 'http://code.jquery.com/jquery-latest.min.js', array(), '20141010', true);
    wp_enqueue_script('overlay', get_template_directory_uri() . '/dist/overlay.js', array(), '20141010', true);

}
add_action('wp_enqueue_scripts', 'wp_elegant_scripts');

function wp_elegant_setup()
{
    /*
     * Make theme available for translation.
     */
    load_theme_textdomain('wp_elegant');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.

     */
    add_theme_support('post-thumbnails');

    add_image_size('wp_elegant-featured-image', 2000, 1200, true);

    add_image_size('wp_elegant-thumbnail-avatar', 100, 100, true);

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(array(
        'page-menu' => 'Single Page Menu',

    ));

    /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',

    ));

    // Add theme support for Custom Logo.
    add_theme_support('custom-logo', array(
        'width'  => 241,
        'height' => 37,

    ));

    add_theme_support('html5', array('search-form'));

}
add_action('after_setup_theme', 'wp_elegant_setup');

if (!file_exists(get_template_directory() . '/class-wp-bootstrap-navwalker.php')) {
    // file does not exist... return an error.
    return new WP_Error('class-wp-bootstrap-navwalker-missing', __('It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker'));
} else {
    // file exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

require_once get_template_directory() . '/inc/ReduxCore/framework.php';
require_once get_template_directory() . '/inc/sample/config.php';

function create_post_type()
{

    $labels = array(
        'name'           => _x('Services', 'Post type general name', 'textdomain'),
        'singular_name'  => _x('Service', 'Post type singular name', 'textdomain'),
        'menu_name'      => _x('Services', 'Admin Menu text', 'textdomain'),
        'name_admin_bar' => _x('Service', 'Add New on Toolbar', 'textdomain'),
        'add_new'        => __('Add New Service', 'textdomain'),
        'add_new_item'   => __('Add New Services', 'textdomain'),
        'new_item'       => __('New Service', 'textdomain'),
        'edit_item'      => __('Edit Service', 'textdomain'),
        'view_item'      => __('View Service', 'textdomain'),
        'all_items'      => __('All Services', 'textdomain'),

    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => true,
        
        'supports'            => array('title', 'editor', 'excerpt'),
        
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => true,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => true,
        'capability_type'     => 'post',
    );

    register_post_type('service', $args);
}
add_action('init', 'create_post_type');
