<?php

function franz_theme_setup()
{

  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'gallery',
    'caption'
  ));

  register_nav_menus(array(
    'primary' => 'Primary Menu'
  ));
}

add_action('after_setup_theme', 'franz_theme_setup');



/*
|--------------------------------------------------------------------------
| Custom Theme Default Pages
|--------------------------------------------------------------------------
*/

function franz_create_default_pages()
{

  $pages = [
    'Home' => 'front-page',
    'About Us' => 'about-us',
    'Services' => 'services',
    'Contact' => 'contact',
    'Blog' => 'blog'
  ];

  foreach ($pages as $title => $slug) {

    // Check if page already exists
    $page = get_page_by_path($slug);

    if (!$page) {

      wp_insert_post([
        'post_title' => $title,
        'post_name' => $slug,
        'post_status' => 'publish',
        'post_type' => 'page'
      ]);
    }
  }
}

add_action('after_switch_theme', 'franz_create_default_pages');


/*
|--------------------------------------------------------------------------
| Custom Theme Menu Creation
|--------------------------------------------------------------------------
*/

function franz_create_menu()
{

  $menu_name = 'Primary Menu';

  // Check if menu exists
  $menu_exists = wp_get_nav_menu_object($menu_name);

  if (!$menu_exists) {

    $menu_id = wp_create_nav_menu($menu_name);

    $pages = get_pages();

    foreach ($pages as $page) {

      wp_update_nav_menu_item($menu_id, 0, [
        'menu-item-title' => $page->post_title,
        'menu-item-object' => 'page',
        'menu-item-object-id' => $page->ID,
        'menu-item-type' => 'post_type',
        'menu-item-status' => 'publish'
      ]);
    }

    // Assign menu to theme location
    set_theme_mod('nav_menu_locations', [
      'primary' => $menu_id
    ]);
  }
}

add_action('after_switch_theme', 'franz_create_menu');

/*
|--------------------------------------------------------------------------
| Customizer Settings - Top Banner
|--------------------------------------------------------------------------
*/

function franz_customize_register($wp_customize)
{

  // Section
  $wp_customize->add_section('franz_banner_section', array(
    'title' => 'Top Banner',
    'priority' => 30,
  ));

  // Banner Text
  $wp_customize->add_setting('franz_banner_text', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('franz_banner_text', array(
    'label' => 'Banner Text',
    'section' => 'franz_banner_section',
    'type' => 'text',
  ));

  // Button Text
  $wp_customize->add_setting('franz_banner_button_text', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('franz_banner_button_text', array(
    'label' => 'Banner Button Text',
    'section' => 'franz_banner_section',
    'type' => 'text',
  ));

  // Button URL
  $wp_customize->add_setting('franz_banner_button_link', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control('franz_banner_button_link', array(
    'label' => 'Banner Button URL',
    'section' => 'franz_banner_section',
    'type' => 'url',
  ));
}

add_action('customize_register', 'franz_customize_register');
