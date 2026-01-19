<?php

declare(strict_types=1);

get_header();
?>
<div class="single single-san-pham">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('single-item'); ?>>
                <h1 class="single-item__title"><?php the_title(); ?></h1>
                <div class="single-item__content">
                    <?php the_content(); ?>
                </div>
                <?php
                $short_description = lamnguyen_get_field('product_short_description', '');
                $gallery = lamnguyen_get_field('product_gallery', array());
                $specs = lamnguyen_get_field('product_specs', array());
                $cta_text = lamnguyen_get_field('product_cta_text', '');
                $cta_link = lamnguyen_get_field('product_cta_link', '');
                ?>
                <?php if ($short_description) : ?>
                    <p class="single-item__summary"><?php echo esc_html($short_description); ?></p>
                <?php endif; ?>
                <?php if ($gallery) : ?>
                    <div class="single-item__gallery">
                        <?php foreach ($gallery as $image) : ?>
                            <?php echo lamnguyen_render_image($image, 'large', array('class' => 'single-item__image')); ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <?php if ($specs) : ?>
                    <ul class="single-item__specs">
                        <?php foreach ($specs as $spec) : ?>
                            <li>
                                <strong><?php echo esc_html($spec['label'] ?? ''); ?></strong>
                                <?php echo esc_html($spec['value'] ?? ''); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <?php if ($cta_text && $cta_link) : ?>
                    <a class="brxe-button bricks-button outline circle" href="<?php echo esc_url($cta_link); ?>">
                        <?php echo esc_html($cta_text); ?>
                    </a>
                <?php endif; ?>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php
get_footer();
