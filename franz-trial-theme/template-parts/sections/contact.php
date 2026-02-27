
<section class="hero hero-home section-info contact-form">

    <div class="container hero-grid section-info-grid form-section">

        <div class="subcontainer area-1"></div>

        <div class="subcontainer area-2">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/abstract.svg" alt="Abstract Shape">
            <h1>
                Let's Connect
            </h1>
            <h2>
                We're excited to connect with you and learn more about your real estate goals. Use the form below to get in touch with Estatein.
            </h2>
        </div>
        
        <div class="subcontainer area-3">
            <form method="POST" class="contact-form">
                <div class="form-group">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" placeholder="Enter your first name" name="first_name" required>
                </div>

                <div class="form-group">
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" placeholder="Enter your last name" name="last_name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Enter your email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" placeholder="Enter your phone number" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="inquiry-type">Inquiry Type</label>
                    <select id="inquiry-type" name="inquiry_type" required>
                        <option value="">Select Inquiry Type</option>
                        <option value="general">General Inquiry</option>
                        <option value="property">Property Information</option>
                        <option value="scheduling">Schedule a Viewing</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="hear-from">How did you hear from us?</label>
                    <select id="hear-from" name="hear_from" required>
                        <option value="">Select</option>
                        <option value="social">Social Media</option>
                        <option value="referral">Referral</option>
                        <option value="search">Search Engine</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>

                <div class="form-group checkbox agreement">
                    <input type="checkbox" id="agreement" name="agreement" required>
                    <label for="agreement">I agree to the terms and conditions</label>
                </div>

                <button type="submit" class="btn btn-primary submit-button">Send Your Message</button>
            </form>
        </div>

    </div>

</section>

<section class="hero hero-home section-info contact-form">

    <div class="container hero-grid section-info-grid">

        <div class="subcontainer area-1"></div>

        <div class="subcontainer area-2">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/abstract.svg" alt="Abstract Shape">
            <h1>
                Discover Our Office Locations
            </h1>
            <h2>
                Estatein is here to serve you across multiple locations. Whether you're looking to meet our team, discuss real estate opportunities, or simply drop by for a chat, we have offices conveniently located to serve your needs. Explore the categories below to find the Estatein office nearest to you
            </h2>
        </div>
        
        <div class="subcontainer area-4 info-subsection info-navigating contact-location">
            <div class="values-card filter-card">
                <ul class="filter-container">
                        <li data-value="all" class="active">All</li>
                        <li data-value="regional">Regional</li>
                        <li data-value="international">International</li>
                </ul>
            </div>
            <div class="values-card">

            <?php
            $args = array(
                'post_type'      => 'office_location',
                'posts_per_page' => -1,
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :

                while ($query->have_posts()) : $query->the_post();

                    $location_tag = get_field('location_tag');
                    $map_link     = get_field('google_map_link');
            ?>

                <!-- ================= ONE CARD PER POST ================= -->

                <div class="content-wrapper location-item" data-type="<?php echo get_field('location_type'); ?>">

                    <div class="icon-wrapper">
                        <h5 class="site-name"><?php the_title(); ?></h5>

                        <?php
                        $terms = get_the_terms(get_the_ID(), 'location_type');
                        if ($terms && !is_wp_error($terms)) :
                            foreach ($terms as $term) :
                        ?>
                            <span class="type-badge">
                                <?php echo esc_html($term->name); ?>
                            </span>
                        <?php endforeach; endif; ?>

                        <?php if ($location_tag) : ?>
                            <h4 class="location">
                                <?php echo esc_html($location_tag); ?>
                            </h4>
                        <?php endif; ?>
                    </div>

                    <div class="values-description">
                        <?php echo esc_html(get_field('office_description')); ?>
                    </div>

                    <div class="tags">
                        <ul>

                            <li>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/mail.svg">
                                <p><?php echo esc_html(get_field('email')); ?></p>
                            </li>

                            <li>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/phone.svg">
                                <p><?php echo esc_html(get_field('phone_number')); ?></p>
                            </li>

                            <li>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/location.svg">
                                <p><?php echo esc_html(get_field('location_tag')); ?></p>
                            </li>

                        </ul>
                    </div>

                    <?php if ($map_link) : ?>
                        <a href="<?php echo esc_url($map_link); ?>"
                        target="_blank"
                        class="get-direction-button">
                            Get Direction
                        </a>
                    <?php endif; ?>

                </div>

            <?php
                endwhile;
                wp_reset_postdata();

            else :
            ?>

            <!-- ================= FALLBACK CARD ================= -->

            <div class="content-wrapper location-item">

                <div class="icon-wrapper">
                    <h5 class="site-name">Main Headquarters</h5>
                    <span class="type-badge">Regional</span>
                    <h4 class="location">Metropolis</h4>
                </div>

                <div class="values-description">
                    <p>
                        Add office locations from the dashboard to replace this content.
                    </p>
                </div>

            </div>

            <?php endif; ?>

            </div>
        </div>

    </div>

    </div>

    
</section>