<div class="values-card testimonial-card">

    <!-- ⭐ Stars -->
    <div class="testimonial-stars">
        <?php 
        $rating = get_field('rating') ?: 5;

        for ($i = 1; $i <= 5; $i++) :
            if ($i <= $rating) :
        ?>
                <span class="star filled">★</span>
        <?php
            else :
        ?>
                <span class="star">★</span>
        <?php
            endif;
        endfor;
        ?>
    </div>

    <!-- 🏷 Title -->
    <h3 class="testimonial-title"><?php the_title(); ?></h3>

    <!-- 💬 Content -->
    <div class="testimonial-content">
        <?php the_content(); ?>
    </div>

    <!-- 👤 User Info -->
    <div class="testimonial-user">
        <div class="testimonial-image">
            <?php 
            if (has_post_thumbnail()) {
                the_post_thumbnail('thumbnail');
            } else {
                echo '<img src="' . get_template_directory_uri() . '/assets/images/default-user.png" alt="User">';
            }
            ?>
        </div>

        <div class="testimonial-meta">
            <p class="testimonial-name"><?php the_field('name'); ?></p>
            <p class="testimonial-location"><?php the_field('location'); ?></p>
        </div>
    </div>

</div>