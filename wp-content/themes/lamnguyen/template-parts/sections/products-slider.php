<?php

declare(strict_types=1);

$cards = lamnguyen_get_field('product_cards', array());
$cta_text = lamnguyen_get_field('products_cta_text', 'Sản phẩm');
$cta_link = lamnguyen_get_field('products_cta_link', home_url('/san-pham/'));
$splide_config = htmlspecialchars(json_encode(array(
    'type' => 'loop',
    'direction' => 'ltr',
    'keyboard' => 'global',
    'height' => 'auto',
    'gap' => 'var(--space-md)',
    'start' => 0,
    'perPage' => 3,
    'perMove' => 1,
    'speed' => 400,
    'interval' => 1000,
    'autoHeight' => false,
    'autoplay' => true,
    'pauseOnHover' => false,
    'pauseOnFocus' => false,
    'arrows' => false,
    'pagination' => false,
    'mediaQuery' => 'max',
    'breakpoints' => array(
        '1279' => array('height' => 'auto', 'gap' => 'var(--space-md)', 'perPage' => '3', 'interval' => 1000, 'autoplay' => true),
        '767' => array('perPage' => '2'),
        '478' => array('perPage' => '1'),
    ),
)), ENT_QUOTES, 'UTF-8');
?>
<section id="brxe-itwyna" class="brxe-section bricks-lazy-hidden">
    <div id="brxe-hklnws" class="brxe-slider-nested bricks-lazy-hidden splide"
        data-splide="<?php echo $splide_config; ?>">
        <div class="splide__track">
            <div class="splide__list">
                <?php foreach ($cards as $card) : ?>
                    <?php
                    $title = $card['title'] ?? '';
                    $image = $card['image'] ?? null;
                    $link = $card['link'] ?? '';
                    ?>
                    <a class="brxe-block bricks-lazy-hidden splide__slide" href="<?php echo esc_url($link ?: '#'); ?>">
                        <?php echo lamnguyen_render_image($image, 'full', array('class' => 'brxe-image css-filter')); ?>
                        <h3 class="brxe-heading"><?php echo esc_html($title); ?></h3>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <a id="brxe-hatpmx" class="brxe-button bricks-button outline circle" href="<?php echo esc_url($cta_link); ?>">
        <?php echo esc_html($cta_text); ?>
    </a>
</section>