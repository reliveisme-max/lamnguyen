<?php

declare(strict_types=1);

function lamnguyen_acf_json_save_path(string $path): string
{
    return get_template_directory() . '/acf-json';
}

function lamnguyen_acf_json_load_paths(array $paths): array
{
    $paths[] = get_template_directory() . '/acf-json';
    return $paths;
}

add_filter('acf/settings/save_json', 'lamnguyen_acf_json_save_path');
add_filter('acf/settings/load_json', 'lamnguyen_acf_json_load_paths');

function lamnguyen_register_acf_options_pages(): void
{
    if (!function_exists('acf_add_options_page')) {
        return;
    }

    acf_add_options_page(
        array(
            'page_title' => __('Theme Settings', 'lamnguyen'),
            'menu_title' => __('Theme Settings', 'lamnguyen'),
            'menu_slug'  => 'lamnguyen-theme-settings',
            'capability' => 'manage_options',
            'redirect'   => false,
        )
    );
}

add_action('acf/init', 'lamnguyen_register_acf_options_pages');

function lamnguyen_register_acf_field_groups(): void
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(
        array(
            'key' => 'group_lamnguyen_theme_settings',
            'title' => 'Theme Settings',
            'fields' => array(
                array(
                    'key' => 'field_lamnguyen_tab_branding',
                    'label' => 'Branding',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'field_lamnguyen_logo_svg',
                    'label' => 'Logo SVG Inline',
                    'name' => 'logo_svg',
                    'type' => 'textarea',
                    'rows' => 6,
                ),
                array(
                    'key' => 'field_lamnguyen_logo_image',
                    'label' => 'Logo Image',
                    'name' => 'logo_image',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                ),
                array(
                    'key' => 'field_lamnguyen_tab_header',
                    'label' => 'Header',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'field_lamnguyen_offcanvas_title',
                    'label' => 'Offcanvas Title',
                    'name' => 'offcanvas_title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_offcanvas_subtitle',
                    'label' => 'Offcanvas Subtitle',
                    'name' => 'offcanvas_subtitle',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_tab_footer',
                    'label' => 'Footer',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'field_lamnguyen_footer_contact_heading',
                    'label' => 'Contact Heading',
                    'name' => 'footer_contact_heading',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_footer_contact_subheading',
                    'label' => 'Contact Subheading',
                    'name' => 'footer_contact_subheading',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_footer_contact_blocks',
                    'label' => 'Contact Blocks',
                    'name' => 'footer_contact_blocks',
                    'type' => 'repeater',
                    'button_label' => 'Add Contact Block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_footer_contact_block_title',
                            'label' => 'Block Title',
                            'name' => 'title',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_lamnguyen_footer_contact_block_items',
                            'label' => 'Items',
                            'name' => 'items',
                            'type' => 'repeater',
                            'button_label' => 'Add Item',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_lamnguyen_footer_contact_item_icon',
                                    'label' => 'Icon Class',
                                    'name' => 'icon_class',
                                    'type' => 'text',
                                ),
                                array(
                                    'key' => 'field_lamnguyen_footer_contact_item_label',
                                    'label' => 'Label',
                                    'name' => 'label',
                                    'type' => 'text',
                                ),
                                array(
                                    'key' => 'field_lamnguyen_footer_contact_item_value',
                                    'label' => 'Value',
                                    'name' => 'value',
                                    'type' => 'text',
                                ),
                                array(
                                    'key' => 'field_lamnguyen_footer_contact_item_link',
                                    'label' => 'Link',
                                    'name' => 'link',
                                    'type' => 'url',
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_footer_company_heading',
                    'label' => 'Company Heading',
                    'name' => 'footer_company_heading',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_footer_socials',
                    'label' => 'Company Socials',
                    'name' => 'footer_company_socials',
                    'type' => 'repeater',
                    'button_label' => 'Add Social',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_footer_social_icon',
                            'label' => 'Icon Class',
                            'name' => 'icon_class',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_lamnguyen_footer_social_label',
                            'label' => 'Label',
                            'name' => 'label',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_lamnguyen_footer_social_url',
                            'label' => 'URL',
                            'name' => 'url',
                            'type' => 'url',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_footer_addresses',
                    'label' => 'Company Addresses',
                    'name' => 'footer_company_addresses',
                    'type' => 'repeater',
                    'button_label' => 'Add Address',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_footer_address_label',
                            'label' => 'Label',
                            'name' => 'label',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_lamnguyen_footer_address_value',
                            'label' => 'Address',
                            'name' => 'value',
                            'type' => 'text',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_footer_phones',
                    'label' => 'Company Phones',
                    'name' => 'footer_company_phones',
                    'type' => 'repeater',
                    'button_label' => 'Add Phone',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_footer_phone_label',
                            'label' => 'Label',
                            'name' => 'label',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_lamnguyen_footer_phone_value',
                            'label' => 'Phone',
                            'name' => 'value',
                            'type' => 'text',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_footer_emails',
                    'label' => 'Company Emails',
                    'name' => 'footer_company_emails',
                    'type' => 'repeater',
                    'button_label' => 'Add Email',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_footer_email_label',
                            'label' => 'Label',
                            'name' => 'label',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_lamnguyen_footer_email_value',
                            'label' => 'Email',
                            'name' => 'value',
                            'type' => 'email',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_footer_map_url',
                    'label' => 'Map Embed URL',
                    'name' => 'footer_map_embed_url',
                    'type' => 'url',
                ),
                array(
                    'key' => 'field_lamnguyen_footer_bottom_text',
                    'label' => 'Footer Bottom Text',
                    'name' => 'footer_bottom_text',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_tab_sticky',
                    'label' => 'Sticky Buttons',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'field_lamnguyen_sticky_profile_text',
                    'label' => 'Profile Button Text',
                    'name' => 'sticky_profile_text',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_sticky_profile_url',
                    'label' => 'Profile Button URL',
                    'name' => 'sticky_profile_url',
                    'type' => 'url',
                ),
                array(
                    'key' => 'field_lamnguyen_sticky_zalo_text',
                    'label' => 'Zalo Button Text',
                    'name' => 'sticky_zalo_text',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_sticky_zalo_url',
                    'label' => 'Zalo Button URL',
                    'name' => 'sticky_zalo_url',
                    'type' => 'url',
                ),
                array(
                    'key' => 'field_lamnguyen_sticky_hotline_text',
                    'label' => 'Hotline Button Text',
                    'name' => 'sticky_hotline_text',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_sticky_hotline_url',
                    'label' => 'Hotline Button URL',
                    'name' => 'sticky_hotline_url',
                    'type' => 'url',
                ),
                array(
                    'key' => 'field_lamnguyen_sticky_back_to_top_text',
                    'label' => 'Back To Top Text',
                    'name' => 'sticky_back_to_top_text',
                    'type' => 'text',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'lamnguyen-theme-settings',
                    ),
                ),
            ),
        )
    );

    acf_add_local_field_group(
        array(
            'key' => 'group_lamnguyen_home',
            'title' => 'Homepage Content',
            'fields' => array(
                array(
                    'key' => 'field_lamnguyen_home_hero_top',
                    'label' => 'Hero Top Text',
                    'name' => 'hero_top_text',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_home_hero_year_digits',
                    'label' => 'Hero Year Digits',
                    'name' => 'hero_year_digits',
                    'type' => 'repeater',
                    'button_label' => 'Add Digit',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_home_hero_year_digit',
                            'label' => 'Digit',
                            'name' => 'digit',
                            'type' => 'text',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_hero_suffix',
                    'label' => 'Hero Suffix',
                    'name' => 'hero_suffix_text',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_home_hero_brand',
                    'label' => 'Hero Brand Text',
                    'name' => 'hero_brand_text',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_home_hero_subtext',
                    'label' => 'Hero Subtext',
                    'name' => 'hero_subtext',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_home_partners',
                    'label' => 'Partner Logos',
                    'name' => 'partner_logos',
                    'type' => 'repeater',
                    'button_label' => 'Add Logo',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_home_partner_logo',
                            'label' => 'Logo',
                            'name' => 'logo',
                            'type' => 'image',
                            'return_format' => 'array',
                        ),
                        array(
                            'key' => 'field_lamnguyen_home_partner_link',
                            'label' => 'Link',
                            'name' => 'link',
                            'type' => 'url',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_banner_title',
                    'label' => 'Banner Title',
                    'name' => 'banner_title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_home_banner_bg_desktop',
                    'label' => 'Banner Background Desktop',
                    'name' => 'banner_bg_desktop',
                    'type' => 'image',
                    'return_format' => 'array',
                ),
                array(
                    'key' => 'field_lamnguyen_home_banner_bg_mobile',
                    'label' => 'Banner Background Mobile',
                    'name' => 'banner_bg_mobile',
                    'type' => 'image',
                    'return_format' => 'array',
                ),
                array(
                    'key' => 'field_lamnguyen_home_tech_title',
                    'label' => 'Tech Section Title',
                    'name' => 'tech_title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_home_tech_subtitle',
                    'label' => 'Tech Section Subtitle',
                    'name' => 'tech_subtitle',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_home_products',
                    'label' => 'Product Slider',
                    'name' => 'product_cards',
                    'type' => 'repeater',
                    'button_label' => 'Add Product Card',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_home_product_title',
                            'label' => 'Title',
                            'name' => 'title',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_lamnguyen_home_product_image',
                            'label' => 'Image',
                            'name' => 'image',
                            'type' => 'image',
                            'return_format' => 'array',
                        ),
                        array(
                            'key' => 'field_lamnguyen_home_product_link',
                            'label' => 'Link',
                            'name' => 'link',
                            'type' => 'url',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_products_cta_text',
                    'label' => 'Products CTA Text',
                    'name' => 'products_cta_text',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_home_products_cta_link',
                    'label' => 'Products CTA Link',
                    'name' => 'products_cta_link',
                    'type' => 'url',
                ),
                array(
                    'key' => 'field_lamnguyen_home_priority_title',
                    'label' => 'Priority Section Title',
                    'name' => 'priority_title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_home_priority_body',
                    'label' => 'Priority Body',
                    'name' => 'priority_body',
                    'type' => 'textarea',
                    'rows' => 4,
                ),
                array(
                    'key' => 'field_lamnguyen_home_features',
                    'label' => 'Feature List',
                    'name' => 'feature_items',
                    'type' => 'repeater',
                    'button_label' => 'Add Feature',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_home_feature_title',
                            'label' => 'Title',
                            'name' => 'title',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_lamnguyen_home_feature_highlight',
                            'label' => 'Highlight Text',
                            'name' => 'highlight',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_lamnguyen_home_feature_icon',
                            'label' => 'Icon Class',
                            'name' => 'icon_class',
                            'type' => 'text',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_feature_center_image',
                    'label' => 'Feature Center Image',
                    'name' => 'feature_center_image',
                    'type' => 'image',
                    'return_format' => 'array',
                ),
                array(
                    'key' => 'field_lamnguyen_home_equipment',
                    'label' => 'Equipment Slider',
                    'name' => 'equipment_items',
                    'type' => 'repeater',
                    'button_label' => 'Add Equipment',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_home_equipment_image',
                            'label' => 'Image',
                            'name' => 'image',
                            'type' => 'image',
                            'return_format' => 'array',
                        ),
                        array(
                            'key' => 'field_lamnguyen_home_equipment_title',
                            'label' => 'Title',
                            'name' => 'title',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_lamnguyen_home_equipment_subtitle',
                            'label' => 'Subtitle',
                            'name' => 'subtitle',
                            'type' => 'text',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_equipment_cta_primary_text',
                    'label' => 'Equipment CTA Primary Text',
                    'name' => 'equipment_cta_primary_text',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_home_equipment_cta_primary_link',
                    'label' => 'Equipment CTA Primary Link',
                    'name' => 'equipment_cta_primary_link',
                    'type' => 'url',
                ),
                array(
                    'key' => 'field_lamnguyen_home_equipment_cta_secondary_text',
                    'label' => 'Equipment CTA Secondary Text',
                    'name' => 'equipment_cta_secondary_text',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_home_equipment_cta_secondary_link',
                    'label' => 'Equipment CTA Secondary Link',
                    'name' => 'equipment_cta_secondary_link',
                    'type' => 'url',
                ),
                array(
                    'key' => 'field_lamnguyen_home_process_title',
                    'label' => 'Process Title',
                    'name' => 'process_title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_home_process_body',
                    'label' => 'Process Body',
                    'name' => 'process_body',
                    'type' => 'textarea',
                    'rows' => 4,
                ),
                array(
                    'key' => 'field_lamnguyen_home_process_image',
                    'label' => 'Process Image',
                    'name' => 'process_image',
                    'type' => 'image',
                    'return_format' => 'array',
                ),
                array(
                    'key' => 'field_lamnguyen_home_process_cta_primary_text',
                    'label' => 'Process CTA Primary Text',
                    'name' => 'process_cta_primary_text',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_home_process_cta_primary_link',
                    'label' => 'Process CTA Primary Link',
                    'name' => 'process_cta_primary_link',
                    'type' => 'url',
                ),
                array(
                    'key' => 'field_lamnguyen_home_process_cta_secondary_text',
                    'label' => 'Process CTA Secondary Text',
                    'name' => 'process_cta_secondary_text',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_home_process_cta_secondary_link',
                    'label' => 'Process CTA Secondary Link',
                    'name' => 'process_cta_secondary_link',
                    'type' => 'url',
                ),
                array(
                    'key' => 'field_lamnguyen_home_trust_title',
                    'label' => 'Trust Title',
                    'name' => 'trust_title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_home_trust_subtitle',
                    'label' => 'Trust Subtitle',
                    'name' => 'trust_subtitle',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_home_trust_body',
                    'label' => 'Trust Body',
                    'name' => 'trust_body',
                    'type' => 'textarea',
                    'rows' => 4,
                ),
                array(
                    'key' => 'field_lamnguyen_home_trust_bg',
                    'label' => 'Trust Background Image',
                    'name' => 'trust_bg',
                    'type' => 'image',
                    'return_format' => 'array',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_type',
                        'operator' => '==',
                        'value' => 'front_page',
                    ),
                ),
            ),
        )
    );

    acf_add_local_field_group(
        array(
            'key' => 'group_lamnguyen_contact_page',
            'title' => 'Contact Page',
            'fields' => array(
                array(
                    'key' => 'field_lamnguyen_contact_title',
                    'label' => 'Contact Title',
                    'name' => 'contact_title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_contact_subtitle',
                    'label' => 'Contact Subtitle',
                    'name' => 'contact_subtitle',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_contact_form',
                    'label' => 'CF7 Shortcode',
                    'name' => 'contact_form_shortcode',
                    'type' => 'text',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'page-lien-he.php',
                    ),
                ),
            ),
        )
    );

    acf_add_local_field_group(
        array(
            'key' => 'group_lamnguyen_capacity_page',
            'title' => 'Capacity Page',
            'fields' => array(
                array(
                    'key' => 'field_lamnguyen_capacity_title',
                    'label' => 'Page Title',
                    'name' => 'capacity_title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_capacity_subtitle',
                    'label' => 'Page Subtitle',
                    'name' => 'capacity_subtitle',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_capacity_body',
                    'label' => 'Page Body',
                    'name' => 'capacity_body',
                    'type' => 'textarea',
                    'rows' => 6,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'page-nang-luc.php',
                    ),
                ),
            ),
        )
    );

    acf_add_local_field_group(
        array(
            'key' => 'group_lamnguyen_product_fields',
            'title' => 'Product Fields',
            'fields' => array(
                array(
                    'key' => 'field_lamnguyen_product_short_description',
                    'label' => 'Short Description',
                    'name' => 'product_short_description',
                    'type' => 'textarea',
                    'rows' => 4,
                ),
                array(
                    'key' => 'field_lamnguyen_product_gallery',
                    'label' => 'Gallery',
                    'name' => 'product_gallery',
                    'type' => 'gallery',
                    'return_format' => 'array',
                ),
                array(
                    'key' => 'field_lamnguyen_product_specs',
                    'label' => 'Specifications',
                    'name' => 'product_specs',
                    'type' => 'repeater',
                    'button_label' => 'Add Spec',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_product_spec_label',
                            'label' => 'Label',
                            'name' => 'label',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_lamnguyen_product_spec_value',
                            'label' => 'Value',
                            'name' => 'value',
                            'type' => 'text',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_product_cta_text',
                    'label' => 'CTA Text',
                    'name' => 'product_cta_text',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_product_cta_link',
                    'label' => 'CTA Link',
                    'name' => 'product_cta_link',
                    'type' => 'url',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'san-pham',
                    ),
                ),
            ),
        )
    );

    acf_add_local_field_group(
        array(
            'key' => 'group_lamnguyen_job_fields',
            'title' => 'Recruitment Fields',
            'fields' => array(
                array(
                    'key' => 'field_lamnguyen_job_location',
                    'label' => 'Location',
                    'name' => 'job_location',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_job_salary',
                    'label' => 'Salary',
                    'name' => 'job_salary',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_job_type',
                    'label' => 'Employment Type',
                    'name' => 'job_type',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_job_deadline',
                    'label' => 'Deadline',
                    'name' => 'job_deadline',
                    'type' => 'date_picker',
                    'display_format' => 'd/m/Y',
                    'return_format' => 'd/m/Y',
                ),
                array(
                    'key' => 'field_lamnguyen_job_summary',
                    'label' => 'Summary',
                    'name' => 'job_summary',
                    'type' => 'textarea',
                    'rows' => 4,
                ),
                array(
                    'key' => 'field_lamnguyen_job_responsibilities',
                    'label' => 'Responsibilities',
                    'name' => 'job_responsibilities',
                    'type' => 'wysiwyg',
                    'media_upload' => 0,
                ),
                array(
                    'key' => 'field_lamnguyen_job_requirements',
                    'label' => 'Requirements',
                    'name' => 'job_requirements',
                    'type' => 'wysiwyg',
                    'media_upload' => 0,
                ),
                array(
                    'key' => 'field_lamnguyen_job_benefits',
                    'label' => 'Benefits',
                    'name' => 'job_benefits',
                    'type' => 'repeater',
                    'button_label' => 'Add Benefit',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_job_benefit_item',
                            'label' => 'Benefit',
                            'name' => 'benefit',
                            'type' => 'text',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_job_apply_url',
                    'label' => 'Apply URL',
                    'name' => 'job_apply_url',
                    'type' => 'url',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'tuyen-dung',
                    ),
                ),
            ),
        )
    );
}

add_action('acf/init', 'lamnguyen_register_acf_field_groups');
