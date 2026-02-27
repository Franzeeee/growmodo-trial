<?php
$title = $args['title'] ?? 'Default Title';

$cards = $args['cards'] ?? [
    [
        'icon' => 'mail-purple.svg',
        'title' => 'info@estatein.com',
        'url'  => 'mailto:info@estatein.com',
    ],
    [
        'icon' => 'phone-purple.svg',
        'title' => '+1 (123) 456-7890',
        'url'  => 'tel:+11234567890',
    ],
    [
        'icon' => 'location-purple.svg',
        'title' => 'Main Headquarters',
        'url'  => 'https://www.google.com/maps/place/Your+Office+Address',
    ],
    [
        'icon' => 'fire-purple.svg',
        'title' => 'Instagram LinkedIn Facebook',
        'url'  => '#',
    ]
];
?>

<section class="hero hero-home hero-services hero-contact">
    <div class="container hero-grid">

        <div class="subcontainer area-1 no-display">

            
        </div>
        <div class="subcontainer area-2">
            <h1>
                Get in Touch with Estatein
            </h1>
            <h2>
                Welcome to Estatein's Contact Us page. We're here to assist you with any inquiries, requests, or feedback you may have.
            </h2>
        </div>
        <div class="subcontainer area-3">
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

