<?php

declare(strict_types=1);

$cards = lamnguyen_get_field('product_cards', array());
$cta_text = lamnguyen_get_field('products_cta_text', 'Sản phẩm');
$cta_link = lamnguyen_get_field('products_cta_link', home_url('/san-pham/'));
$slide_ids = array('brxe-pbryky', 'brxe-pjywmp', 'brxe-ehihfs', 'brxe-gbfieb');
$image_ids = array('brxe-llwxxg', 'brxe-qxeljd', 'brxe-kevciw', 'brxe-arewgn');
$title_ids = array('brxe-obasks', 'brxe-qkrjtc', 'brxe-ccnthd', 'brxe-auoohk');
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
                <?php foreach ($cards as $index => $card) : ?>
                    <?php
                    $title = $card['title'] ?? '';
                    $image = $card['image'] ?? null;
                    $link = $card['link'] ?? '';
                    $slide_id = $slide_ids[$index] ?? '';
                    $image_id = $image_ids[$index] ?? '';
                    $title_id = $title_ids[$index] ?? '';
                    $slide_id_attr = $slide_id !== '' ? ' id="' . esc_attr($slide_id) . '"' : '';
                    $slide_data_id_attr = $slide_id !== '' ? ' data-id="' . esc_attr($slide_id) . '"' : '';
                    ?>
                    <a<?php echo $slide_id_attr; ?> class="brxe-block bricks-lazy-hidden splide__slide"
                        href="<?php echo esc_url($link ?: '#'); ?>" <?php echo $slide_data_id_attr; ?>>
                        <?php
                        $image_attrs = array('class' => 'brxe-image css-filter');
                        if ($image_id !== '') {
                            $image_attrs['id'] = $image_id;
                        }
                        echo lamnguyen_render_image($image, 'full', $image_attrs);
                        ?>
                        <h3<?php echo $title_id !== '' ? ' id="' . esc_attr($title_id) . '"' : ''; ?> class="brxe-heading">
                            <?php echo esc_html($title); ?></h3>
                            </a>
                        <?php endforeach; ?>
            </div>
        </div>
    </div>
    <a id="brxe-hatpmx" class="brxe-button bricks-button outline circle" href="<?php echo esc_url($cta_link); ?>">
        <?php echo esc_html($cta_text); ?>
    </a>
</section>