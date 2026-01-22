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
    $logo_markup = lamnguyen_render_image($logo_image, 'full', array('class' => 'site-logo'));
} else {
    $logo_markup = sprintf(
        '<img src="%s" class="site-logo" loading="eager" decoding="async" alt="%s" />',
        esc_url($logo_fallback_url),
        esc_attr(get_bloginfo('name'))
    );
}
?>
<div id="nav-mobile" class="offcanvas" aria-label="Offcanvas" data-direction="right">
    <div class="offcanvas__inner">
        <a class="offcanvas__logo" href="<?php echo esc_url(home_url('/')); ?>">
            <?php echo $logo_markup !== '' ? $logo_markup : esc_html(get_bloginfo('name')); ?>
        </a>
        <div class="offcanvas__title"><?php echo esc_html($offcanvas_title); ?></div>
        <div class="offcanvas__menu">
            <nav class="offcanvas__nav">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'offcanvas__list',
                        'fallback_cb'    => false,
                    )
                );
                ?>
            </nav>
        </div>
        <div class="offcanvas__subtitle"><?php echo esc_html($offcanvas_subtitle); ?></div>
        <button class="offcanvas__close" aria-label="<?php esc_attr_e('Đóng', 'lamnguyen'); ?>"
            aria-expanded="false" data-offcanvas-close="#nav-mobile" type="button">
            <i class="ti-close"></i>
        </button>
    </div>
    <div class="offcanvas-backdrop"></div>
</div>