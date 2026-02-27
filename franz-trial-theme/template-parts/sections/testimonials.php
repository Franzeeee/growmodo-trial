<section class="hero hero-home section-info" id="testimonials">
    <div class="container hero-grid section-info-grid">

        <div class="subcontainer area-1"></div>

        <div class="subcontainer area-2">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/abstract.svg" alt="Abstract Shape">
            <h1>What Our Clients Say</h1>
            <h2>
                Read the success stories and heartfelt testimonials from our valued clients. 
                Discover why they chose Estatein for their real estate needs.
            </h2>
        </div>
        
        <div class="subcontainer area-4 service-subsection">
            
            <div class="values-card testimonials-container">

                <!-- 🔥 MOVE LOOP INSIDE HERE -->
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;

                $args = array(
                    'post_type'      => 'testimonial',
                    'posts_per_page' => 6,
                    'paged'          => $paged,
                );

                $testimonial_query = new WP_Query($args);

                if ($testimonial_query->have_posts()) :
                ?>

                    <div class="testimonials-grid">
                        <?php while ($testimonial_query->have_posts()) :
                            $testimonial_query->the_post();

                            get_template_part('template-parts/cards/testimonial-card');

                        endwhile; ?>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination">
                        <?php
                        echo paginate_links(array(
                            'total'   => $testimonial_query->max_num_pages,
                            'current' => $paged,
                        ));
                        ?>
                    </div>

                <?php
                    wp_reset_postdata();
                else :
                    echo '<div class="testimonials-empty"><p>No testimonials found.</p></div>';
                endif;
                ?>

            </div>

        </div>

    </div>
</section>