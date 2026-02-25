<?php get_header(); ?>

<?php get_template_part('template-parts/sections/hero'); ?>

<div class="blog-container">

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <article>
            <h2>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>

            <?php the_excerpt(); ?>

        </article>

    <?php endwhile; ?>

<?php else : ?>

    <p>No posts found.</p>

<?php endif; ?>

</div>

<?php get_footer(); ?>