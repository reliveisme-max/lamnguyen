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
<section id="section-equipment" class="section section-equipment">
    <div class="equipment-slider splide" data-splide="<?php echo $splide_config; ?>">
        <div class="splide__track">
            <div class="splide__list">
                <?php foreach ($equipment_items as $index => $item) : ?>
                    <?php
                    $slide_class = 'equipment-slide equipment-slide--' . (int) ($index + 1);
                    ?>
                    <div class="<?php echo esc_attr($slide_class); ?> splide__slide">
                        <div class="equipment-card">
                            <?php echo lamnguyen_render_image($item['image'] ?? null, 'full', array('class' => 'equipment-card__image')); ?>
                        </div>
                        <div class="equipment-caption equipment-caption--<?php echo esc_attr((string) ($index + 1)); ?>">
                            <?php if (!empty($item['title'])) : ?>
                                <h3 class="equipment-title"><?php echo esc_html($item['title']); ?></h3>
                            <?php endif; ?>
                            <?php if (!empty($item['subtitle'])) : ?>
                                <h4 class="equipment-subtitle"><?php echo esc_html($item['subtitle']); ?></h4>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="equipment-actions">
        <a class="btn btn--magenta btn--pulse equipment-action" href="<?php echo esc_url($cta_primary_link); ?>">
            <?php echo esc_html($cta_primary_text); ?>
        </a>
        <a class="btn btn--cyan btn--pulse equipment-action"
            href="<?php echo esc_url($cta_secondary_link); ?>" target="_blank" rel="noopener">
            <?php echo esc_html($cta_secondary_text); ?>
            <i class="ti-download"></i>
        </a>
    </div>
</section>