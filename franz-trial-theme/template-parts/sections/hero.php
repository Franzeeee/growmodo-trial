<?php

  if (is_front_page()) {
      get_template_part('template-parts/heroes/hero-home');

  } elseif (is_post_type_archive('services')) {
      get_template_part('template-parts/heroes/hero-services');

  } elseif (is_home()) {
      get_template_part('template-parts/heroes/hero-blog');

  } else {
      get_template_part('template-parts/heroes/hero-default');
  }

?>