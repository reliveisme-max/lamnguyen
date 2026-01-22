<?php
declare(strict_types=1);

$priority_title = lamnguyen_get_field('priority_title', 'Ưu tiên hàng đầu cho đầu tư công nghệ');
$priority_highlight = lamnguyen_get_field('priority_title_highlight', '');
$priority_body = lamnguyen_get_field('priority_body', 'Chúng tôi luôn coi trọng đầu tư thiết bị công nghệ và ứng dụng khoa học vào sản xuất...');
$priority_decor_top = lamnguyen_get_field('feature_decor_top', null);
$priority_decor_bottom = lamnguyen_get_field('feature_decor_bottom', null);
$priority_decor_top_url = '';
$priority_decor_bottom_url = '';
$priority_allowed = array(
    'span' => array('class' => true),
    'br' => array(),
);

if ($priority_highlight !== '') {
    $priority_title_plain = trim((string) $priority_title);
    $priority_highlight_plain = trim((string) $priority_highlight);
    if ($priority_highlight_plain !== '' && $priority_title_plain !== '') {
        $priority_title_plain = str_ireplace($priority_highlight_plain, '', $priority_title_plain);
        $priority_title_plain = trim(preg_replace('/\s+/', ' ', $priority_title_plain));
    }
    $priority_title = esc_html($priority_title_plain);
    $priority_highlight = esc_html($priority_highlight_plain);
    if ($priority_title !== '' && $priority_highlight !== '') {
        $priority_title .= ' ';
    }
    $priority_title .= '<span>' . $priority_highlight . '</span>';
} elseif (strpos($priority_title, '<span') !== false) {
    $priority_title = wp_kses($priority_title, $priority_allowed);
} else {
    $default_highlight = 'đầu tư công nghệ';
    if ($default_highlight !== '' && strpos($priority_title, $default_highlight) !== false) {
        $priority_title = str_replace(
            $default_highlight,
            '<span>' . $default_highlight . '</span>',
            $priority_title
        );
        $priority_title = wp_kses($priority_title, $priority_allowed);
    } else {
        $priority_title = esc_html($priority_title);
    }
}

$resolve_decor_url = static function ($decor): string {
    if (is_array($decor) && isset($decor['url'])) {
        return (string) $decor['url'];
    }

    if (is_numeric($decor)) {
        return (string) wp_get_attachment_image_url((int) $decor, 'full');
    }

    if (is_string($decor)) {
        return $decor;
    }

    return '';
};

$priority_decor_top_url = $resolve_decor_url($priority_decor_top);
$priority_decor_bottom_url = $resolve_decor_url($priority_decor_bottom);

$priority_style_parts = array();
if ($priority_decor_top_url !== '' && $priority_decor_bottom_url !== '') {
    $priority_style_parts[] = 'background-image: url(' . esc_url($priority_decor_top_url) . '), url(' . esc_url($priority_decor_bottom_url) . ');';
    $priority_style_parts[] = 'background-repeat: no-repeat, no-repeat;';
    $priority_style_parts[] = 'background-position: top right, bottom left;';
    $priority_style_parts[] = 'background-size: contain, 30%;';
} elseif ($priority_decor_top_url !== '') {
    $priority_style_parts[] = 'background-image: url(' . esc_url($priority_decor_top_url) . ');';
    $priority_style_parts[] = 'background-repeat: no-repeat;';
    $priority_style_parts[] = 'background-position: top right;';
    $priority_style_parts[] = 'background-size: contain;';
} elseif ($priority_decor_bottom_url !== '') {
    $priority_style_parts[] = 'background-image: url(' . esc_url($priority_decor_bottom_url) . ');';
    $priority_style_parts[] = 'background-repeat: no-repeat;';
    $priority_style_parts[] = 'background-position: bottom left;';
    $priority_style_parts[] = 'background-size: 30%;';
}
$priority_style = implode(' ', $priority_style_parts);
$priority_style_attr = $priority_style !== '' ? ' style="' . esc_attr($priority_style) . '"' : '';
?>
<section id="brxe-xhnsod" class="brxe-section bricks-lazy-hidden" <?php echo $priority_style_attr; ?>>
    <div id="brxe-extuzh" class="brxe-container bricks-lazy-hidden">
        <h2 id="brxe-ugrqzv" class="brxe-heading"><?php echo wp_kses($priority_title, $priority_allowed); ?></h2>
        <div id="brxe-ffwluc" class="brxe-text-basic"><?php echo esc_html($priority_body); ?></div>
    </div>
</section>