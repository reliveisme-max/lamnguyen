<?php

declare(strict_types=1);

$logo_svg = lamnguyen_get_option('logo_svg', '');
$logo_image = lamnguyen_get_option('logo_image', null);
$logo_markup = $logo_svg !== '' ? lamnguyen_render_svg($logo_svg) : lamnguyen_render_image($logo_image, 'full', array('class' => 'bricks-site-logo css-filter', 'loading' => 'eager'));
?>
<section id="brxe-cd4d2d" class="brxe-section bricks-lazy-hidden">
    <div id="brxe-ffec5d" class="brxe-block bricks-lazy-hidden">
        <div id="brxe-dac104" class="brxe-block bricks-lazy-hidden"></div>
        <div id="brxe-252a5d" class="brxe-block bricks-lazy-hidden"></div>
    </div>
    <div id="brxe-d4203b" class="brxe-block bricks-lazy-hidden">
        <a id="brxe-216392" href="<?php echo esc_url(home_url('/')); ?>" class="brxe-block bricks-lazy-hidden">
            <?php echo $logo_markup !== '' ? $logo_markup : esc_html(get_bloginfo('name')); ?>
        </a>
        <div id="brxe-6dd330" class="brxe-block bricks-lazy-hidden"></div>
        <div id="brxe-891447" class="brxe-block bricks-lazy-hidden">
            <nav id="brxe-c6ff40" class="brxe-nav-nested bricks-lazy-hidden"
                aria-label="<?php esc_attr_e('Menu', 'lamnguyen'); ?>">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_id'        => 'brxe-bd686b',
                        'menu_class'     => 'brxe-block brx-nav-nested-items bricks-lazy-hidden',
                        'fallback_cb'    => false,
                    )
                );
                ?>
            </nav>
            <button id="brxe-5c1bbd" class="brxe-button bricks-button" data-offcanvas-target="#nav-mobile"
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