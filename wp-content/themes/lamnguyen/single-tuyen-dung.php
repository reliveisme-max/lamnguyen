<?php

declare(strict_types=1);

get_header();
?>
<div class="single single-tuyen-dung">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('single-item'); ?>>
                <h1 class="single-item__title"><?php the_title(); ?></h1>
                <div class="single-item__content">
                    <?php the_content(); ?>
                </div>
                <?php
                $location = lamnguyen_get_field('job_location', '');
                $salary = lamnguyen_get_field('job_salary', '');
                $type = lamnguyen_get_field('job_type', '');
                $deadline = lamnguyen_get_field('job_deadline', '');
                $summary = lamnguyen_get_field('job_summary', '');
                $responsibilities = lamnguyen_get_field('job_responsibilities', '');
                $requirements = lamnguyen_get_field('job_requirements', '');
                $benefits = lamnguyen_get_field('job_benefits', array());
                $apply_url = lamnguyen_get_field('job_apply_url', '');
                ?>
                <ul class="single-item__meta">
                    <?php if ($location) : ?><li><?php echo esc_html($location); ?></li><?php endif; ?>
                    <?php if ($salary) : ?><li><?php echo esc_html($salary); ?></li><?php endif; ?>
                    <?php if ($type) : ?><li><?php echo esc_html($type); ?></li><?php endif; ?>
                    <?php if ($deadline) : ?><li><?php echo esc_html($deadline); ?></li><?php endif; ?>
                </ul>
                <?php if ($summary) : ?>
                    <p class="single-item__summary"><?php echo esc_html($summary); ?></p>
                <?php endif; ?>
                <?php if ($responsibilities) : ?>
                    <div class="single-item__section">
                        <h2><?php esc_html_e('Trách nhiệm', 'lamnguyen'); ?></h2>
                        <?php echo wp_kses_post($responsibilities); ?>
                    </div>
                <?php endif; ?>
                <?php if ($requirements) : ?>
                    <div class="single-item__section">
                        <h2><?php esc_html_e('Yêu cầu', 'lamnguyen'); ?></h2>
                        <?php echo wp_kses_post($requirements); ?>
                    </div>
                <?php endif; ?>
                <?php if ($benefits) : ?>
                    <div class="single-item__section">
                        <h2><?php esc_html_e('Quyền lợi', 'lamnguyen'); ?></h2>
                        <ul>
                            <?php foreach ($benefits as $benefit) : ?>
                                <li><?php echo esc_html($benefit['benefit'] ?? ''); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <?php if ($apply_url) : ?>
                    <a class="brxe-button bricks-button outline circle" href="<?php echo esc_url($apply_url); ?>">
                        <?php esc_html_e('Ứng tuyển', 'lamnguyen'); ?>
                    </a>
                <?php endif; ?>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php
get_footer();
