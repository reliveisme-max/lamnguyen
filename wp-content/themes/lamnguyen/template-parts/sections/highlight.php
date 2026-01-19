<?php

declare(strict_types=1);

$banner_title = lamnguyen_get_field('banner_title', 'Bao bì tạo nên sự hoàn hảo cho sản phẩm');
$banner_bg_desktop = lamnguyen_get_field('banner_bg_desktop', null);
$banner_bg_mobile = lamnguyen_get_field('banner_bg_mobile', null);
$banner_style = '';
if ($banner_bg_desktop && isset($banner_bg_desktop['url'])) {
    $banner_style .= '--banner-bg: url(' . esc_url($banner_bg_desktop['url']) . ');';
}
if ($banner_bg_mobile && isset($banner_bg_mobile['url'])) {
    $banner_style .= '--banner-bg-mobile: url(' . esc_url($banner_bg_mobile['url']) . ');';
}
?>
<section id="brxe-pbbgik" class="brxe-section bricks-lazy-hidden section-banner"
    style="<?php echo esc_attr($banner_style); ?>">
    <div id="brxe-igcatf" class="brxe-container bricks-lazy-hidden">
        <h2 id="brxe-ermqlj" class="brxe-heading"><?php echo esc_html($banner_title); ?></h2>
    </div>
</section>