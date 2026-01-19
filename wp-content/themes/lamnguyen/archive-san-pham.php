<?php

declare(strict_types=1);

get_header();
?>
<div class="archive archive-san-pham">
    <header class="archive-header">
        <h1 class="archive-title"><?php post_type_archive_title(); ?></h1>
    </header>
    <?php if (have_posts()) : ?>
        <div class="archive-list">
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('archive-item'); ?>>
                    <h2 class="archive-item__title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="archive-item__excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p><?php esc_html_e('No products found.', 'lamnguyen'); ?></p>
    <?php endif; ?>
</div>
<?php
get_footer();
