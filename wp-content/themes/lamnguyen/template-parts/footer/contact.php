<?php

declare(strict_types=1);

$contact_heading = lamnguyen_get_option('footer_contact_heading', __('Liên hệ', 'lamnguyen'));
$contact_subheading = lamnguyen_get_option('footer_contact_subheading', __('Liên Hệ trực tiếp để được tư vấn và báo giá đầy đủ', 'lamnguyen'));
$contact_blocks = lamnguyen_get_option('footer_contact_blocks', array());
$company_heading = lamnguyen_get_option('footer_company_heading', __('Công ty TNHH IN LÂM NGUYỄN', 'lamnguyen'));
$company_socials = lamnguyen_get_option('footer_company_socials', array());
$company_addresses = lamnguyen_get_option('footer_company_addresses', array());
$company_phones = lamnguyen_get_option('footer_company_phones', array());
$company_emails = lamnguyen_get_option('footer_company_emails', array());
?>
<div id="brxe-d300a9" class="brxe-block bricks-lazy-hidden">
    <div id="brxe-a8bc6a" class="brxe-block bricks-lazy-hidden">
        <div id="brxe-718aa3" class="brxe-block bricks-lazy-hidden">
            <h4 class="brxe-heading footer-heading"><?php echo esc_html($contact_heading); ?></h4>
            <div id="brxe-eb7eec" class="brxe-divider horizontal">
                <div class="line"></div>
            </div>
        </div>
        <h5 class="brxe-heading footer-subheading"><?php echo esc_html($contact_subheading); ?></h5>
    </div>

    <?php foreach ($contact_blocks as $block) : ?>
        <div class="brxe-block bricks-lazy-hidden footer-contact-block">
            <?php if (!empty($block['title'])) : ?>
                <h6 class="brxe-heading"><?php echo esc_html($block['title']); ?></h6>
            <?php endif; ?>
            <div class="brxe-block bricks-lazy-hidden">
                <?php foreach (($block['items'] ?? array()) as $item) : ?>
                    <div class="brxe-block bricks-lazy-hidden footer-contact-item">
                        <?php if (!empty($item['icon_class'])) : ?>
                            <i class="<?php echo esc_attr($item['icon_class']); ?> brxe-icon"></i>
                        <?php endif; ?>
                        <?php if (!empty($item['link'])) : ?>
                            <a class="brxe-text-basic" href="<?php echo esc_url($item['link']); ?>">
                                <?php echo esc_html(trim(($item['label'] ?? '') . ' ' . ($item['value'] ?? ''))); ?>
                            </a>
                        <?php else : ?>
                            <div class="brxe-text-basic">
                                <?php echo esc_html(trim(($item['label'] ?? '') . ' ' . ($item['value'] ?? ''))); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div id="brxe-782eb2" class="brxe-block bricks-lazy-hidden">
    <div id="brxe-a00f38" class="brxe-block bricks-lazy-hidden">
        <div id="brxe-c38c69" class="brxe-block bricks-lazy-hidden">
            <h4 class="brxe-heading footer-heading"><?php echo esc_html($company_heading); ?></h4>
            <div id="brxe-3300c8" class="brxe-divider horizontal">
                <div class="line"></div>
            </div>
        </div>
    </div>

    <?php if ($company_socials) : ?>
        <div class="brxe-block bricks-lazy-hidden">
            <?php foreach ($company_socials as $social) : ?>
                <a class="brxe-block bricks-lazy-hidden" href="<?php echo esc_url($social['url'] ?? '#'); ?>" target="_blank"
                    rel="noopener">
                    <?php if (!empty($social['icon_class'])) : ?>
                        <i class="<?php echo esc_attr($social['icon_class']); ?> brxe-icon"></i>
                    <?php endif; ?>
                    <div class="brxe-text-basic"><?php echo esc_html($social['label'] ?? ''); ?></div>
                </a>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <?php foreach ($company_addresses as $address) : ?>
        <div class="brxe-block bricks-lazy-hidden">
            <div class="brxe-block bricks-lazy-hidden">
                <i class="fas fa-location-dot brxe-icon"></i>
                <div class="brxe-text-basic">
                    <?php if (!empty($address['label'])) : ?>
                        <span><?php echo esc_html($address['label']); ?> </span>
                    <?php endif; ?>
                    <?php echo esc_html($address['value'] ?? ''); ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?php foreach ($company_phones as $phone) : ?>
        <div class="brxe-block bricks-lazy-hidden">
            <div class="brxe-block bricks-lazy-hidden">
                <i class="fas fa-phone brxe-icon"></i>
                <div class="brxe-text-basic">
                    <?php if (!empty($phone['label'])) : ?>
                        <span><?php echo esc_html($phone['label']); ?> </span>
                    <?php endif; ?>
                    <?php echo esc_html($phone['value'] ?? ''); ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?php foreach ($company_emails as $email) : ?>
        <div class="brxe-block bricks-lazy-hidden">
            <div class="brxe-block bricks-lazy-hidden">
                <i class="fas fa-envelope-open-text brxe-icon"></i>
                <div class="brxe-text-basic">
                    <?php if (!empty($email['label'])) : ?>
                        <span><?php echo esc_html($email['label']); ?> </span>
                    <?php endif; ?>
                    <?php echo esc_html($email['value'] ?? ''); ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>