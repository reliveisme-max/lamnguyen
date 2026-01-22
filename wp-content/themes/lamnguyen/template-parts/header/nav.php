<?php

declare(strict_types=1);

$logo_svg = lamnguyen_get_option('logo_svg', '');
$logo_image = lamnguyen_get_option('logo_image', null);
$logo_fallback_url = 'https://inanlamnguyen.com/wp-content/uploads/2025/10/header-logo-1.svg';
$logo_markup = '';
if ($logo_svg !== '') {
    $logo_markup = lamnguyen_render_svg($logo_svg);
} elseif ($logo_image) {
    $logo_markup = lamnguyen_render_image($logo_image, 'full', array('class' => 'site-logo', 'loading' => 'eager'));
} else {
    $logo_markup = sprintf(
        '<img src="%s" class="site-logo" loading="eager" decoding="async" alt="%s" />',
        esc_url($logo_fallback_url),
        esc_attr(get_bloginfo('name'))
    );
}
?>
<section id="site-header" class="site-header">
    <div class="header-top">
        <div class="header-top__line header-top__line--left"></div>
        <div class="header-top__line header-top__line--right"></div>
    </div>
    <div class="header-main">
        <a class="header-logo" href="<?php echo esc_url(home_url('/')); ?>">
            <?php echo $logo_markup !== '' ? $logo_markup : esc_html(get_bloginfo('name')); ?>
        </a>
        <div class="header-spacer"></div>
        <div class="header-nav">
            <nav class="nav-primary" aria-label="<?php esc_attr_e('Menu', 'lamnguyen'); ?>">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'nav-primary__list',
                        'fallback_cb'    => false,
                    )
                );
                ?>
            </nav>
            <button class="nav-toggle" data-offcanvas-target="#nav-mobile"
                aria-expanded="false" aria-label="<?php esc_attr_e('Mở', 'lamnguyen'); ?>" type="button">
                <svg class="fill" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 36 24">
                    <path
                        d="M4.21,18.17c.46-.27,1.04.07,1.04.61v.25h28.76c1.1,0,1.98.9,1.98,2.01,0,1.11-.89,2.01-1.98,2.01H5.26v.25c0,.54-.58.88-1.04.61l-3.87-2.26c-.46-.27-.46-.95,0-1.22l3.87-2.26Z">
                    </path>
                    <path
                        d="M7.19,9.13c.46-.27,1.04.07,1.04.61v.25h25.79c1.1,0,1.98.9,1.98,2.01,0,1.11-.89,2.01-1.98,2.01H8.23v.25c0,.54-.58.88-1.04.61l-3.87-2.26c-.46-.27-.46-.95,0-1.22l3.87-2.26Z">
                    </path>
                    <path
                        d="M10.17.1c.46-.27,1.04.07,1.04.61v.25h22.81c1.1,0,1.98.9,1.98,2.01,0,1.11-.89,2.01-1.98,2.01H11.21v.25c0,.54-.58.88-1.04.61l-3.87-2.26c-.46-.27-.46-.95,0-1.22L10.17.1Z">
                    </path>
                </svg>
            </button>
        </div>
    </div>
</section>