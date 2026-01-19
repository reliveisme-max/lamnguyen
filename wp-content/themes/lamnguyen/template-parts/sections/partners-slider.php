<?php

declare(strict_types=1);

$partners = lamnguyen_get_field('partner_logos', array());
$splide_config = htmlspecialchars(json_encode(array(
    'type' => 'loop',
    'direction' => 'ltr',
    'keyboard' => 'false',
    'height' => 'auto',
    'gap' => '0px',
    'start' => 0,
    'perPage' => 12,
    'perMove' => '1',
    'speed' => 400,
    'interval' => 3000,
    'autoHeight' => true,
    'autoplay' => false,
    'pauseOnHover' => false,
    'pauseOnFocus' => false,
    'arrows' => false,
    'pagination' => false,
    'mediaQuery' => 'max',
    'breakpoints' => array(
        '1279' => array('keyboard' => 'false', 'height' => 'auto', 'perPage' => '12', 'perMove' => '1', 'autoHeight' => true),
        '1199' => array('perPage' => '10'),
        '767' => array('perPage' => '6'),
        '478' => array('perPage' => '5', 'speed' => '3000'),
    ),
)), ENT_QUOTES, 'UTF-8');
?>
<section id="brxe-rntwof" class="brxe-section bricks-lazy-hidden">
    <div id="brxe-xtmrnx"
        class="brxe-slider-nested carousel05__logos carousel05__logos__left bricks-lazy-hidden splide brx-auto-height"
        data-splide="<?php echo $splide_config; ?>">
        <div class="splide__track">
            <div class="splide__list">
                <?php foreach ($partners as $partner) : ?>
                    <div class="brxe-block bricks-lazy-hidden splide__slide">
                        <?php
                        $logo = $partner['logo'] ?? null;
                        $link = $partner['link'] ?? '';
                        $img = $logo ? lamnguyen_render_image($logo, 'full', array('class' => 'brxe-image css-filter')) : '';
                        ?>
                        <?php if ($link) : ?>
                            <a href="<?php echo esc_url($link); ?>"><?php echo $img; ?></a>
                        <?php else : ?>
                            <?php echo $img; ?>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div id="brxe-obtfjz"
        class="brxe-slider-nested carousel05__logos carousel05__logos__right bricks-lazy-hidden splide brx-auto-height"
        data-splide="<?php echo $splide_config; ?>">
        <div class="splide__track">
            <div class="splide__list">
                <?php foreach ($partners as $partner) : ?>
                    <div class="brxe-block bricks-lazy-hidden splide__slide">
                        <?php
                        $logo = $partner['logo'] ?? null;
                        $link = $partner['link'] ?? '';
                        $img = $logo ? lamnguyen_render_image($logo, 'full', array('class' => 'brxe-image css-filter')) : '';
                        ?>
                        <?php if ($link) : ?>
                            <a href="<?php echo esc_url($link); ?>"><?php echo $img; ?></a>
                        <?php else : ?>
                            <?php echo $img; ?>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>