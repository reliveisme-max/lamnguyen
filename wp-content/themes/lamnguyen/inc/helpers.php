<?php

declare(strict_types=1);

function lamnguyen_get_field(string $key, $default = null, $post_id = null)
{
    if (!function_exists('get_field')) {
        return $default;
    }

    $value = get_field($key, $post_id ?? false);
    if ($value === null || $value === '' || $value === array()) {
        return $default;
    }

    return $value;
}

function lamnguyen_get_option(string $key, $default = null)
{
    return lamnguyen_get_field($key, $default, 'option');
}

function lamnguyen_render_svg(string $svg, array $allowed_attrs = array()): string
{
    if ($svg === '') {
        return '';
    }

    $allowed = array(
        'svg' => array_merge(
            array(
                'xmlns' => true,
                'viewbox' => true,
                'aria-hidden' => true,
                'role' => true,
                'class' => true,
                'width' => true,
                'height' => true,
                'fill' => true,
            ),
            $allowed_attrs
        ),
        'g' => array('class' => true, 'fill' => true, 'stroke' => true),
        'path' => array('d' => true, 'fill' => true, 'stroke' => true),
        'defs' => array(),
        'linearGradient' => array('id' => true, 'x1' => true, 'y1' => true, 'x2' => true, 'y2' => true, 'gradientUnits' => true),
        'stop' => array('offset' => true, 'stop-color' => true, 'stop-opacity' => true),
        'style' => array(),
        'title' => array(),
    );

    return wp_kses($svg, $allowed);
}

function lamnguyen_render_image($image, string $size = 'full', array $attrs = array()): string
{
    if (!$image) {
        return '';
    }

    $id = is_array($image) ? ($image['ID'] ?? 0) : (int) $image;
    if ($id) {
        $defaults = array('loading' => 'lazy', 'decoding' => 'async');
        return wp_get_attachment_image($id, $size, false, array_merge($defaults, $attrs));
    }

    if (is_array($image) && isset($image['url'])) {
        $alt = $image['alt'] ?? '';
        $attrs_string = '';
        foreach (array_merge(array('loading' => 'lazy', 'decoding' => 'async'), $attrs) as $key => $value) {
            $attrs_string .= sprintf(' %s="%s"', esc_attr($key), esc_attr($value));
        }
        return sprintf('<img src="%s" alt="%s"%s />', esc_url($image['url']), esc_attr($alt), $attrs_string);
    }

    return '';
}

function lamnguyen_add_body_classes(array $classes): array
{
    $classes[] = 'bricks-is-frontend';
    return $classes;
}

add_filter('body_class', 'lamnguyen_add_body_classes');
