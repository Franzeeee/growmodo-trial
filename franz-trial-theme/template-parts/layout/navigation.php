<nav class="main-nav" aria-label="Primary Navigation">

  <?php
  wp_nav_menu([
    'theme_location' => 'primary',
    'container' => false,
    'menu_class' => 'nav-menu'
  ]);
  ?>

  <button class="menu-toggle" id="menuToggle">
    ☰
  </button>

</nav>