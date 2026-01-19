<?php

declare(strict_types=1);

get_header();
?>
<?php
$title = lamnguyen_get_field('capacity_title', get_the_title());
$subtitle = lamnguyen_get_field('capacity_subtitle', '');
$body = lamnguyen_get_field('capacity_body', '');
?>
<section class="brxe-section bricks-lazy-hidden page-nang-luc">
    <div class="brxe-container bricks-lazy-hidden">
        <h1 class="brxe-heading"><?php echo esc_html($title); ?></h1>
        <?php if ($subtitle) : ?>
            <h2 class="brxe-heading"><?php echo esc_html($subtitle); ?></h2>
        <?php endif; ?>
        <?php if ($body) : ?>
            <div class="brxe-text-basic"><?php echo esc_html($body); ?></div>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
