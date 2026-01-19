<?php

declare(strict_types=1);

$process_title = lamnguyen_get_field('process_title', 'Quy trình khép kín Bảo chứng cho chất lượng');
$process_body = lamnguyen_get_field('process_body', 'Quy trình sản xuất tại IN LÂM NGUYỄN được vận hành chặt chẽ...');
$process_image = lamnguyen_get_field('process_image', null);
$cta_primary_text = lamnguyen_get_field('process_cta_primary_text', 'Năng lực in');
$cta_primary_link = lamnguyen_get_field('process_cta_primary_link', home_url('/nang-luc/'));
$cta_secondary_text = lamnguyen_get_field('process_cta_secondary_text', 'Tải hồ sơ năng lực');
$cta_secondary_link = lamnguyen_get_field('process_cta_secondary_link', '#');
?>
<section id="brxe-ldsmdw" class="brxe-section bricks-lazy-hidden">
    <div id="brxe-cvagtf" class="brxe-container bricks-lazy-hidden">
        <h2 id="brxe-wzgizz" class="brxe-heading"><?php echo esc_html($process_title); ?></h2>
        <div id="brxe-bulesy" class="brxe-text-basic"><?php echo esc_html($process_body); ?></div>
    </div>
</section>

<section id="brxe-oxgewd" class="brxe-section bricks-lazy-hidden">
    <div id="brxe-zpnnqq" class="brxe-container bricks-lazy-hidden">
        <figure id="brxe-yhgjue" class="brxe-image tag">
            <?php echo lamnguyen_render_image($process_image, 'full', array('class' => 'css-filter size-full')); ?>
        </figure>
        <div id="brxe-hnjiia" class="brxe-block bricks-lazy-hidden">
            <a id="brxe-yluujq" class="brxe-button bricks-button outline circle" href="<?php echo esc_url($cta_primary_link); ?>">
                <?php echo esc_html($cta_primary_text); ?>
            </a>
            <a id="brxe-ubroaq" class="brxe-button bricks-button outline circle" href="<?php echo esc_url($cta_secondary_link); ?>" target="_blank" rel="noopener">
                <?php echo esc_html($cta_secondary_text); ?>
                <i class="ti-download"></i>
            </a>
        </div>
    </div>
</section>