<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="site-header">

    <?php get_template_part('template-parts/layout/top-banner'); ?>

    <div class="container">

      <div class="logo">
        <a href="/">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-desktop.png" alt="Franz Trial Logo">
        </a>
      </div>

      <?php get_template_part('template-parts/layout/navigation'); ?>

      <a href="/contact" class="header-cta active">
        Contact Us
      </a>

    </div>

  </header>