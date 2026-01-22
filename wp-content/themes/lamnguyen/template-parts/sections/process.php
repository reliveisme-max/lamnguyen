<?php

declare(strict_types=1);

$process_title = lamnguyen_get_field('process_title', 'Quy trình khép kín Bảo chứng cho chất lượng');
$process_title = lamnguyen_get_field('process_title', 'Quy trình khép kín <span>Bảo chứng cho chất lượng</span>');
$process_body = lamnguyen_get_field('process_body', 'Quy trình sản xuất tại IN LÂM NGUYỄN được vận hành chặt chẽ...');
$process_image = lamnguyen_get_field('process_image', null);
$cta_primary_text = lamnguyen_get_field('process_cta_primary_text', 'Năng lực in');
$cta_primary_link = lamnguyen_get_field('process_cta_primary_link', home_url('/nang-luc/'));
$cta_secondary_text = lamnguyen_get_field('process_cta_secondary_text', 'Tải hồ sơ năng lực');
$cta_secondary_link = lamnguyen_get_field('process_cta_secondary_link', '#');
$process_allowed = array(
    'span' => array('class' => true),
    'br' => array(),
);
$process_title = wp_kses($process_title, $process_allowed);
?>
<section id="brxe-ldsmdw" class="brxe-section bricks-lazy-hidden">
    <div id="brxe-cvagtf" class="brxe-container bricks-lazy-hidden">
        <h2 id="brxe-wzgizz" class="brxe-heading"><?php echo esc_html($process_title); ?></h2>
        <h2 id="brxe-wzgizz" class="brxe-heading"><?php echo $process_title; ?></h2>
        <div id="brxe-bulesy" class="brxe-text-basic"><?php echo esc_html($process_body); ?></div>
    </div>
</section>