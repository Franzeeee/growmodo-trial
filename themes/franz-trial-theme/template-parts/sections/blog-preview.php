<section class="blog-preview">
  <div class="container">

    <h2>Latest Blog</h2>

    <?php

    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 3
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :

      while ($query->have_posts()) :
        $query->the_post();

    ?>

        <article class="blog-card">

          <h3>
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h3>

          <p><?php the_excerpt(); ?></p>

        </article>

    <?php

      endwhile;

      wp_reset_postdata();

    else :

      echo '<p>No blog posts found.</p>';

    endif;

    ?>

  </div>
</section>