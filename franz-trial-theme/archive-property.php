<?php get_header(); ?>

<div class="container archive-page property-archive">

    <h1 class="archive-title">
        <?php post_type_archive_title(); ?>
    </h1>

    <?php if ( have_posts() ) : ?>

        <div class="property-grid">

            <?php while ( have_posts() ) : the_post(); ?>

                <div class="property-card">

                    <!-- Property Image -->
                    <div class="property-image">
                        <a href="<?php the_permalink(); ?>">
                            <?php 
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail('medium');
                            }
                            ?>
                        </a>
                    </div>

                    <div class="property-content">

                        <!-- Property Type -->
                        <div class="property-type">
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'property_type');
                            if ($terms && !is_wp_error($terms)) :
                                foreach ($terms as $term) :
                                    echo '<span class="type-badge">' . esc_html($term->name) . '</span>';
                                endforeach;
                            endif;
                            ?>
                        </div>

                        <!-- Title -->
                        <h2 class="property-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                        <!-- Location -->
                        <p class="property-location">
                            <?php echo esc_html(get_field('location')); ?>
                        </p>

                        <!-- Price -->
                        <p class="property-price">
                            ₱<?php echo number_format(get_field('price')); ?>
                        </p>

                        <!-- Meta Info -->
                        <div class="property-meta">
                            <span><?php echo esc_html(get_field('bedrooms')); ?> Beds</span>
                            <span><?php echo esc_html(get_field('bathrooms')); ?> Baths</span>
                            <span><?php echo esc_html(get_field('area_size')); ?> sqm</span>
                        </div>

                    </div>

                </div>

            <?php endwhile; ?>

        </div>

        <!-- Pagination -->
        <div class="pagination">
            <?php
            echo paginate_links(array(
                'total' => $wp_query->max_num_pages
            ));
            ?>
        </div>

    <?php else : ?>
        <p>No properties found.</p>
    <?php endif; ?>

</div>

<?php get_footer(); ?>