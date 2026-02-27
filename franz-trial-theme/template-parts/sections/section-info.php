<section class="hero hero-home section-info">
    <div class="container hero-grid section-info-grid first-section-info">

        <div class="subcontainer area-1"></div>

        <div class="subcontainer area-2">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/abstract.svg" alt="Abstract Shape">
            <h1>
                <?php 
                // Dynamic heading
                $values_heading = get_field('values_heading'); 
                echo $values_heading ? esc_html($values_heading) : 'Our Values';
                ?>
            </h1>
            <h2>
                <?php 
                // Dynamic description
                $values_description = get_field('values_description'); 
                echo $values_description ? wp_kses_post($values_description) : 'Our story is one of continuous growth and evolution. We started as a small team with big dreams, determined to create a real estate platform that transcended the ordinary.';
                ?>
            </h2>
        </div>
        
        <div class="subcontainer area-4 info-subsection">
            <?php 
            // Check if at least one card has content
            $value1_title = get_field('value1_title');
            if ($value1_title) : 
            ?>
                <div class="values-card">
                    <div class="icon-wrapper">
                        <div class="icon-container">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/star-icon.svg" alt="<?php echo esc_attr($value1_title); ?>">
                        </div>
                        <h3><?php echo esc_html($value1_title); ?></h3>
                    </div>
                    <div class="values-description">
                        <p><?php echo esc_html(get_field('value1_description')); ?></p>
                    </div>
                </div>

                <?php if ($value2_title = get_field('value2_title')) : ?>
                <div class="values-card">
                    <div class="icon-wrapper">
                        <div class="icon-container">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/star-icon.svg" alt="<?php echo esc_attr($value2_title); ?>">
                        </div>
                        <h3><?php echo esc_html($value2_title); ?></h3>
                    </div>
                    <div class="values-description">
                        <p><?php echo esc_html(get_field('value2_description')); ?></p>
                    </div>
                </div>
                <?php endif; ?>

                <?php if ($value3_title = get_field('value3_title')) : ?>
                <div class="values-card">
                    <div class="icon-wrapper">
                        <div class="icon-container">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/star-icon.svg" alt="<?php echo esc_attr($value3_title); ?>">
                        </div>
                        <h3><?php echo esc_html($value3_title); ?></h3>
                    </div>
                    <div class="values-description">
                        <p><?php echo esc_html(get_field('value3_description')); ?></p>
                    </div>
                </div>
                <?php endif; ?>

                <?php if ($value4_title = get_field('value4_title')) : ?>
                <div class="values-card">
                    <div class="icon-wrapper">
                        <div class="icon-container">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/star-icon.svg" alt="<?php echo esc_attr($value4_title); ?>">
                        </div>
                        <h3><?php echo esc_html($value4_title); ?></h3>
                    </div>
                    <div class="values-description">
                        <p><?php echo esc_html(get_field('value4_description')); ?></p>
                    </div>
                </div>
                <?php endif; ?>

            <?php else: ?>
                <!-- Fallback: static cards -->
                <div class="values-card">
                    <div class="icon-wrapper">
                        <div class="icon-container">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/star-icon.svg" alt="Respect Icon">
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
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/star-icon.svg" alt="Respect Icon">
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
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/star-icon.svg" alt="Respect Icon">
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
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/star-icon.svg" alt="Respect Icon">
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

    <div class="container hero-grid section-info-grid">

        <div class="subcontainer area-1"></div>

        <div class="subcontainer area-2">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/abstract.svg" alt="Abstract Shape">
            <h1>
                Our Achievements
            </h1>
            <h2>
                Our story is one of continuous growth and evolution. We started as a small team with big dreams, determined to create a real estate platform that transcended the ordinary.
            </h2>
        </div>
        
        <div class="subcontainer area-4 info-subsection info-achievements">
            <div class="values-card">
                <div class="icon-wrapper">
                    <h3>3+ Years of Excellence</h3>
                </div>
                <div class="values-description">
                    <p>
                        With over 3 years in the industry, we've amassed a wealth of knowledge and experience.
                    </p>

                </div>
            </div>

            <div class="values-card">
                <div class="icon-wrapper">
                    <h3>Happy Clients</h3>
                </div>
                <div class="values-description">
                    <p>
                        Our greatest achievement is the satisfaction of our clients. Their success stories fuel our passion for what we do.
                    </p>
                </div>
            </div>

            <div class="values-card">
                <div class="icon-wrapper">
                    <h3>Industry Recognition</h3>
                </div>
                <div class="values-description">
                    <p>
                        We've earned the respect of our peers and industry leaders, with accolades and awards that reflect our commitment to excellence.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div class="container hero-grid section-info-grid">

        <div class="subcontainer area-1"></div>

        <div class="subcontainer area-2">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/abstract.svg" alt="Abstract Shape">
            <h1>
                Navigating the Estatein Experience
            </h1>
            <h2>
                At Estatein, we've designed a straightforward process to help you find and purchase your dream property with ease. Here's a step-by-step guide to how it all works.
            </h2>
        </div>
        
        <div class="subcontainer area-4 info-subsection info-navigating">
            <div class="values-card">
                <div class="step-header">
                    <h3>Step 01</h3>
                </div>
                <div class="content-wrapper">
                    <div class="icon-wrapper">
                        <h4>Discover a World of Possibilities</h4>
                    </div>
                    <div class="values-description">
                        <p>
                            Your journey begins with exploring our carefully curated property listings. Use our intuitive search tools to filter properties based on your preferences, including location,
                        </p>
                    </div>
                </div>
            </div>

            <div class="values-card">
                <div class="step-header">
                    <h3>Step 02</h3>
                </div>
                <div class="content-wrapper">
                    <div class="icon-wrapper">
                        <h4>Narrowing Down Your Choices</h4>
                    </div>
                    <div class="values-description">
                        <p>
                            Once you've found properties that catch your eye, save them to your account or make a shortlist. This allows you to compare and revisit your favorites as you make your decision.
                        </p>
                    </div>
                </div>
            </div>

            <div class="values-card">
                <div class="step-header">
                    <h3>Step 03</h3>
                </div>
                <div class="content-wrapper">
                    <div class="icon-wrapper">
                        <h4>Personalized Guidance</h4>
                    </div>
                    <div class="values-description">
                        <p>
                           Have questions about a property or need more information? Our dedicated team of real estate experts is just a call or message away.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

        <div class="container hero-grid section-info-grid">

        <div class="subcontainer area-1"></div>

        <div class="subcontainer area-2">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/abstract.svg" alt="Abstract Shape">
            <h1>
                Meet the Estatein Team
            </h1>
            <h2>
                At Estatein, our success is driven by the dedication and expertise of our team. Get to know the people behind our mission to make your real estate dreams a reality.
            </h2>
        </div>
        
        <div class="subcontainer area-4 info-subsection team-section">
            <div class="values-card">
                <div class="content-wrapper">
                    <?php get_template_part('template-parts/sections/team'); ?>
                </div>
            </div>

            

        </div>

    </div>

    
</section>