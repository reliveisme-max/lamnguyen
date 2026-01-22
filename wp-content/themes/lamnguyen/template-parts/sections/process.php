<?php

declare(strict_types=1);

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
<section id="section-process" class="section section-process">
    <div class="container process-inner">
        <h2 class="process-title"><?php echo $process_title; ?></h2>
        <div class="process-body"><?php echo esc_html($process_body); ?></div>
        <?php if ($process_image) : ?>
            <div class="process-media">
                <?php echo lamnguyen_render_image($process_image, 'full', array('class' => 'process-image')); ?>
            </div>
        <?php endif; ?>
        <div class="process-actions">
            <a class="btn btn--magenta btn--pulse process-action" href="<?php echo esc_url($cta_primary_link); ?>">
                <?php echo esc_html($cta_primary_text); ?>
            </a>
            <a class="btn btn--cyan btn--pulse process-action" href="<?php echo esc_url($cta_secondary_link); ?>"
                target="_blank" rel="noopener">
                <?php echo esc_html($cta_secondary_text); ?>
                <i class="ti-download"></i>
            </a>
        </div>
    </div>
</section>