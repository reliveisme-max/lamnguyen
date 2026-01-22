<?php
declare(strict_types=1);
?>
</main>
<footer id="site-footer" class="site-footer">
    <section class="section footer-main">
        <?php get_template_part('template-parts/footer/map'); ?>
        <?php get_template_part('template-parts/footer/contact'); ?>
    </section>
    <section class="section footer-bottom">
        <div class="container footer-bottom__inner">
            <div class="footer-bottom__text">
                <?php echo esc_html(lamnguyen_get_option('footer_bottom_text', __('Copyright © 2009 IN LÂM NGUYỄN', 'lamnguyen'))); ?>
            </div>
        </div>
    </section>
</footer>
<?php get_template_part('template-parts/global/sticky-buttons'); ?>
<?php wp_footer(); ?>
</body>

</html>