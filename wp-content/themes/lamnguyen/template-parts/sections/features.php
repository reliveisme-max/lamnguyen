<?php

declare(strict_types=1);

$features = lamnguyen_get_field('feature_items', array());
$center_image = lamnguyen_get_field('feature_center_image', null);
$decor_bottom = lamnguyen_get_field('feature_decor_bottom', null);
$decor_bottom_url = '';

$features = is_array($features) ? $features : array();
$features = array_values(array_filter($features, static function ($feature): bool {
    if (!is_array($feature)) {
        return false;
    }

    return !empty($feature['title']) || !empty($feature['highlight']) || !empty($feature['icon_class']);
}));


if (is_array($decor_bottom) && isset($decor_bottom['url'])) {
    $decor_bottom_url = (string) $decor_bottom['url'];
} elseif (is_numeric($decor_bottom)) {
    $decor_bottom_url = (string) wp_get_attachment_image_url((int) $decor_bottom, 'full');
} elseif (is_string($decor_bottom)) {
    $decor_bottom_url = $decor_bottom;
}

$feature_style = '';
if ($decor_bottom_url !== '') {
    $feature_style = '--feature-decor-bottom: url(' . esc_url($decor_bottom_url) . ');';
}
$feature_style_attr = $feature_style !== '' ? ' style="' . esc_attr($feature_style) . '"' : '';
?>
<section id="section-features" class="section section-features" <?php echo $feature_style_attr; ?>>
    <div class="container features-inner">
        <div class="features-grid">
            <?php foreach ($features as $index => $feature) : ?>
                <?php
                $item_class = 'feature-item feature-item--' . (int) ($index + 1);
                ?>
                <div class="<?php echo esc_attr($item_class); ?>">
                    <h3 class="feature-title">
                        <?php echo esc_html($feature['title'] ?? ''); ?>
                        <?php if (!empty($feature['highlight'])) : ?>
                            <span><?php echo esc_html($feature['highlight']); ?></span>
                        <?php endif; ?>
                    </h3>
                    <?php if (!empty($feature['icon_class'])) : ?>
                        <i class="<?php echo esc_attr($feature['icon_class']); ?> feature-icon"></i>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
        <?php if ($center_image) : ?>
            <div class="features-center">
                <?php echo lamnguyen_render_image($center_image, 'full', array('class' => 'features-center__image')); ?>
            </div>
        <?php endif; ?>
    </div>
</section>