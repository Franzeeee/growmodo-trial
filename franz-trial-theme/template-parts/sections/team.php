<section class="team-section">

    <div class="container">

        <div class="team-grid">

            <?php
            $team_query = new WP_Query([
                'post_type' => 'team',
                'posts_per_page' => -1
            ]);

            if ($team_query->have_posts()) :
                while ($team_query->have_posts()) :
                    $team_query->the_post();
            ?>

                <div class="team-card">

                    <div class="team-image">
                        <?php 
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('medium');
                        } else {
                            echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/images/placeholder-team.jpg') . '" alt="' . esc_attr(get_the_title()) . '">';
                        }
                        ?>
                    </div>

                    <div class="team-info">
                        <h3><?php the_title(); ?></h3>

                        <p><?php the_field('position'); ?></p>

                        <div class="team-socials">

                            <?php if (get_field('facebook')) : ?>
                                <a href="<?php the_field('facebook'); ?>" target="_blank">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/social-facebook.svg'); ?>" alt="Facebook">
                                </a>
                            <?php endif; ?>

                            <?php if (get_field('linkedin')) : ?>
                                <a href="<?php the_field('linkedin'); ?>" target="_blank">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/social-linkedin.svg'); ?>" alt="LinkedIn">
                                </a>
                            <?php endif; ?>

                        </div>

                        <div class="input-group">
                            <input type="email" placeholder="Say Hello 👋" class="email-input">
                            <button class="subscribe-button">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/send.svg'); ?>" alt="Send">
                            </button>
                        </div>
                    </div>

                </div>

            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>

        </div>

    </div>

</section>