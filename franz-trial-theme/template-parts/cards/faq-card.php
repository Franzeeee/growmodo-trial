<div class="values-card testimonial-card">

    <!-- 🏷 Title -->
    <h3 class="testimonial-title"><?php the_title(); ?></h3>

    <!-- 💬 Content -->
    <div class="testimonial-content">
        <?php the_content(); ?>
    </div>

    <!-- 👤 User Info -->
    <div class="testimonial-user">
        <div class="testimonial-meta read-more">
            <?php get_template_part('template-parts/component/button', null, ['button_text' => 'Read More']); ?>
        </div>
    </div>

</div>