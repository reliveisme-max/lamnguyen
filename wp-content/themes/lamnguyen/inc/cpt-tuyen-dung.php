<?php

declare(strict_types=1);

function lamnguyen_register_tuyen_dung_cpt(): void
{
    $labels = array(
        'name'                  => __('Tuyển dụng', 'lamnguyen'),
        'singular_name'         => __('Tuyển dụng', 'lamnguyen'),
        'menu_name'             => __('Tuyển dụng', 'lamnguyen'),
        'name_admin_bar'        => __('Tuyển dụng', 'lamnguyen'),
        'add_new'               => __('Thêm mới', 'lamnguyen'),
        'add_new_item'          => __('Thêm tin tuyển dụng', 'lamnguyen'),
        'new_item'              => __('Tin tuyển dụng mới', 'lamnguyen'),
        'edit_item'             => __('Sửa tin tuyển dụng', 'lamnguyen'),
        'view_item'             => __('Xem tin tuyển dụng', 'lamnguyen'),
        'all_items'             => __('Tất cả tin tuyển dụng', 'lamnguyen'),
        'search_items'          => __('Tìm tin tuyển dụng', 'lamnguyen'),
        'parent_item_colon'     => __('Tin tuyển dụng cha:', 'lamnguyen'),
        'not_found'             => __('Không tìm thấy tin tuyển dụng.', 'lamnguyen'),
        'not_found_in_trash'    => __('Không có tin tuyển dụng trong thùng rác.', 'lamnguyen'),
        'featured_image'        => __('Ảnh tuyển dụng', 'lamnguyen'),
        'set_featured_image'    => __('Đặt ảnh tuyển dụng', 'lamnguyen'),
        'remove_featured_image' => __('Xóa ảnh tuyển dụng', 'lamnguyen'),
        'use_featured_image'    => __('Dùng làm ảnh tuyển dụng', 'lamnguyen'),
        'archives'              => __('Lưu trữ tuyển dụng', 'lamnguyen'),
        'insert_into_item'      => __('Chèn vào tin tuyển dụng', 'lamnguyen'),
        'uploaded_to_this_item' => __('Tải lên cho tin tuyển dụng này', 'lamnguyen'),
        'filter_items_list'     => __('Lọc danh sách tuyển dụng', 'lamnguyen'),
        'items_list_navigation' => __('Điều hướng danh sách tuyển dụng', 'lamnguyen'),
        'items_list'            => __('Danh sách tuyển dụng', 'lamnguyen'),
    );

    register_post_type(
        'tuyen-dung',
        array(
            'labels'             => $labels,
            'public'             => true,
            'has_archive'        => true,
            'rewrite'            => array('slug' => 'tuyen-dung', 'with_front' => false),
            'menu_position'      => 21,
            'menu_icon'          => 'dashicons-megaphone',
            'supports'           => array('title', 'editor', 'excerpt', 'thumbnail'),
            'show_in_rest'       => true,
            'show_in_nav_menus'  => true,
        )
    );
}

add_action('init', 'lamnguyen_register_tuyen_dung_cpt');
