<?php

declare(strict_types=1);

$offcanvas_title = lamnguyen_get_option('offcanvas_title', __('Công ty TNHH In Lâm Nguyễn', 'lamnguyen'));
$offcanvas_subtitle = lamnguyen_get_option('offcanvas_subtitle', __('Liên hệ trực tiếp để được tư vấn và báo giá đầy đủ', 'lamnguyen'));
$logo_svg = lamnguyen_get_option('logo_svg', '');
$logo_image = lamnguyen_get_option('logo_image', null);
$logo_fallback_url = 'https://inanlamnguyen.com/wp-content/uploads/2025/10/header-logo-1.svg';
$logo_markup = '';
if ($logo_svg !== '') {
    $logo_markup = lamnguyen_render_svg($logo_svg);
} elseif ($logo_image) {
    $logo_markup = lamnguyen_render_image($logo_image, 'full', array('class' => 'bricks-site-logo css-filter'));
} else {
    $logo_markup = sprintf(
        '<img src="%s" class="bricks-site-logo css-filter" loading="eager" decoding="async" alt="%s" />',
        esc_url($logo_fallback_url),
        esc_attr(get_bloginfo('name'))
    );
}
?>
<div id="nav-mobile" class="brxe-offcanvas bricks-lazy-hidden" aria-label="Offcanvas" data-direction="right">
    <div id="brxe-e3d1a3" class="brxe-block brx-offcanvas-inner bricks-lazy-hidden">
        <a id="brxe-3fc54c" class="brxe-logo" href="<?php echo esc_url(home_url('/')); ?>">
            <?php echo $logo_markup !== '' ? $logo_markup : esc_html(get_bloginfo('name')); ?>
        </a>
        <div id="brxe-0fffcc" class="brxe-heading"><?php echo esc_html($offcanvas_title); ?></div>
        <div id="brxe-81c951" class="brxe-nav-menu">
            <nav class="bricks-nav-menu-wrapper never">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'bricks-nav-menu',
                        'fallback_cb'    => false,
                    )
                );
                ?>
            </nav>
        </div>
        <div id="brxe-6aae21" class="brxe-heading"><?php echo esc_html($offcanvas_subtitle); ?></div>
        <button id="brxe-8fdc5d" class="brxe-toggle" aria-label="<?php esc_attr_e('Đóng', 'lamnguyen'); ?>"
            aria-expanded="false" data-offcanvas-close="#nav-mobile" type="button">
            <i class="ti-close"></i>
        </button>
    </div>
    <div class="brxe-block brx-offcanvas-backdrop bricks-lazy-hidden"></div>
</div>