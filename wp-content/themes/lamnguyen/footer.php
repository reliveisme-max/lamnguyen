<?php
declare(strict_types=1);
?>
</main>
<footer id="brx-footer">
    <section id="brxe-f98e3f" class="brxe-section bricks-lazy-hidden">
        <?php get_template_part('template-parts/footer/map'); ?>
        <?php get_template_part('template-parts/footer/contact'); ?>
    </section>
    <section id="brxe-7c14d3" class="brxe-section bricks-lazy-hidden">
        <div id="brxe-cca35c" class="brxe-container bricks-lazy-hidden">
            <div id="brxe-124836" class="brxe-text-basic">
                <?php echo esc_html(lamnguyen_get_option('footer_bottom_text', __('Copyright © 2009 IN LÂM NGUYỄN', 'lamnguyen'))); ?>
            </div>
        </div>
    </section>
</footer>
<?php get_template_part('template-parts/global/sticky-buttons'); ?>
<?php wp_footer(); ?>
</body>

</html>