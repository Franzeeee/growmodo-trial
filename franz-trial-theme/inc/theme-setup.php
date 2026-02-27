<?php
/*
|--------------------------------------------------------------------------
| Theme Setup
|--------------------------------------------------------------------------
*/

function franz_theme_setup()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  add_theme_support('html5', [
    'search-form',
    'comment-form',
    'gallery',
    'caption'
  ]);

  register_nav_menus([
      'primary'     => 'Primary Menu',
      'footer-1'    => 'Footer Menu 1',
      'footer-2'    => 'Footer Menu 2',
      'footer-3'    => 'Footer Menu 3',
      'footer-4'    => 'Footer Menu 4',
  ]);

}
add_action('after_setup_theme', 'franz_theme_setup');


/*
|--------------------------------------------------------------------------
| Activation Flag (Prevents Race Condition)
|--------------------------------------------------------------------------
*/

add_action('after_switch_theme', function () {
  update_option('franz_do_setup', true);
});


/*
|--------------------------------------------------------------------------
| Run Setup Safely After WordPress Fully Loads
|--------------------------------------------------------------------------
*/

add_action('init', function () {

  if (!get_option('franz_do_setup')) {
    return;
  }

  // --------------------------
  // Create Default Pages
  // --------------------------

  $pages = [
    'Home'      => 'home',
    'About Us'  => 'about-us',
    'Services'  => 'services',
    'Contact'   => 'contact',
    'Blog'      => 'blog'
  ];

  $created_pages = [];
  $order = 0;

  foreach ($pages as $title => $slug) {

    $page = get_page_by_path($slug);

    if (!$page) {

      $page_id = wp_insert_post([
        'post_title'   => $title,
        'post_name'    => $slug,
        'post_status'  => 'publish',
        'post_type'    => 'page',
        'menu_order'   => $order
      ]);

    } else {
      $page_id = $page->ID;
    }

    $created_pages[$slug] = $page_id;
    $order++;
  }

  // --------------------------
  // Set Static Homepage
  // --------------------------

  update_option('show_on_front', 'page');
  if (isset($created_pages['home'])) {
      update_option('page_on_front', $created_pages['home']);
  }

  if (isset($created_pages['blog'])) {
      update_option('page_for_posts', $created_pages['blog']);
  }

  // --------------------------
  // Create & Assign Menu
  // --------------------------

  franz_create_menu($created_pages);
  franz_create_footer_menus();

  // Remove setup flag
  delete_option('franz_do_setup');

});


/*
|--------------------------------------------------------------------------
| Menu Creation
|--------------------------------------------------------------------------
*/

function franz_create_menu($pages)
{
  $menu_name = 'Primary Menu';

  $menu = wp_get_nav_menu_object($menu_name);

  if (!$menu) {

    $menu_id = wp_create_nav_menu($menu_name);

    foreach ($pages as $slug => $page_id) {

      wp_update_nav_menu_item($menu_id, 0, [
        'menu-item-title'     => get_the_title($page_id),
        'menu-item-object'    => 'page',
        'menu-item-object-id' => $page_id,
        'menu-item-type'      => 'post_type',
        'menu-item-status'    => 'publish'
      ]);
    }

    // Assign menu properly (without overwriting other locations)
    $locations = get_theme_mod('nav_menu_locations');
    $locations['primary'] = $menu_id;
    set_theme_mod('nav_menu_locations', $locations);
  }
}

/*
|--------------------------------------------------------------------------
| Footer Menu Auto Creation
|--------------------------------------------------------------------------
*/

function franz_create_footer_menus()
{
    $footer_menus = [
        'Footer Menu 1' => 'footer-1',
        'Footer Menu 2' => 'footer-2',
        'Footer Menu 3' => 'footer-3',
        'Footer Menu 4' => 'footer-4',
    ];

    foreach ($footer_menus as $menu_name => $location) {

        $menu = wp_get_nav_menu_object($menu_name);

        if (!$menu) {

            $menu_id = wp_create_nav_menu($menu_name);

            // Assign to theme location
            $locations = get_theme_mod('nav_menu_locations');
            $locations[$location] = $menu_id;
            set_theme_mod('nav_menu_locations', $locations);
        }
    }
}


/*
|--------------------------------------------------------------------------
| Customizer Settings - Top Banner
|--------------------------------------------------------------------------
*/

function franz_customize_register($wp_customize)
{
  $wp_customize->add_section('franz_banner_section', [
    'title'    => 'Top Banner',
    'priority' => 30,
  ]);

  // Banner Text
  $wp_customize->add_setting('franz_banner_text', [
    'default'           => '',
    'sanitize_callback' => 'sanitize_text_field',
  ]);

  $wp_customize->add_control('franz_banner_text', [
    'label'   => 'Banner Text',
    'section' => 'franz_banner_section',
    'type'    => 'text',
  ]);

  // Button Text
  $wp_customize->add_setting('franz_banner_button_text', [
    'default'           => '',
    'sanitize_callback' => 'sanitize_text_field',
  ]);

  $wp_customize->add_control('franz_banner_button_text', [
    'label'   => 'Banner Button Text',
    'section' => 'franz_banner_section',
    'type'    => 'text',
  ]);

  // Button URL
  $wp_customize->add_setting('franz_banner_button_link', [
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
  ]);

  $wp_customize->add_control('franz_banner_button_link', [
    'label'   => 'Banner Button URL',
    'section' => 'franz_banner_section',
    'type'    => 'url',
  ]);
}
add_action('customize_register', 'franz_customize_register');

/*
|--------------------------------------------------------------------------
| Filter to Remove Contact Page from Primary Menu
|--------------------------------------------------------------------------
*/

function remove_contact_from_primary_menu($items, $args) {

    if ($args->theme_location === 'primary') {

        foreach ($items as $key => $item) {

            if (
                isset($item->object) &&
                $item->object === 'page' &&
                get_post_field('post_name', $item->object_id) === 'contact'
            ) {
                unset($items[$key]);
            }

        }
    }

    return $items;
}

add_filter('wp_nav_menu_objects', 'remove_contact_from_primary_menu', 10, 2);


function franz_fix_services_menu_active($classes, $item, $args) {

    // Check if we're on services archive
    if (is_post_type_archive('services') && $item->url && strpos($item->url, '/services') !== false) {
        $classes[] = 'current-menu-item';
    }

    // Check if we're on single services page
    if (is_singular('services') && $item->url && strpos($item->url, '/services') !== false) {
        $classes[] = 'current-menu-item';
    }

    return $classes;
}

add_filter('nav_menu_css_class', 'franz_fix_services_menu_active', 10, 3);


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