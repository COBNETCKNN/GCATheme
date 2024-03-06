<?php 
// Enquesing custom CSS&JS files
function gcatheme_files() {
    //enqueue CSS
    wp_enqueue_style('mainCSS', get_template_directory_uri() . '/css/main.css', array(), '1.1');

    //enqueue JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('mainJS', get_stylesheet_directory_uri() . '/js/main.js', array(), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'gcatheme_files' );

// Adding theme supports
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

add_image_size('logo-size', 130, 45, true);
add_image_size('services-thumbnail', 420, 260, true);
add_image_size('aboutus-thumbnail', 610, 465, true);
add_image_size('services-featured', 870, 460, true);
add_image_size('services-type', 610, 300, true);
add_image_size('services-single-thumb', 1240, 650, true);
add_image_size('page-hero-image', 1440, 350, true);
add_image_size('flexible-image', 700, 335, true);
add_image_size('flexible-block-image', 900, 350, true);
add_image_size('single-post', 400, 290, true);


// Registrating Menus
require_once('partials/menu-registration.php');

// Registrating Custom Post Types
require_once('partials/post-types.php');

// Disabling editor on certain pages
function remove_pages_editor() {
    $disabled_pages = array(17, 117, 9, 11, 208, 13);

    $current_page_id = get_the_ID();

    if (in_array($current_page_id, $disabled_pages)) {
        remove_post_type_support('page', 'editor');
    }
}
add_action('add_meta_boxes', 'remove_pages_editor');

/* // redirecting to coming soon page
add_action('template_redirect', 'redirect_to_coming_soon_page');

function redirect_to_coming_soon_page() {
    // Check if the user is not logged in and not on the coming soon page already
    if ( !is_user_logged_in() && !is_page('coming-soon') ) {
        wp_redirect( home_url('/coming-soon/') );
        exit();
    }
} */