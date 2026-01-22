<?php

declare(strict_types=1);

$trust_title = lamnguyen_get_field('trust_title', 'Chữ tín quý hơn Vàng');
$trust_subtitle = lamnguyen_get_field('trust_subtitle', 'Đối tác tin cậy và bền vững');
$trust_body = lamnguyen_get_field('trust_body', 'Chúng tôi luôn đặt chất lượng sản phẩm và cung cách phục vụ khách hàng lên hàng đầu...');
$trust_bg = lamnguyen_get_field('trust_bg', null);
$trust_style = '';
if ($trust_bg && isset($trust_bg['url'])) {
    $trust_style = '--trust-bg: url(' . esc_url($trust_bg['url']) . ');';
}
$trust_allowed = array(
    'span' => array('class' => true),
    'br' => array(),
);
$trust_title = wp_kses($trust_title, $trust_allowed);
?>
<section id="section-trust" class="section section-trust" style="<?php echo esc_attr($trust_style); ?>">
    <div class="container trust-inner">
        <h2 class="trust-title"><?php echo $trust_title; ?></h2>
        <div class="trust-card">
            <h3 class="trust-subtitle"><?php echo esc_html($trust_subtitle); ?></h3>
            <div class="trust-body"><?php echo esc_html($trust_body); ?></div>
        </div>
    </div>
</section>