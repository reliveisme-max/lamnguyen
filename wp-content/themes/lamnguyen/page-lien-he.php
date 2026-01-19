<?php

declare(strict_types=1);

get_header();
?>
<?php
$title = lamnguyen_get_field('contact_title', get_the_title());
$subtitle = lamnguyen_get_field('contact_subtitle', '');
$form_shortcode = lamnguyen_get_field('contact_form_shortcode', '');
?>
<section class="brxe-section bricks-lazy-hidden page-lien-he">
    <div class="brxe-container bricks-lazy-hidden">
        <h1 class="brxe-heading"><?php echo esc_html($title); ?></h1>
        <?php if ($subtitle) : ?>
            <div class="brxe-text-basic"><?php echo esc_html($subtitle); ?></div>
        <?php endif; ?>
        <?php if ($form_shortcode) : ?>
            <div class="brxe-block bricks-lazy-hidden">
                <?php echo do_shortcode($form_shortcode); ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
