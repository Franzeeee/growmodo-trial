<?php
$button_text = $args['button_text'] ?? 'Click Me';
?>


<button class="custom-button">
    <?php echo esc_html( $button_text ); ?>
</button>
