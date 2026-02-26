<?php

/*
|--------------------------------------------------------------------------
| CPTs, Taxonomies, and Other Custom Setup
|--------------------------------------------------------------------------
*/

// Register Services CPT
function theme_register_services_cpt() {

    $labels = array(
        'name'               => 'Services',
        'singular_name'      => 'Service',
        'add_new'            => 'Add New Service',
        'add_new_item'       => 'Add New Service',
        'edit_item'          => 'Edit Service',
        'new_item'           => 'New Service',
        'view_item'          => 'View Service',
        'search_items'       => 'Search Services',
        'not_found'          => 'No Services Found',
        'not_found_in_trash' => 'No Services Found in Trash',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'services'),
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'          => 'dashicons-portfolio',
        'show_in_rest'       => true, // Gutenberg support
    );

    register_post_type('services', $args);
}

add_action('init', 'theme_register_services_cpt');


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