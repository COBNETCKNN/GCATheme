<?php 
// Creating of Custom Post Types
function gcatheme_post_types() {

    // Copywriting Examples post type
    register_post_type('service', array(
        'public' => true,
        'labels' => array( 
            'name' => 'Services',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service',
            'all_items' => 'All Services',
            'singular_name' => 'Service',
        ),
        'menu_icon' => 'dashicons-admin-site',
        'rewrite' => array('slug' => 'services'),
        'has_archive' => true,
        'supports' => array('thumbnail', 'title'),
        'show_in_rest' => true,
        'show_in_nav_menus' => true
    ));
}
add_action('init', 'gcatheme_post_types');