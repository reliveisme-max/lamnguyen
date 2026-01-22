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
<div class="footer-contact">
    <div class="footer-heading-group">
        <div class="footer-heading-row">
            <h4 class="footer-heading"><?php echo esc_html($contact_heading); ?></h4>
            <div class="footer-divider footer-divider--light">
                <div class="line"></div>
            </div>
        </div>
        <h5 class="footer-subheading"><?php echo esc_html($contact_subheading); ?></h5>
    </div>

    <?php foreach ($contact_blocks as $block) : ?>
        <div class="footer-contact-block">
            <?php if (!empty($block['title'])) : ?>
                <h6 class="footer-heading footer-heading--small"><?php echo esc_html($block['title']); ?></h6>
            <?php endif; ?>
            <div class="footer-contact-list">
                <?php foreach (($block['items'] ?? array()) as $item) : ?>
                    <div class="footer-contact-item">
                        <?php if (!empty($item['icon_class'])) : ?>
                            <i class="<?php echo esc_attr($item['icon_class']); ?> footer-icon"></i>
                        <?php endif; ?>
                        <?php if (!empty($item['link'])) : ?>
                            <a class="footer-text" href="<?php echo esc_url($item['link']); ?>">
                                <?php echo esc_html(trim(($item['label'] ?? '') . ' ' . ($item['value'] ?? ''))); ?>
                            </a>
                        <?php else : ?>
                            <div class="footer-text">
                                <?php echo esc_html(trim(($item['label'] ?? '') . ' ' . ($item['value'] ?? ''))); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="footer-company">
    <div class="footer-heading-group">
        <div class="footer-heading-row">
            <h4 class="footer-heading"><?php echo esc_html($company_heading); ?></h4>
            <div class="footer-divider footer-divider--light">
                <div class="line"></div>
            </div>
        </div>
    </div>

    <?php if ($company_socials) : ?>
        <div class="footer-socials">
            <?php foreach ($company_socials as $social) : ?>
                <a class="footer-social" href="<?php echo esc_url($social['url'] ?? '#'); ?>" target="_blank" rel="noopener">
                    <?php if (!empty($social['icon_class'])) : ?>
                        <i class="<?php echo esc_attr($social['icon_class']); ?> footer-icon"></i>
                    <?php endif; ?>
                    <div class="footer-text"><?php echo esc_html($social['label'] ?? ''); ?></div>
                </a>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <?php foreach ($company_addresses as $address) : ?>
        <div class="footer-company-item">
            <div class="footer-contact-item">
                <i class="fas fa-location-dot footer-icon"></i>
                <div class="footer-text">
                    <?php if (!empty($address['label'])) : ?>
                        <span><?php echo esc_html($address['label']); ?> </span>
                    <?php endif; ?>
                    <?php echo esc_html($address['value'] ?? ''); ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?php foreach ($company_phones as $phone) : ?>
        <div class="footer-company-item">
            <div class="footer-contact-item">
                <i class="fas fa-phone footer-icon"></i>
                <div class="footer-text">
                    <?php if (!empty($phone['label'])) : ?>
                        <span><?php echo esc_html($phone['label']); ?> </span>
                    <?php endif; ?>
                    <?php echo esc_html($phone['value'] ?? ''); ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?php foreach ($company_emails as $email) : ?>
        <div class="footer-company-item">
            <div class="footer-contact-item">
                <i class="fas fa-envelope-open-text footer-icon"></i>
                <div class="footer-text">
                    <?php if (!empty($email['label'])) : ?>
                        <span><?php echo esc_html($email['label']); ?> </span>
                    <?php endif; ?>
                    <?php echo esc_html($email['value'] ?? ''); ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>