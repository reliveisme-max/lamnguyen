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
if (count($hero_digit_values) === 1 && strlen($hero_digit_values[0]) > 1) {
    $hero_digit_values = str_split($hero_digit_values[0]);
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
<section id="brxe-fmrgte" class="brxe-section bricks-lazy-hidden">
    <?php get_template_part('template-parts/hero/hero-graphics'); ?>
    <div id="brxe-qeagss" class="brxe-block bricks-lazy-hidden"></div>
    <div id="brxe-xxasvs" class="brxe-block bricks-lazy-hidden">
        <span id="brxe-itkgie" class="brxe-heading"><?php echo esc_html($hero_top); ?></span>
        <div id="brxe-gwiose" class="brxe-block bricks-lazy-hidden">
            <span id="brxe-nscppa" class="brxe-heading gold-text"><?php echo esc_html($digit_one); ?></span>
            <span id="brxe-ycmmij" class="brxe-heading gold-text"><?php echo esc_html($digit_two); ?></span>
            <?php foreach ($extra_digits as $digit) : ?>
                <span class="brxe-heading gold-text"><?php echo esc_html($digit); ?></span>
            <?php endforeach; ?>
        </div>
        <div id="brxe-cwnwxf" class="brxe-block bricks-lazy-hidden">
            <span id="brxe-kmmtbb" class="brxe-heading">
                <?php echo esc_html($hero_suffix_prefix); ?>
                <?php if ($hero_suffix_highlight) : ?>
                    <?php if ($hero_suffix_prefix) : ?> <?php endif; ?>
                    <span><?php echo esc_html($hero_suffix_highlight); ?></span>
                <?php endif; ?>
            </span>
            <span id="brxe-nfzrog" class="brxe-heading"><?php echo esc_html($hero_brand); ?></span>
        </div>
    </div>
    <div id="brxe-pnsjln" class="brxe-block bricks-lazy-hidden">
        <div id="brxe-kzotma" class="brxe-text-basic"><?php echo esc_html($hero_subtext); ?></div>
    </div>
</section>