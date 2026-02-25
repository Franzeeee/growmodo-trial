<nav class="main-nav" aria-label="Primary Navigation">

  <?php
  wp_nav_menu([
    'theme_location' => 'primary',
    'container' => false,
    'menu_class' => 'nav-menu'
  ]);
  ?>

  <a href="/contact" class="header-cta active">
        Contact Us
  </a>

  <button class="menu-toggle" id="menuToggle">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/burger-menu.svg" alt="Menu Icon">
  </button>

  <!-- A div for mobile, it will appear if menu is toggled open -->
  <div class="mobile-menu" id="mobileMenu">
    <?php
    wp_nav_menu([
      'theme_location' => 'primary',
      'container' => false,
      'menu_class' => 'mobile-nav-menu'
    ]);
    ?>
    <a href="/contact" class="header-cta active">
        Contact Us
    </a>
  </div>

</nav>
