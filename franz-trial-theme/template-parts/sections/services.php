<section class="hero hero-home section-info" id="services">
    <div class="container hero-grid section-info-grid service-first-subsection">

        <div class="subcontainer area-1"></div>

        <div class="subcontainer area-2">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/abstract.svg" alt="Abstract Shape">
            <h1>
                We Strive To Achieve Excellence
            </h1>
            <h2>
                Discover our comprehensive range of services designed to meet your real estate needs. From buying and selling to property management and investment consulting, we are here to guide you every step of the way.
            </h2>
        </div>
        
        <div class="subcontainer area-4 service-subsection">

            <?php
            // Query dynamic services
            $services_query = new WP_Query(array(
                'post_type' => 'services',
                'posts_per_page' => -1
            ));

            if ($services_query->have_posts()) :

                while ($services_query->have_posts()) : $services_query->the_post();
                    $icon = get_field('service_icon'); // ACF field for SVG/icon URL or class
            ?>
                <div class="values-card">
                    <div class="icon-wrapper">
                        <div class="icon-container">
                            <?php if ($icon) : ?>
                                <?php if (strpos($icon, '.svg') !== true) : ?>
                                    <img src="<?php echo esc_url($icon); ?>" alt="<?php the_title(); ?> Icon">
                                <?php else: ?>
                                    <i class="<?php echo esc_attr($icon); ?>"></i>
                                <?php endif; ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/star-icon.svg" alt="<?php the_title(); ?> Icon">
                            <?php endif; ?>
                        </div>
                        <h3><?php the_title(); ?></h3>
                    </div>
                    <div class="values-description">
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();

            else:
            ?>

                <div class="values-card">
                    <div class="icon-wrapper">
                        <div class="icon-container">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/star-icon.svg" alt="Trust Icon">
                        </div>
                        <h3>Trust</h3>
                    </div>
                    <div class="values-description">
                        <p>Trust is the cornerstone of every successful real estate transaction.</p>
                    </div>
                </div>

                <div class="values-card">
                    <div class="icon-wrapper">
                        <div class="icon-container">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/star-icon.svg" alt="Excellence Icon">
                        </div>
                        <h3>Excellence</h3>
                    </div>
                    <div class="values-description">
                        <p>We set the bar high for ourselves. From the properties we list to the services we provide.</p>
                    </div>
                </div>

                <div class="values-card">
                    <div class="icon-wrapper">
                        <div class="icon-container">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/star-icon.svg" alt="Client-Centric Icon">
                        </div>
                        <h3>Client-Centric</h3>
                    </div>
                    <div class="values-description">
                        <p>Your dreams and needs are at the center of our universe. We listen, understand.</p>
                    </div>
                </div>

                <div class="values-card">
                    <div class="icon-wrapper">
                        <div class="icon-container">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/star-icon.svg" alt="Our Commitment Icon">
                        </div>
                        <h3>Our Commitment</h3>
                    </div>
                    <div class="values-description">
                        <p>We are dedicated to providing you with the highest level of service, professionalism.</p>
                    </div>
                </div>

            <?php endif; ?>

        </div>
    </div>
</section>