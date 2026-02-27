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


// Register About Pages CPT
function register_about_pages_cpt() {

    $labels = array(
        'name' => 'About Pages',
        'singular_name' => 'About Page',
        'menu_name' => 'About Pages',
        'add_new' => 'Add About Page',
        'add_new_item' => 'Add New About Page',
        'edit_item' => 'Edit About Page',
        'view_item' => 'View About Page',
        'all_items' => 'All About Pages',
        'search_items' => 'Search About Pages',
        'not_found' => 'No About Pages found',
        'not_found_in_trash' => 'No About Pages found in Trash',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-info',
        'supports' => array('title', 'editor'), // only title + content
        'has_archive' => false,
        'show_in_rest' => true, // Gutenberg editor enabled
    );

    register_post_type('about_pages', $args);
}
add_action('init', 'register_about_pages_cpt');

add_filter('use_block_editor_for_post_type', function($use_block_editor, $post_type) {
    if ($post_type === 'about_pages') {
        return false; // Disable Gutenberg, use Classic Editor
    }
    return $use_block_editor;
}, 10, 2);


/*
|--------------------------------------------------------------------------
| Register Office Location CPT and Taxonomy
|--------------------------------------------------------------------------
*/
function register_office_location_cpt() {

    register_post_type('office_location', array(
        'label' => 'Office Locations',
        'public' => true,
        'menu_icon' => 'dashicons-location',
        'add_new_item' => 'Add New Location',
        'edit_item' => 'Edit Location',
        'singular_name' => 'Office Location',
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'locations'),
    ));

}
add_action('init', 'register_office_location_cpt');

function register_location_taxonomy() {

    register_taxonomy('location_type', 'office_location', array(
        'label' => 'Location Type',
        'hierarchical' => true,
        'rewrite' => array('slug' => 'location-type'),
    ));

}
add_action('init', 'register_location_taxonomy');


/*
|--------------------------------------------------------------------------
| Register Property CPT and Taxonomy
|--------------------------------------------------------------------------
*/

function register_property_cpt() {

    $labels = array(
        'name'               => 'Properties',
        'singular_name'      => 'Property',
        'menu_name'          => 'Properties',
        'add_new'            => 'Add Property',
        'add_new_item'       => 'Add New Property',
        'edit_item'          => 'Edit Property',
        'new_item'           => 'New Property',
        'view_item'          => 'View Property',
        'search_items'       => 'Search Properties',
        'not_found'           => 'No properties found',
        'not_found_in_trash'   => 'No properties found in Trash',
    );

    register_post_type('property', array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-building',
        'supports' => array('title'),
        'rewrite' => array('slug' => 'properties'),
        'show_in_rest' => true,
    ));

}
add_action('init', 'register_property_cpt');