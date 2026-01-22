<?php

declare(strict_types=1);

$hero_top = lamnguyen_get_field('hero_top_text', 'Trên');
$hero_digits = lamnguyen_get_field('hero_year_digits', array(array('digit' => '1'), array('digit' => '5')));
$hero_suffix = lamnguyen_get_field('hero_suffix_text', 'năm phát triển');
$hero_brand = lamnguyen_get_field('hero_brand_text', 'IN LÂM NGUYỄN');
$hero_subtext = lamnguyen_get_field('hero_subtext', 'Tự tin đã mang lại hàng triệu ấn phẩm làm hài lòng các đối tác lớn trong và ngoài nước.');

$hero_digit_values = array();
if (is_array($hero_digits)) {
    foreach ($hero_digits as $digit) {
        $value = trim((string) ($digit['digit'] ?? ''));
        if ($value !== '') {
            $hero_digit_values[] = $value;
        }
    }
} elseif (is_string($hero_digits)) {
    $value = trim($hero_digits);
    if ($value !== '') {
        $hero_digit_values[] = $value;
    }
}
if ($hero_digit_values) {
    $first_value = $hero_digit_values[0];
    if (strlen($first_value) > 1) {
        $hero_digit_values = str_split($first_value);
    }
}
if (!$hero_digit_values) {
    $hero_digit_values = array('1', '5');
}
$digit_one = $hero_digit_values[0] ?? '';
$digit_two = $hero_digit_values[1] ?? '';
$extra_digits = array_slice($hero_digit_values, 2);

$hero_suffix_prefix = trim((string) $hero_suffix);
$hero_suffix_highlight = '';
$hero_suffix_parts = preg_split('/\s+/u', $hero_suffix_prefix, -1, PREG_SPLIT_NO_EMPTY);
if (count($hero_suffix_parts) > 1) {
    $highlight_count = count($hero_suffix_parts) > 2 ? 2 : 1;
    $hero_suffix_highlight = implode(' ', array_slice($hero_suffix_parts, -$highlight_count));
    $hero_suffix_prefix = implode(' ', array_slice($hero_suffix_parts, 0, -$highlight_count));
}
?>
<section id="section-hero" class="section section-hero">
    <?php get_template_part('template-parts/hero/hero-graphics'); ?>
    <div class="hero-gradient"></div>
    <div class="hero-content">
        <span class="hero-top"><?php echo esc_html($hero_top); ?></span>
        <div class="hero-digits">
            <span class="hero-digit gold-text"><?php echo esc_html($digit_one); ?></span>
            <span class="hero-digit gold-text"><?php echo esc_html($digit_two); ?></span>
            <?php foreach ($extra_digits as $digit) : ?>
                <span class="hero-digit gold-text"><?php echo esc_html($digit); ?></span>
            <?php endforeach; ?>
        </div>
        <div class="hero-suffix">
            <span class="hero-suffix-text">
                <?php echo esc_html($hero_suffix_prefix); ?>
                <?php if ($hero_suffix_highlight) : ?>
                    <?php if ($hero_suffix_prefix) : ?> <?php endif; ?>
                    <span><?php echo esc_html($hero_suffix_highlight); ?></span>
                <?php endif; ?>
            </span>
            <span class="hero-brand"><?php echo esc_html($hero_brand); ?></span>
        </div>
    </div>
    <div class="hero-subtext">
        <div class="hero-subtext-text"><?php echo esc_html($hero_subtext); ?></div>
    </div>
</section>