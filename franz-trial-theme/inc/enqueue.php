<?php

// Enqueue styles and scripts to ensure they are properly loaded in the theme
function franz_enqueue_assets()
{
  wp_enqueue_style(
    'franz-main-style',
    get_template_directory_uri() . '/assets/css/main.css',
    array(),
    '1.0',
    'all'
  );

  wp_enqueue_script(
    'franz-main-js',
    get_template_directory_uri() . '/assets/js/main.js',
    array(),
    '1.0',
    true
  );
}

add_action('wp_enqueue_scripts', 'franz_enqueue_assets');
