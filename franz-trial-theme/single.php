<?php
get_header(); ?>

<div class="container single-post">

    <h1>Speet</h1>

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
        
            <h1 class="post-title"><?php the_title(); ?></h1>
            
            <div class="post-meta">
                Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?> |
                Categories: <?php the_category(', '); ?> |
                Tags: <?php the_tags('', ', ', ''); ?>
            </div>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <div class="post-content">
                <?php the_content(); ?>
            </div>

            <!-- Comments -->
            <div class="post-comments">
                <?php
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>
            </div>

        <?php endwhile;
    else :
        echo '<p>No post found.</p>';
    endif;
    ?>

</div>

<?php get_footer(); ?>