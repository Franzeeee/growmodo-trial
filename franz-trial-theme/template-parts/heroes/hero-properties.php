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

<section class="hero hero-home hero-services hero-contact properties-hero">
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
        <div class="subcontainer area-3 no-display">
        </div>
        <div class="subcontainer area-4 no-display">
        </div>

    </div>
</section>