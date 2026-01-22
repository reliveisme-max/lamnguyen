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
            'page_title' => __('Cài đặt giao diện', 'lamnguyen'),
            'menu_title' => __('Cài đặt giao diện', 'lamnguyen'),
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
            'title' => 'Cài đặt giao diện',
            'fields' => array(
                array(
                    'key' => 'field_lamnguyen_tab_branding',
                    'label' => 'Thương hiệu',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'field_lamnguyen_logo_svg',
                    'label' => 'Logo SVG (dán mã)',
                    'name' => 'logo_svg',
                    'type' => 'textarea',
                    'rows' => 6,
                ),
                array(
                    'key' => 'field_lamnguyen_logo_image',
                    'label' => 'Ảnh logo',
                    'name' => 'logo_image',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                ),
                array(
                    'key' => 'field_lamnguyen_tab_header',
                    'label' => 'Đầu trang',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'field_lamnguyen_offcanvas_title',
                    'label' => 'Tiêu đề offcanvas',
                    'name' => 'offcanvas_title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_offcanvas_subtitle',
                    'label' => 'Phụ đề offcanvas',
                    'name' => 'offcanvas_subtitle',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_tab_footer',
                    'label' => 'Chân trang',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'field_lamnguyen_footer_contact_heading',
                    'label' => 'Tiêu đề liên hệ',
                    'name' => 'footer_contact_heading',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_footer_contact_subheading',
                    'label' => 'Phụ đề liên hệ',
                    'name' => 'footer_contact_subheading',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_footer_contact_blocks',
                    'label' => 'Khối liên hệ',
                    'name' => 'footer_contact_blocks',
                    'type' => 'repeater',
                    'button_label' => 'Thêm khối liên hệ',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_footer_contact_block_title',
                            'label' => 'Tiêu đề khối',
                            'name' => 'title',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_lamnguyen_footer_contact_block_items',
                            'label' => 'Mục',
                            'name' => 'items',
                            'type' => 'repeater',
                            'button_label' => 'Thêm mục',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_lamnguyen_footer_contact_item_icon',
                                    'label' => 'Class icon',
                                    'name' => 'icon_class',
                                    'type' => 'text',
                                ),
                                array(
                                    'key' => 'field_lamnguyen_footer_contact_item_label',
                                    'label' => 'Nhãn',
                                    'name' => 'label',
                                    'type' => 'text',
                                ),
                                array(
                                    'key' => 'field_lamnguyen_footer_contact_item_value',
                                    'label' => 'Giá trị',
                                    'name' => 'value',
                                    'type' => 'text',
                                ),
                                array(
                                    'key' => 'field_lamnguyen_footer_contact_item_link',
                                    'label' => 'Liên kết',
                                    'name' => 'link',
                                    'type' => 'url',
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_footer_company_heading',
                    'label' => 'Tiêu đề công ty',
                    'name' => 'footer_company_heading',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_footer_socials',
                    'label' => 'Mạng xã hội',
                    'name' => 'footer_company_socials',
                    'type' => 'repeater',
                    'button_label' => 'Thêm mạng xã hội',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_footer_social_icon',
                            'label' => 'Class icon',
                            'name' => 'icon_class',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_lamnguyen_footer_social_label',
                            'label' => 'Nhãn',
                            'name' => 'label',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_lamnguyen_footer_social_url',
                            'label' => 'Liên kết',
                            'name' => 'url',
                            'type' => 'url',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_footer_addresses',
                    'label' => 'Địa chỉ',
                    'name' => 'footer_company_addresses',
                    'type' => 'repeater',
                    'button_label' => 'Thêm địa chỉ',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_footer_address_label',
                            'label' => 'Nhãn',
                            'name' => 'label',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_lamnguyen_footer_address_value',
                            'label' => 'Địa chỉ',
                            'name' => 'value',
                            'type' => 'text',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_footer_phones',
                    'label' => 'Số điện thoại',
                    'name' => 'footer_company_phones',
                    'type' => 'repeater',
                    'button_label' => 'Thêm số điện thoại',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_footer_phone_label',
                            'label' => 'Nhãn',
                            'name' => 'label',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_lamnguyen_footer_phone_value',
                            'label' => 'Số điện thoại',
                            'name' => 'value',
                            'type' => 'text',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_footer_emails',
                    'label' => 'Email công ty',
                    'name' => 'footer_company_emails',
                    'type' => 'repeater',
                    'button_label' => 'Thêm email',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_footer_email_label',
                            'label' => 'Nhãn',
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
                    'label' => 'Link nhúng bản đồ',
                    'name' => 'footer_map_embed_url',
                    'type' => 'url',
                ),
                array(
                    'key' => 'field_lamnguyen_footer_bottom_text',
                    'label' => 'Dòng bản quyền',
                    'name' => 'footer_bottom_text',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_tab_sticky',
                    'label' => 'Nút nổi',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'field_lamnguyen_sticky_profile_text',
                    'label' => 'Text nút hồ sơ năng lực',
                    'name' => 'sticky_profile_text',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_sticky_profile_url',
                    'label' => 'Link nút hồ sơ năng lực',
                    'name' => 'sticky_profile_url',
                    'type' => 'url',
                ),
                array(
                    'key' => 'field_lamnguyen_sticky_zalo_text',
                    'label' => 'Text nút Zalo',
                    'name' => 'sticky_zalo_text',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_sticky_zalo_url',
                    'label' => 'Link nút Zalo',
                    'name' => 'sticky_zalo_url',
                    'type' => 'url',
                ),
                array(
                    'key' => 'field_lamnguyen_sticky_hotline_text',
                    'label' => 'Text nút hotline',
                    'name' => 'sticky_hotline_text',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_sticky_hotline_url',
                    'label' => 'Link nút hotline',
                    'name' => 'sticky_hotline_url',
                    'type' => 'url',
                ),
                array(
                    'key' => 'field_lamnguyen_sticky_back_to_top_text',
                    'label' => 'Text nút lên đầu trang',
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
            'title' => 'Nội dung trang chủ',
            'fields' => array(
                array(
                    'key' => 'field_lamnguyen_home_tab_hero',
                    'label' => 'Hero',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'field_lamnguyen_home_hero_top',
                    'label' => 'Hero - chữ trên',
                    'name' => 'hero_top_text',
                    'type' => 'text',
                    'placeholder' => 'Trên',
                    'wrapper' => array(
                        'width' => '25',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_hero_year_digits',
                    'label' => 'Hero - số năm',
                    'name' => 'hero_year_digits',
                    'type' => 'repeater',
                    'button_label' => 'Thêm số',
                    'layout' => 'table',
                    'collapsed' => 'field_lamnguyen_home_hero_year_digit',
                    'wrapper' => array(
                        'width' => '25',
                    ),
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_home_hero_year_digit',
                            'label' => 'Số',
                            'name' => 'digit',
                            'type' => 'text',
                            'placeholder' => '1',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_hero_suffix',
                    'label' => 'Hero - hậu tố',
                    'name' => 'hero_suffix_text',
                    'type' => 'text',
                    'placeholder' => 'năm phát triển',
                    'wrapper' => array(
                        'width' => '25',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_hero_brand',
                    'label' => 'Hero - tên thương hiệu',
                    'name' => 'hero_brand_text',
                    'type' => 'text',
                    'placeholder' => 'IN LÂM NGUYỄN',
                    'wrapper' => array(
                        'width' => '25',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_hero_subtext',
                    'label' => 'Hero - mô tả',
                    'name' => 'hero_subtext',
                    'type' => 'text',
                    'placeholder' => 'Tự tin đã mang lại hàng triệu ấn phẩm làm hài lòng các đối tác lớn.',
                    'wrapper' => array(
                        'width' => '100',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_tab_partners',
                    'label' => 'Đối tác',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'field_lamnguyen_home_partners',
                    'label' => 'Logo đối tác',
                    'name' => 'partner_logos',
                    'type' => 'repeater',
                    'button_label' => 'Thêm logo',
                    'layout' => 'table',
                    'collapsed' => 'field_lamnguyen_home_partner_logo',
                    'wrapper' => array(
                        'width' => '100',
                    ),
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_home_partner_logo',
                            'label' => 'Logo',
                            'name' => 'logo',
                            'type' => 'image',
                            'return_format' => 'array',
                            'preview_size' => 'thumbnail',
                            'wrapper' => array(
                                'width' => '30',
                            ),
                        ),
                        array(
                            'key' => 'field_lamnguyen_home_partner_link',
                            'label' => 'Liên kết',
                            'name' => 'link',
                            'type' => 'url',
                            'placeholder' => 'https://',
                            'wrapper' => array(
                                'width' => '70',
                            ),
                        ),
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_tab_banner',
                    'label' => 'Banner',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'field_lamnguyen_home_banner_title',
                    'label' => 'Tiêu đề banner',
                    'name' => 'banner_title',
                    'type' => 'text',
                    'placeholder' => 'Thách thức mọi dự án',
                    'wrapper' => array(
                        'width' => '50',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_banner_bg_desktop',
                    'label' => 'Ảnh nền banner desktop',
                    'name' => 'banner_bg_desktop',
                    'type' => 'image',
                    'return_format' => 'array',
                    'wrapper' => array(
                        'width' => '50',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_banner_bg_mobile',
                    'label' => 'Ảnh nền banner mobile',
                    'name' => 'banner_bg_mobile',
                    'type' => 'image',
                    'return_format' => 'array',
                    'wrapper' => array(
                        'width' => '50',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_tab_tech',
                    'label' => 'Công nghệ',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'field_lamnguyen_home_tech_title',
                    'label' => 'Công nghệ',
                    'name' => 'tech_title',
                    'type' => 'text',
                    'placeholder' => 'Công nghệ',
                    'wrapper' => array(
                        'width' => '20',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_tech_title_highlight',
                    'label' => 'IN (chữ lớn)',
                    'name' => 'tech_title_highlight',
                    'type' => 'text',
                    'placeholder' => 'IN',
                    'wrapper' => array(
                        'width' => '20',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_tech_title_suffix',
                    'label' => 'Hiện đại',
                    'name' => 'tech_title_suffix',
                    'type' => 'text',
                    'placeholder' => 'hiện đại',
                    'wrapper' => array(
                        'width' => '20',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_tech_quality_label',
                    'label' => 'Chất lượng',
                    'name' => 'tech_quality_label',
                    'type' => 'text',
                    'placeholder' => 'chất lượng',
                    'wrapper' => array(
                        'width' => '20',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_tech_quality_highlight',
                    'label' => 'Vượt trội',
                    'name' => 'tech_quality_highlight',
                    'type' => 'text',
                    'placeholder' => 'vượt trội',
                    'wrapper' => array(
                        'width' => '20',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_tech_subtitle',
                    'label' => 'Câu bên phải',
                    'name' => 'tech_subtitle',
                    'type' => 'text',
                    'placeholder' => 'Thách thức mọi Dự án',
                    'wrapper' => array(
                        'width' => '100',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_tab_products',
                    'label' => 'Sản phẩm',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'field_lamnguyen_home_products',
                    'label' => 'Slider sản phẩm',
                    'name' => 'product_cards',
                    'type' => 'repeater',
                    'button_label' => 'Thêm card',
                    'layout' => 'table',
                    'collapsed' => 'field_lamnguyen_home_product_title',
                    'wrapper' => array(
                        'width' => '100',
                    ),
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_home_product_title',
                            'label' => 'Tiêu đề',
                            'name' => 'title',
                            'type' => 'text',
                            'placeholder' => 'Tên sản phẩm',
                            'wrapper' => array(
                                'width' => '40',
                            ),
                        ),
                        array(
                            'key' => 'field_lamnguyen_home_product_image',
                            'label' => 'Ảnh',
                            'name' => 'image',
                            'type' => 'image',
                            'return_format' => 'array',
                            'preview_size' => 'thumbnail',
                            'wrapper' => array(
                                'width' => '30',
                            ),
                        ),
                        array(
                            'key' => 'field_lamnguyen_home_product_link',
                            'label' => 'Liên kết',
                            'name' => 'link',
                            'type' => 'url',
                            'placeholder' => 'https://',
                            'wrapper' => array(
                                'width' => '30',
                            ),
                        ),
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_products_cta_text',
                    'label' => 'Text nút sản phẩm',
                    'name' => 'products_cta_text',
                    'type' => 'text',
                    'placeholder' => 'Xem tất cả sản phẩm',
                    'wrapper' => array(
                        'width' => '50',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_products_cta_link',
                    'label' => 'Link nút sản phẩm',
                    'name' => 'products_cta_link',
                    'type' => 'url',
                    'placeholder' => 'https://',
                    'wrapper' => array(
                        'width' => '50',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_tab_priority',
                    'label' => 'Ưu tiên',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'field_lamnguyen_home_priority_title',
                    'label' => 'Tiêu đề ưu tiên',
                    'name' => 'priority_title',
                    'type' => 'text',
                    'placeholder' => 'Bao bì tạo nên sự hoàn hảo cho sản phẩm',
                    'wrapper' => array(
                        'width' => '40',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_priority_title_highlight',
                    'label' => 'Chữ nhấn tiêu đề',
                    'name' => 'priority_title_highlight',
                    'type' => 'text',
                    'placeholder' => 'đầu tư công nghệ',
                    'wrapper' => array(
                        'width' => '60',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_priority_body',
                    'label' => 'Nội dung ưu tiên',
                    'name' => 'priority_body',
                    'type' => 'textarea',
                    'rows' => 4,
                    'placeholder' => 'Mô tả ngắn về ưu tiên, điểm khác biệt hoặc giá trị.',
                    'wrapper' => array(
                        'width' => '60',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_feature_decor_top',
                    'label' => 'Ảnh trang trí phía trên',
                    'name' => 'feature_decor_top',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'wrapper' => array(
                        'width' => '50',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_feature_decor_bottom',
                    'label' => 'Ảnh trang trí phía dưới',
                    'name' => 'feature_decor_bottom',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'wrapper' => array(
                        'width' => '50',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_features',
                    'label' => 'Danh sách nổi bật',
                    'name' => 'feature_items',
                    'type' => 'repeater',
                    'button_label' => 'Thêm nổi bật',
                    'layout' => 'table',
                    'collapsed' => 'field_lamnguyen_home_feature_title',
                    'wrapper' => array(
                        'width' => '100',
                    ),
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_home_feature_title',
                            'label' => 'Tiêu đề',
                            'name' => 'title',
                            'type' => 'text',
                            'placeholder' => 'Chất lượng',
                            'wrapper' => array(
                                'width' => '40',
                            ),
                        ),
                        array(
                            'key' => 'field_lamnguyen_home_feature_highlight',
                            'label' => 'Chữ nhấn',
                            'name' => 'highlight',
                            'type' => 'text',
                            'placeholder' => 'vượt trội',
                            'wrapper' => array(
                                'width' => '30',
                            ),
                        ),
                        array(
                            'key' => 'field_lamnguyen_home_feature_icon',
                            'label' => 'Class icon',
                            'name' => 'icon_class',
                            'type' => 'text',
                            'placeholder' => 'fa-solid fa-star',
                            'wrapper' => array(
                                'width' => '30',
                            ),
                        ),
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_feature_center_image',
                    'label' => 'Ảnh trung tâm',
                    'name' => 'feature_center_image',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'wrapper' => array(
                        'width' => '100',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_tab_equipment',
                    'label' => 'Thiết bị',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'field_lamnguyen_home_equipment',
                    'label' => 'Slider thiết bị',
                    'name' => 'equipment_items',
                    'type' => 'repeater',
                    'button_label' => 'Thêm thiết bị',
                    'layout' => 'table',
                    'collapsed' => 'field_lamnguyen_home_equipment_title',
                    'wrapper' => array(
                        'width' => '100',
                    ),
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_home_equipment_image',
                            'label' => 'Ảnh',
                            'name' => 'image',
                            'type' => 'image',
                            'return_format' => 'array',
                            'preview_size' => 'thumbnail',
                            'wrapper' => array(
                                'width' => '30',
                            ),
                        ),
                        array(
                            'key' => 'field_lamnguyen_home_equipment_title',
                            'label' => 'Tiêu đề',
                            'name' => 'title',
                            'type' => 'text',
                            'placeholder' => 'Máy in',
                            'wrapper' => array(
                                'width' => '35',
                            ),
                        ),
                        array(
                            'key' => 'field_lamnguyen_home_equipment_subtitle',
                            'label' => 'Phụ đề',
                            'name' => 'subtitle',
                            'type' => 'text',
                            'placeholder' => 'Công suất cao',
                            'wrapper' => array(
                                'width' => '35',
                            ),
                        ),
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_equipment_cta_primary_text',
                    'label' => 'Text nút chính',
                    'name' => 'equipment_cta_primary_text',
                    'type' => 'text',
                    'placeholder' => 'Xem thiết bị',
                    'wrapper' => array(
                        'width' => '25',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_equipment_cta_primary_link',
                    'label' => 'Link nút chính',
                    'name' => 'equipment_cta_primary_link',
                    'type' => 'url',
                    'placeholder' => 'https://',
                    'wrapper' => array(
                        'width' => '25',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_equipment_cta_secondary_text',
                    'label' => 'Text nút phụ',
                    'name' => 'equipment_cta_secondary_text',
                    'type' => 'text',
                    'placeholder' => 'Liên hệ báo giá',
                    'wrapper' => array(
                        'width' => '25',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_equipment_cta_secondary_link',
                    'label' => 'Link nút phụ',
                    'name' => 'equipment_cta_secondary_link',
                    'type' => 'url',
                    'placeholder' => 'https://',
                    'wrapper' => array(
                        'width' => '25',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_tab_process',
                    'label' => 'Quy trình',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'field_lamnguyen_home_process_title',
                    'label' => 'Tiêu đề quy trình',
                    'name' => 'process_title',
                    'type' => 'text',
                    'placeholder' => 'Quy trình làm việc',
                    'wrapper' => array(
                        'width' => '40',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_process_body',
                    'label' => 'Nội dung quy trình',
                    'name' => 'process_body',
                    'type' => 'textarea',
                    'rows' => 4,
                    'placeholder' => 'Mô tả ngắn về quy trình làm việc.',
                    'wrapper' => array(
                        'width' => '60',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_process_image',
                    'label' => 'Ảnh quy trình',
                    'name' => 'process_image',
                    'type' => 'image',
                    'return_format' => 'array',
                    'wrapper' => array(
                        'width' => '40',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_process_cta_primary_text',
                    'label' => 'Text nút chính',
                    'name' => 'process_cta_primary_text',
                    'type' => 'text',
                    'placeholder' => 'Xem quy trình',
                    'wrapper' => array(
                        'width' => '25',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_process_cta_primary_link',
                    'label' => 'Link nút chính',
                    'name' => 'process_cta_primary_link',
                    'type' => 'url',
                    'placeholder' => 'https://',
                    'wrapper' => array(
                        'width' => '25',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_process_cta_secondary_text',
                    'label' => 'Text nút phụ',
                    'name' => 'process_cta_secondary_text',
                    'type' => 'text',
                    'placeholder' => 'Liên hệ tư vấn',
                    'wrapper' => array(
                        'width' => '25',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_process_cta_secondary_link',
                    'label' => 'Link nút phụ',
                    'name' => 'process_cta_secondary_link',
                    'type' => 'url',
                    'placeholder' => 'https://',
                    'wrapper' => array(
                        'width' => '25',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_tab_trust',
                    'label' => 'Chữ tín',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'field_lamnguyen_home_trust_title',
                    'label' => 'Tiêu đề chữ tín',
                    'name' => 'trust_title',
                    'type' => 'text',
                    'placeholder' => 'Chữ tín tạo nên thương hiệu',
                    'wrapper' => array(
                        'width' => '40',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_trust_subtitle',
                    'label' => 'Phụ đề chữ tín',
                    'name' => 'trust_subtitle',
                    'type' => 'text',
                    'placeholder' => 'Cam kết cùng đồng hành',
                    'wrapper' => array(
                        'width' => '60',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_trust_body',
                    'label' => 'Nội dung chữ tín',
                    'name' => 'trust_body',
                    'type' => 'textarea',
                    'rows' => 4,
                    'placeholder' => 'Mô tả ngắn về giá trị chữ tín.',
                    'wrapper' => array(
                        'width' => '100',
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_home_trust_bg',
                    'label' => 'Ảnh nền chữ tín',
                    'name' => 'trust_bg',
                    'type' => 'image',
                    'return_format' => 'array',
                    'wrapper' => array(
                        'width' => '50',
                    ),
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
            'title' => 'Trang liên hệ',
            'fields' => array(
                array(
                    'key' => 'field_lamnguyen_contact_title',
                    'label' => 'Tiêu đề liên hệ',
                    'name' => 'contact_title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_contact_subtitle',
                    'label' => 'Phụ đề liên hệ',
                    'name' => 'contact_subtitle',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_contact_form',
                    'label' => 'Shortcode CF7',
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
            'title' => 'Trang năng lực',
            'fields' => array(
                array(
                    'key' => 'field_lamnguyen_capacity_title',
                    'label' => 'Tiêu đề trang',
                    'name' => 'capacity_title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_capacity_subtitle',
                    'label' => 'Phụ đề trang',
                    'name' => 'capacity_subtitle',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_capacity_body',
                    'label' => 'Nội dung trang',
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
            'title' => 'Thông tin sản phẩm',
            'fields' => array(
                array(
                    'key' => 'field_lamnguyen_product_short_description',
                    'label' => 'Mô tả ngắn',
                    'name' => 'product_short_description',
                    'type' => 'textarea',
                    'rows' => 4,
                ),
                array(
                    'key' => 'field_lamnguyen_product_gallery',
                    'label' => 'Thư viện ảnh',
                    'name' => 'product_gallery',
                    'type' => 'gallery',
                    'return_format' => 'array',
                ),
                array(
                    'key' => 'field_lamnguyen_product_specs',
                    'label' => 'Thông số',
                    'name' => 'product_specs',
                    'type' => 'repeater',
                    'button_label' => 'Thêm thông số',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_product_spec_label',
                            'label' => 'Nhãn',
                            'name' => 'label',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_lamnguyen_product_spec_value',
                            'label' => 'Giá trị',
                            'name' => 'value',
                            'type' => 'text',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_product_cta_text',
                    'label' => 'Text nút CTA',
                    'name' => 'product_cta_text',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_product_cta_link',
                    'label' => 'Link nút CTA',
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
            'title' => 'Thông tin tuyển dụng',
            'fields' => array(
                array(
                    'key' => 'field_lamnguyen_job_location',
                    'label' => 'Địa điểm',
                    'name' => 'job_location',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_job_salary',
                    'label' => 'Mức lương',
                    'name' => 'job_salary',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_job_type',
                    'label' => 'Hình thức',
                    'name' => 'job_type',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_lamnguyen_job_deadline',
                    'label' => 'Hạn nộp',
                    'name' => 'job_deadline',
                    'type' => 'date_picker',
                    'display_format' => 'd/m/Y',
                    'return_format' => 'd/m/Y',
                ),
                array(
                    'key' => 'field_lamnguyen_job_summary',
                    'label' => 'Tóm tắt',
                    'name' => 'job_summary',
                    'type' => 'textarea',
                    'rows' => 4,
                ),
                array(
                    'key' => 'field_lamnguyen_job_responsibilities',
                    'label' => 'Trách nhiệm',
                    'name' => 'job_responsibilities',
                    'type' => 'wysiwyg',
                    'media_upload' => 0,
                ),
                array(
                    'key' => 'field_lamnguyen_job_requirements',
                    'label' => 'Yêu cầu',
                    'name' => 'job_requirements',
                    'type' => 'wysiwyg',
                    'media_upload' => 0,
                ),
                array(
                    'key' => 'field_lamnguyen_job_benefits',
                    'label' => 'Quyền lợi',
                    'name' => 'job_benefits',
                    'type' => 'repeater',
                    'button_label' => 'Thêm quyền lợi',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_lamnguyen_job_benefit_item',
                            'label' => 'Quyền lợi',
                            'name' => 'benefit',
                            'type' => 'text',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_lamnguyen_job_apply_url',
                    'label' => 'Link ứng tuyển',
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
