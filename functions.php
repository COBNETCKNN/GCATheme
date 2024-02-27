<?php 
// Enquesing custom CSS&JS files
function gcatheme_files() {
    //enqueue CSS
    wp_enqueue_style('mainCSS', get_template_directory_uri() . '/css/main.css', array(), '2.0');

    //enqueue JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('mainJS', get_stylesheet_directory_uri() . '/js/main.js', array(), 2.0, true);
}
add_action( 'wp_enqueue_scripts', 'gcatheme_files' );

// Adding theme supports
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

add_image_size('logo-size', 130, 45, true);

// Registrating Menus
require_once('partials/menu-registration.php');