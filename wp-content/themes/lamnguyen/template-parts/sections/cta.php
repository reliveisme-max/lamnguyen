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
?>
<section id="brxe-gzwwfs" class="brxe-section bricks-lazy-hidden section-trust"
    style="<?php echo esc_attr($trust_style); ?>">
    <div id="brxe-trlkna" class="brxe-container bricks-lazy-hidden">
        <h2 id="brxe-ejdqtx" class="brxe-heading"><?php echo esc_html($trust_title); ?></h2>
        <div id="brxe-pqavng" class="brxe-block bricks-lazy-hidden">
            <h3 id="brxe-piuvru" class="brxe-heading"><?php echo esc_html($trust_subtitle); ?></h3>
            <div id="brxe-elhxtb" class="brxe-text-basic"><?php echo esc_html($trust_body); ?></div>
        </div>
    </div>
</section>