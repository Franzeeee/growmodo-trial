<?php
get_header(); ?>

<div class="container archive-page">

    <h1 class="archive-title">
        <?php
        if ( is_category() ) {
            echo 'Category: ' . single_cat_title('', false);
        } elseif ( is_tag() ) {
            echo 'Tag: ' . single_tag_title('', false);
        } elseif ( is_author() ) {
            echo 'Author: ' . get_the_author();
        } elseif ( is_day() ) {
            echo 'Day: ' . get_the_date();
        } elseif ( is_month() ) {
            echo 'Month: ' . get_the_date('F Y');
        } elseif ( is_year() ) {
            echo 'Year: ' . get_the_date('Y');
        } else {
            echo 'Archives';
        }
        ?>
    </h1>

    <?php if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            
            <div class="archive-post">
                <h2 class="post-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>

                <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                    </a>
                <?php endif; ?>

                <div class="post-excerpt">
                    <?php the_excerpt(); ?>
                </div>
            </div>

        <?php endwhile; ?>

        <!-- Pagination -->
        <div class="pagination">
            <?php
            echo paginate_links( array(
                'total' => $GLOBALS['wp_query']->max_num_pages
            ) );
            ?>
        </div>

    <?php else : ?>
        <p>No posts found in this archive.</p>
    <?php endif; ?>

</div>

<?php get_footer(); ?>