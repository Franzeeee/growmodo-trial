<?php
/**
 * Action Card
 * Accepts:
 * $args['icon']  (image URL)
 * $args['title']
 * $args['url']
 * $args['target'] (optional)
 */
$icon   = $args['icon'] ?? '';
$title  = $args['title'] ?? '';
$url    = $args['url'] ?? '#';
$target = $args['target'] ?? '_self';
?>

<a href="<?php echo esc_url($url); ?>"
   target="<?php echo esc_attr($target); ?>"
   class="action-card">

    <?php if ($icon): ?>
        <div class="action-card__icon-wrapper">
            <img 
                src="<?php echo esc_url($icon); ?>" 
                alt="<?php echo esc_attr($title); ?>"
                class="action-card__icon"
            >
        </div>
    <?php endif; ?>

    <?php if ($title): ?>
        <span class="action-card__title">
            <?php echo esc_html($title); ?>
        </span>
    <?php endif; ?>

</a>