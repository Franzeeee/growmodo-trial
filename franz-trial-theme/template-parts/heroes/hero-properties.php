<?php
$title = $args['title'] ?? 'Default Title';

$cards = $args['cards'] ?? [
    [
        'icon' => '📞',
        'title' => 'Call Us',
        'url'  => 'tel:+1234567890',
        'desc'  => 'Reach us anytime'
    ],
    [
        'icon' => '✉️',
        'title' => 'Email',
        'url'  => 'mailto:test@email.com',
        'desc'  => 'Send us a message'
    ],
    [
        'icon' => '📍',
        'title' => 'Location',
        'url'  => 'https://www.google.com/maps/place/Your+Office+Address',
        'desc'  => 'Visit our office'
    ],
    [
        'icon' => '💬',
        'title' => 'Live Chat',
        'url'  => '#',
        'desc'  => 'Chat with support'
    ]
];
?>

<section class="hero hero-home hero-services hero-contact">
    <div class="container hero-grid">

        <div class="subcontainer area-1 no-display">

            
        </div>
        <div class="subcontainer area-2">
            <h1>
                Find Your Dream Property
            </h1>
            <h2>
                Welcome to Estatein, where your dream property awaits in every corner of our beautiful world. Explore our curated selection of properties, each offering a unique story and a chance to redefine your life. With categories to suit every dreamer, your journey 
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social-twitter.svg" alt="<?php echo esc_attr( $card['title'] ); ?> Icon">
                        </div>
                    </div>
                    <h3><?php echo esc_html( $card['title'] ); ?></h3>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>