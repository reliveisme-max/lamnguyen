<?php

declare(strict_types=1);

$features = lamnguyen_get_field('feature_items', array());
$center_image = lamnguyen_get_field('feature_center_image', null);
$decor_bottom = lamnguyen_get_field('feature_decor_bottom', null);
$decor_bottom_markup = '';

$features = is_array($features) ? $features : array();
$features = array_values(array_filter($features, static function ($feature): bool {
    if (!is_array($feature)) {
        return false;
    }

    return !empty($feature['title']) || !empty($feature['highlight']) || !empty($feature['icon_class']);
}));

$item_ids = array('brxe-jkgvbc', 'brxe-afyiys', 'brxe-tbvogr', 'brxe-ocpczf', 'brxe-yyculv', 'brxe-lcsnkt');
$title_ids = array('brxe-qemluz', 'brxe-xujwco', 'brxe-qbjxzc', 'brxe-tpondw', 'brxe-trllao', 'brxe-uunpvl');
$icon_ids = array('brxe-spdkcp', 'brxe-ymkcyb', 'brxe-gfrylb', 'brxe-sloawq', 'brxe-ptzqzu', 'brxe-mvfjkw');

if ($decor_bottom) {
    if (is_string($decor_bottom)) {
        $decor_bottom_markup = sprintf(
            '<img src="%s" alt="" class="feature-decor--bottom" loading="lazy" decoding="async" />',
            esc_url($decor_bottom)
        );
    } else {
        $decor_bottom_markup = lamnguyen_render_image(
            $decor_bottom,
            'full',
            array('class' => 'feature-decor--bottom')
        );
    }
}
?>
<section id="brxe-ipcyou" class="brxe-section bricks-lazy-hidden">
    <?php echo $decor_bottom_markup; ?>
    <div id="brxe-nwpqoz" class="brxe-container bricks-lazy-hidden">
        <div id="brxe-hgjyqh" class="brxe-block brx-grid bricks-lazy-hidden">
            <?php foreach ($features as $index => $feature) : ?>
                <?php
                $item_id = $item_ids[$index] ?? '';
                $title_id = $title_ids[$index] ?? '';
                $icon_id = $icon_ids[$index] ?? '';
                ?>
                <div<?php echo $item_id !== '' ? ' id="' . esc_attr($item_id) . '"' : ''; ?>
                    class="brxe-block bricks-lazy-hidden">
                    <h3<?php echo $title_id !== '' ? ' id="' . esc_attr($title_id) . '"' : ''; ?> class="brxe-heading">
                        <?php echo esc_html($feature['title'] ?? ''); ?>
                        <?php if (!empty($feature['highlight'])) : ?>
                            <span><?php echo esc_html($feature['highlight']); ?></span>
                        <?php endif; ?>
                        </h3>
                        <?php if (!empty($feature['icon_class'])) : ?>
                            <i<?php echo $icon_id !== '' ? ' id="' . esc_attr($icon_id) . '"' : ''; ?>
                                class="<?php echo esc_attr($feature['icon_class']); ?> brxe-icon"></i>
                            <?php endif; ?>
        </div>
    <?php endforeach; ?>
    </div>
    <?php if ($center_image) : ?>
        <div id="brxe-surwpn" class="brxe-block bricks-lazy-hidden">
            <?php echo lamnguyen_render_image($center_image, 'full', array('class' => 'brxe-image css-filter')); ?>
        </div>
    <?php endif; ?>
    </div>
</section>