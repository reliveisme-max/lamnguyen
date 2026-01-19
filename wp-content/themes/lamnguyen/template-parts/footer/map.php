<?php

declare(strict_types=1);

$map_url = lamnguyen_get_option(
    'footer_map_embed_url',
    'https://maps.google.com/maps?q=In%20%E1%BA%A4n%20L%C3%A2m%20Nguy%E1%BB%85n&t=ROADMAP&z=16&output=embed&iwloc=near'
);
?>
<div id="brxe-3cd43e" class="brxe-block bricks-lazy-hidden">
    <div id="brxe-8779f1" class="brxe-map no-key">
        <iframe width="100%" height="100%" loading="lazy" src="<?php echo esc_url($map_url); ?>" allowfullscreen
            title="<?php esc_attr_e('In Ấn Lâm Nguyễn', 'lamnguyen'); ?>"></iframe>
    </div>
</div>