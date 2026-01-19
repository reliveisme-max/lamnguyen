<?php

declare(strict_types=1);

$features = lamnguyen_get_field('feature_items', array());
$center_image = lamnguyen_get_field('feature_center_image', null);
?>
<section id="brxe-ipcyou" class="brxe-section bricks-lazy-hidden">
    <div id="brxe-nwpqoz" class="brxe-container bricks-lazy-hidden">
        <div id="brxe-hgjyqh" class="brxe-block brx-grid bricks-lazy-hidden">
            <?php foreach ($features as $feature) : ?>
                <div class="brxe-block bricks-lazy-hidden">
                    <h3 class="brxe-heading">
                        <?php echo esc_html($feature['title'] ?? ''); ?>
                        <?php if (!empty($feature['highlight'])) : ?>
                            <span><?php echo esc_html($feature['highlight']); ?></span>
                        <?php endif; ?>
                    </h3>
                    <?php if (!empty($feature['icon_class'])) : ?>
                        <i class="<?php echo esc_attr($feature['icon_class']); ?> brxe-icon"></i>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
        <div id="brxe-surwpn" class="brxe-block bricks-lazy-hidden">
            <?php echo lamnguyen_render_image($center_image, 'full', array('class' => 'brxe-image css-filter')); ?>
        </div>
    </div>
</section>