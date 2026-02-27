<div class="footer-container">

    <!-- <div class="footer-bg-text">
        <?php bloginfo('name'); ?>
    </div> -->

    <!-- Brand Section -->
    <div class="footer-brand">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-desktop.png"
        alt="<?php bloginfo('name'); ?>"
        class="footer-logo">

    <!-- <p class="footer-description">
        "Innovating the future, one solution at a time. We're committed to delivering exceptional value and transforming ideas into reality."
    </p> -->

    <!-- Email Subscribe -->
    <form class="footer-subscribe" action="#" method="post">
        <input type="email"
            name="email"
            placeholder="Enter your email"
            required>

        <button type="submit">
        Subscribe
        </button>
    </form>

    </div>

    <!-- Sitemap -->
    <div class="footer-grid">

    <?php
        $footer_locations = [
            'footer-1',
            'footer-2',
            'footer-3',
            'footer-5',
            'footer-4',
        ];

        foreach ($footer_locations as $location) {

            if (has_nav_menu($location)) :

                $menu_obj = wp_get_nav_menu_object(get_nav_menu_locations()[$location]);

                ?>

                <div class="footer-card">
                    
                    <h3>
                        <?php echo $menu_obj ? esc_html($menu_obj->name) : 'Menu'; ?>
                    </h3>

                    <?php
                    wp_nav_menu([
                        'theme_location' => $location,
                        'container'      => false,
                        'menu_class'     => 'footer-menu'
                    ]);
                    ?>

                </div>

            <?php
            endif;
        }
    ?>

</div>
</div>