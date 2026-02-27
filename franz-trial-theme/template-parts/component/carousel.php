<div class="carousel">
  <div class="carousel-track" id="carouselTrack">

    <?php
    // ===== PROPERTY CPT QUERY =====

    $args = array(
        'post_type'      => 'property',
        'posts_per_page' => 8,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :

        while ($query->have_posts()) : $query->the_post();

            $price      = get_field('price');
            $location   = get_field('location');
            $image      = get_field('property_image');
    ?>

        <div class="slide">
          <div class="slide-content">

            <!-- IMAGE -->
            <div class="image-container">
              <?php if ($image) : ?>
                <img src="<?php echo esc_url(get_field('property_image')); ?>"
                     alt="<?php echo esc_attr(get_the_title()); ?>">
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/property-placeholder.jpg">
              <?php endif; ?>
            </div>

            <!-- TEXT -->
            <div class="text-content">
              <h3><?php the_title(); ?></h3>

                <p class="location">
                  <?php echo esc_html(get_field('description')); ?>
                </p>

            </div>

            <!-- PRICE + BUTTON -->
            <div class="price-action">

              <div class="price">
                <p>Price</p>
                <h4>
                  $<?php echo number_format($price); ?>
                </h4>
              </div>

              <a href="<?php the_permalink(); ?>" class="action-btn">
                View Property Details
              </a>

            </div>

          </div>
        </div>

    <?php
        endwhile;
        wp_reset_postdata();

    else :
    ?>

    <!-- ===== CALLBACK (FALLBACK) ===== -->

    <div class="slide">
      <div class="slide-content">

        <div class="image-container">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/property1.jpg">
        </div>

        <div class="text-content">
          <h3>Sample Property</h3>
          <p>No properties found. Add properties from the dashboard.</p>
        </div>

        <div class="price-action">
          <div class="price">
            <p>Price</p>
            <h4>₱0</h4>
          </div>

          <button class="action-btn" disabled>
            View Property Details
          </button>
        </div>

      </div>
    </div>

    <?php endif; ?>

  </div>

  <!-- ===== CONTROLS ===== -->

  <div class="carousel-footer">
    <div class="controls">
      <button id="prevBtn">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/left-arrow.svg">
      </button>

      <span id="counter"></span>

      <button id="nextBtn">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/right-arrow.svg">
      </button>
    </div>
  </div>

</div>