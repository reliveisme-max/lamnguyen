<?php

declare(strict_types=1);

$equipment_items = lamnguyen_get_field('equipment_items', array());
$cta_primary_text = lamnguyen_get_field('equipment_cta_primary_text', 'Năng lực in');
$cta_primary_link = lamnguyen_get_field('equipment_cta_primary_link', home_url('/nang-luc/'));
$cta_secondary_text = lamnguyen_get_field('equipment_cta_secondary_text', 'Tải hồ sơ năng lực');
$cta_secondary_link = lamnguyen_get_field('equipment_cta_secondary_link', '#');
$splide_config = htmlspecialchars(json_encode(array(
    'type' => 'loop',
    'direction' => 'ltr',
    'keyboard' => 'global',
    'height' => 'auto',
    'gap' => 'var(--space-md)',
    'start' => 0,
    'perPage' => 2,
    'perMove' => 1,
    'speed' => 400,
    'interval' => 2000,
    'autoHeight' => false,
    'autoplay' => true,
    'pauseOnHover' => false,
    'pauseOnFocus' => false,
    'arrows' => false,
    'pagination' => false,
    'mediaQuery' => 'max',
    'breakpoints' => array(
        '1279' => array('height' => 'auto', 'gap' => 'var(--space-md)', 'perPage' => '2', 'interval' => 2000, 'autoplay' => true),
        '767' => array('perPage' => '1'),
        '478' => array('perPage' => '1'),
    ),
)), ENT_QUOTES, 'UTF-8');
?>
<section id="brxe-qkwrmf" class="brxe-section bricks-lazy-hidden">
    <div class="brxe-slider-nested bricks-lazy-hidden splide" data-splide="<?php echo $splide_config; ?>">
        <div class="splide__track">
            <div class="splide__list">
                <?php foreach ($equipment_items as $item) : ?>
                    <div class="brxe-block bricks-lazy-hidden splide__slide">
                        <?php echo lamnguyen_render_image($item['image'] ?? null, 'full', array('class' => 'brxe-image css-filter')); ?>
                        <div class="brxe-block bricks-lazy-hidden">
                            <?php if (!empty($item['title'])) : ?>
                                <h3 class="brxe-heading"><?php echo esc_html($item['title']); ?></h3>
                            <?php endif; ?>
                            <?php if (!empty($item['subtitle'])) : ?>
                                <h4 class="brxe-heading"><?php echo esc_html($item['subtitle']); ?></h4>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div id="brxe-smtaha" class="brxe-block bricks-lazy-hidden">
        <a id="brxe-lesxwm" class="brxe-button bricks-button outline circle"
            href="<?php echo esc_url($cta_primary_link); ?>">
            <?php echo esc_html($cta_primary_text); ?>
        </a>
        <a id="brxe-ytbkgc" class="brxe-button bricks-button outline circle"
            href="<?php echo esc_url($cta_secondary_link); ?>" target="_blank" rel="noopener">
            <?php echo esc_html($cta_secondary_text); ?>
            <i class="ti-download"></i>
        </a>
    </div>
</section>