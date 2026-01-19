<?php

declare(strict_types=1);

function lamnguyen_enqueue_assets(): void
{
    $theme_version = wp_get_theme()->get('Version');
    $css_path = get_template_directory() . '/assets/css/theme.css';
    $inline_css_path = get_template_directory() . '/assets/css/bricks-inline.css';
    $js_path = get_template_directory() . '/assets/js/theme.js';
    $splide_init_path = get_template_directory() . '/assets/js/splide-init.js';

    wp_enqueue_style(
        'lamnguyen-google-fonts',
        'https://fonts.googleapis.com/css2?family=Anton+SC:wght@400&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:wght@200;300;400;500;600;700&family=Quicksand:wght@300;400;500;600;700&display=swap',
        array(),
        $theme_version
    );
    wp_enqueue_style(
        'lamnguyen-font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css',
        array(),
        '6.5.2'
    );
    wp_enqueue_style(
        'lamnguyen-themify',
        'https://cdnjs.cloudflare.com/ajax/libs/themify-icons/0.1.2/css/themify-icons.css',
        array(),
        '0.1.2'
    );
    wp_enqueue_style(
        'lamnguyen-bricks-frontend',
        'https://inanlamnguyen.com/wp-content/themes/bricks/assets/css/frontend-layer.min.css?ver=1762830324',
        array(),
        $theme_version
    );
    wp_enqueue_style(
        'lamnguyen-bricks-splide',
        'https://inanlamnguyen.com/wp-content/themes/bricks/assets/css/libs/splide-layer.min.css?ver=1762830324',
        array(),
        $theme_version
    );
    wp_enqueue_style(
        'lamnguyen-theme',
        get_template_directory_uri() . '/assets/css/theme.css',
        array('lamnguyen-google-fonts', 'lamnguyen-font-awesome', 'lamnguyen-themify', 'lamnguyen-bricks-frontend', 'lamnguyen-bricks-splide'),
        file_exists($css_path) ? (string) filemtime($css_path) : $theme_version
    );
    if (file_exists($inline_css_path)) {
        wp_enqueue_style(
            'lamnguyen-bricks-inline',
            get_template_directory_uri() . '/assets/css/bricks-inline.css',
            array('lamnguyen-theme'),
            (string) filemtime($inline_css_path)
        );
    }

    wp_enqueue_script(
        'lamnguyen-splide',
        'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js',
        array(),
        '4.1.4',
        true
    );
    wp_enqueue_script(
        'lamnguyen-splide-auto-scroll',
        'https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js',
        array('lamnguyen-splide'),
        '0.5.3',
        true
    );
    wp_enqueue_script(
        'lamnguyen-splide-init',
        get_template_directory_uri() . '/assets/js/splide-init.js',
        array('lamnguyen-splide', 'lamnguyen-splide-auto-scroll'),
        file_exists($splide_init_path) ? (string) filemtime($splide_init_path) : $theme_version,
        true
    );
    wp_enqueue_script(
        'lamnguyen-theme',
        get_template_directory_uri() . '/assets/js/theme.js',
        array('lamnguyen-splide-init'),
        file_exists($js_path) ? (string) filemtime($js_path) : $theme_version,
        true
    );
}

add_action('wp_enqueue_scripts', 'lamnguyen_enqueue_assets');
