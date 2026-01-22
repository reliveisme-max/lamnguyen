<?php
declare(strict_types=1);

$priority_title = lamnguyen_get_field('priority_title', 'Ưu tiên hàng đầu cho đầu tư công nghệ');
$priority_highlight = lamnguyen_get_field('priority_title_highlight', '');
$priority_body = lamnguyen_get_field('priority_body', 'Chúng tôi luôn coi trọng đầu tư thiết bị công nghệ và ứng dụng khoa học vào sản xuất...');
$priority_decor_top = lamnguyen_get_field('feature_decor_top', null);
$priority_decor_top_url = '';
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

if (is_array($priority_decor_top) && isset($priority_decor_top['url'])) {
    $priority_decor_top_url = (string) $priority_decor_top['url'];
} elseif (is_numeric($priority_decor_top)) {
    $priority_decor_top_url = (string) wp_get_attachment_image_url((int) $priority_decor_top, 'full');
} elseif (is_string($priority_decor_top)) {
    $priority_decor_top_url = $priority_decor_top;
}

$priority_style = '';
if ($priority_decor_top_url !== '') {
    $priority_style = '--priority-decor-top: url(' . esc_url($priority_decor_top_url) . ');';
}
$priority_style_attr = $priority_style !== '' ? ' style="' . esc_attr($priority_style) . '"' : '';
?>
<section id="brxe-xhnsod" class="brxe-section bricks-lazy-hidden">
    <section id="brxe-xhnsod" class="brxe-section bricks-lazy-hidden" <?php echo $priority_style_attr; ?>>
        <div id="brxe-extuzh" class="brxe-container bricks-lazy-hidden">
            <h2 id="brxe-ugrqzv" class="brxe-heading"><?php echo esc_html($priority_title); ?></h2>
            <h2 id="brxe-ugrqzv" class="brxe-heading"><?php echo $priority_title; ?></h2>
            <div id="brxe-ffwluc" class="brxe-text-basic"><?php echo esc_html($priority_body); ?></div>
        </div>
    </section>