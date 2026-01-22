<?php

declare(strict_types=1);

$tech_title = lamnguyen_get_field('tech_title', 'Công nghệ');
$tech_title_highlight = lamnguyen_get_field('tech_title_highlight', 'IN');
$tech_title_suffix = lamnguyen_get_field('tech_title_suffix', 'hiện đại');
$tech_quality_label = lamnguyen_get_field('tech_quality_label', 'chất lượng');
$tech_quality_highlight = lamnguyen_get_field('tech_quality_highlight', 'vượt trội');
$tech_subtitle = lamnguyen_get_field('tech_subtitle', 'Thách thức mọi Dự án');
?>
<section id="section-tech" class="section section-tech">
    <div class="container tech-inner">
        <div class="tech-title-group">
            <h2 class="tech-title">
                <span class="tech-title-row">
                    <span class="tech-title-text"><?php echo esc_html($tech_title); ?></span>
                    <span class="tech-title-highlight"><?php echo esc_html($tech_title_highlight); ?></span>
                    <span class="tech-title-suffix"><?php echo esc_html($tech_title_suffix); ?></span>
                </span>
                <span class="tech-title-row tech-title-row--quality">
                    <span class="tech-quality-label"><?php echo esc_html($tech_quality_label); ?></span>
                    <span class="tech-quality-highlight"><?php echo esc_html($tech_quality_highlight); ?></span>
                </span>
            </h2>
        </div>
        <div class="tech-subtitle">
            <h2 class="tech-subtitle-text"><?php echo esc_html($tech_subtitle); ?></h2>
        </div>
    </div>
</section>