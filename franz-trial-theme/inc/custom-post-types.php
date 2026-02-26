<?php

/*
|--------------------------------------------------------------------------
| CPTs, Taxonomies, and Other Custom Setup
|--------------------------------------------------------------------------
*/

// Register Services CPT
function register_services_cpt() {

    $labels = array(
        'name' => 'Services',
        'singular_name' => 'Service',
        'menu_name' => 'Services',
        'name_admin_bar' => 'Service',
        'add_new' => 'Add Service',
        'add_new_item' => 'Add New Service',
        'new_item' => 'New Service',
        'edit_item' => 'Edit Service',
        'view_item' => 'View Service',
        'all_items' => 'All Services',
        'search_items' => 'Search Services',
        'not_found' => 'No Services found',
        'not_found_in_trash' => 'No Services found in Trash',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-hammer',
        'supports' => array('title', 'editor'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'services'),
        'show_in_rest' => false,
    );

    register_post_type('services', $args);
}
add_action('init', 'register_services_cpt');


// Register Team Members CPT
function theme_register_team_cpt() {

    $labels = array(
        'name'               => 'Team Members',
        'singular_name'      => 'Team Member',
        'add_new'            => 'Add New Member',
        'add_new_item'       => 'Add New Team Member',
        'edit_item'          => 'Edit Team Member',
        'new_item'           => 'New Team Member',
        'view_item'          => 'View Team Member',
        'search_items'       => 'Search Team Members',
        'not_found'           => 'No Team Members Found',
        'not_found_in_trash'  => 'No Team Members Found in Trash',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'   => true,
        'has_archive'          => false, // Keep false if you don't need /team archive
        'rewrite'              => array(
            'slug'       => 'team',
            'with_front'  => false
        ),
        'supports'             => array('title', 'thumbnail'),
        'menu_icon'            => 'dashicons-groups',
        'show_in_rest'          => true,
        'exclude_from_search'   => false,
    );

    register_post_type('team', $args);
}

add_action('init', 'theme_register_team_cpt');


// Register Testimonials CPT
register_post_type('testimonial', [
    'label' => 'Testimonials',
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-format-quote',
    'supports' => ['title', 'editor', 'thumbnail'],
]);