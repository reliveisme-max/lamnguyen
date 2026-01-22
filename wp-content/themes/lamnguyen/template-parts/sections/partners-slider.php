<?php
declare(strict_types=1);

$partners = lamnguyen_get_field('partner_logos', array());
$base_config = array(
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
    'autoScroll' => array(
        'speed' => 0.3,
        'pauseOnHover' => false,
        'pauseOnFocus' => false,
    ),
    'breakpoints' => array(
        '1279' => array('keyboard' => 'false', 'height' => 'auto', 'perPage' => '12', 'perMove' => '1', 'autoHeight' => true),
        '1199' => array('perPage' => '10'),
        '767' => array('perPage' => '6'),
        '478' => array('perPage' => '5', 'speed' => '3000'),
    ),
);
$left_config = htmlspecialchars(json_encode($base_config), ENT_QUOTES, 'UTF-8');
$right_config = $base_config;
$right_config['direction'] = 'rtl';
$right_config = htmlspecialchars(json_encode($right_config), ENT_QUOTES, 'UTF-8');
?>
<section id="section-partners" class="section section-partners">
    <div class="partners-logos partners-logos--left splide" data-splide="<?php echo $left_config; ?>">
        <div class="splide__track">
            <div class="splide__list">
                <?php foreach ($partners as $partner) : ?>
                <div class="partners-slide splide__slide">
                    <?php
                        $logo = $partner['logo'] ?? null;
                        $link = $partner['link'] ?? '';
                        $img = $logo ? lamnguyen_render_image($logo, 'full', array('class' => 'partners-logo')) : '';
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

    <div class="partners-logos partners-logos--right splide" data-splide="<?php echo $right_config; ?>">
        <div class="splide__track">
            <div class="splide__list">
                <?php foreach ($partners as $partner) : ?>
                <div class="partners-slide splide__slide">
                    <?php
                        $logo = $partner['logo'] ?? null;
                        $link = $partner['link'] ?? '';
                        $img = $logo ? lamnguyen_render_image($logo, 'full', array('class' => 'partners-logo')) : '';
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