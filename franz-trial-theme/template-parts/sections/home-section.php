<?php
$title = $args['title'] ?? 'Default Title';

$cards = $args['cards'] ?? [
    [
        'icon' => 'house-purple.svg',
        'title' => 'Find Your Dream Home',
        'url'  => 'tel:+1234567890',
    ],
    [
        'icon' => 'money-purple.svg',
        'title' => 'Unlock Property Value',
        'url'  => 'mailto:test@email.com',
    ],
    [
        'icon' => 'property-purple.svg',
        'title' => 'Effortless Property Management',
        'url'  => 'https://www.google.com/maps/place/Your+Office+Address',
    ],
    [
        'icon' => 'sun-purple.svg',
        'title' => 'Smart Investments, Informed Decisions',
        'url'  => '#',
    ]
];
?>

<section class="hero hero-home hero-services hero-contact home-section">
    <div class="container hero-grid">

        <div class="subcontainer area-1 no-display">
        </div>
        <div class="subcontainer area-2 no-display">
        </div>
        <div class="subcontainer area-3 no-display">
        </div>
        <div class="subcontainer area-4">
            <div class="cards-grid">
                <?php foreach ( $cards as $card ) : ?>
                <div class="card">
                    <img class="go-to" src="<?php echo get_template_directory_uri(); ?>/assets/icons/go-to.svg" alt="<?php echo esc_attr( $card['title'] ); ?> Icon">
                    <div class="icon-wrapper">
                        <div class="icon-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/<?php echo esc_attr( $card['icon'] ); ?>" alt="<?php echo esc_attr( $card['title'] ); ?> Icon">
                        </div>
                    </div>
                    <h3><?php echo esc_html( $card['title'] ); ?></h3>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>

<?php get_template_part('template-parts/cards/property-cards'); ?>

<?php get_template_part('template-parts/sections/testimonials'); ?>

<?php get_template_part('template-parts/sections/faq'); ?>