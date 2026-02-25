<?php

$banner_text  = get_theme_mod('franz_banner_text');
$button_text  = get_theme_mod('franz_banner_button_text');
$button_link  = get_theme_mod('franz_banner_button_link');

// Check if banner is not closed via cookie
$banner_closed = isset($_COOKIE['franz_banner_closed']);

if (!empty($banner_text) && !$banner_closed) :
?>

  <div class="top-banner" id="topBanner">

    <div class="container banner-inner">

      <div class="banner-content">

        <span class="banner-text">
          <?php echo esc_html($banner_text); ?>
        </span>

        <?php if (!empty($button_text) && !empty($button_link)) : ?>
          <a href="<?php echo esc_url($button_link); ?>" class="banner-link">
            <?php echo esc_html($button_text); ?>
          </a>
        <?php endif; ?>

      </div>

      <button
        class="banner-close"
        aria-label="Close banner"
        onclick="closeBanner()">
        &times;
      </button>

    </div>

  </div>

<?php endif; ?>