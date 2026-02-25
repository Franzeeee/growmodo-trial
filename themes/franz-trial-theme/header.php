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
        <?php bloginfo('name'); ?>
      </div>

      <?php get_template_part('template-parts/layout/navigation'); ?>

      <div class="header-cta active">
        <a href="/contact" class="contact-btn">
          Contact Us
        </a>
      </div>

    </div>

  </header>