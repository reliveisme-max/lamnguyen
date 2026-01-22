<?php

declare(strict_types=1);

$banner_title = lamnguyen_get_field('banner_title', 'Bao bì tạo nên sự hoàn hảo cho sản phẩm');
$banner_bg_desktop = lamnguyen_get_field('banner_bg_desktop', null);
$banner_bg_mobile = lamnguyen_get_field('banner_bg_mobile', null);
$banner_bg_desktop_url = '';
$banner_bg_mobile_url = '';

if (is_array($banner_bg_desktop) && isset($banner_bg_desktop['url'])) {
    $banner_bg_desktop_url = (string) $banner_bg_desktop['url'];
} elseif (is_numeric($banner_bg_desktop)) {
    $banner_bg_desktop_url = (string) wp_get_attachment_image_url((int) $banner_bg_desktop, 'full');
} elseif (is_string($banner_bg_desktop)) {
    $banner_bg_desktop_url = $banner_bg_desktop;
}

if (is_array($banner_bg_mobile) && isset($banner_bg_mobile['url'])) {
    $banner_bg_mobile_url = (string) $banner_bg_mobile['url'];
} elseif (is_numeric($banner_bg_mobile)) {
    $banner_bg_mobile_url = (string) wp_get_attachment_image_url((int) $banner_bg_mobile, 'full');
} elseif (is_string($banner_bg_mobile)) {
    $banner_bg_mobile_url = $banner_bg_mobile;
}
$banner_style = '';
if ($banner_bg_desktop_url !== '') {
    $banner_style .= '--banner-bg: url(' . esc_url($banner_bg_desktop_url) . ');';
}
if ($banner_bg_mobile_url !== '') {
    $banner_style .= '--banner-bg-mobile: url(' . esc_url($banner_bg_mobile_url) . ');';
}
?>
<section id="section-highlight" class="section section-highlight highlight-banner" style="<?php echo esc_attr($banner_style); ?>">
    <div class="container highlight-inner">
        <h2 class="highlight-title"><?php echo esc_html($banner_title); ?></h2>
    </div>
</section>