<?php

declare(strict_types=1);

function lamnguyen_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support(
        'html5',
        array(
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 200,
            'width'       => 200,
            'flex-height' => true,
            'flex-width'  => true,
        )
    );

    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'lamnguyen'),
            'footer'  => __('Footer Menu', 'lamnguyen'),
        )
    );
}

add_action('after_setup_theme', 'lamnguyen_setup');
