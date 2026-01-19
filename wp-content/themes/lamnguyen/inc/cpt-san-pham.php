<?php

declare(strict_types=1);

function lamnguyen_register_san_pham_cpt(): void
{
    $labels = array(
        'name'                  => __('Sản phẩm', 'lamnguyen'),
        'singular_name'         => __('Sản phẩm', 'lamnguyen'),
        'menu_name'             => __('Sản phẩm', 'lamnguyen'),
        'name_admin_bar'        => __('Sản phẩm', 'lamnguyen'),
        'add_new'               => __('Thêm mới', 'lamnguyen'),
        'add_new_item'          => __('Thêm sản phẩm', 'lamnguyen'),
        'new_item'              => __('Sản phẩm mới', 'lamnguyen'),
        'edit_item'             => __('Sửa sản phẩm', 'lamnguyen'),
        'view_item'             => __('Xem sản phẩm', 'lamnguyen'),
        'all_items'             => __('Tất cả sản phẩm', 'lamnguyen'),
        'search_items'          => __('Tìm sản phẩm', 'lamnguyen'),
        'parent_item_colon'     => __('Sản phẩm cha:', 'lamnguyen'),
        'not_found'             => __('Không tìm thấy sản phẩm.', 'lamnguyen'),
        'not_found_in_trash'    => __('Không có sản phẩm trong thùng rác.', 'lamnguyen'),
        'featured_image'        => __('Ảnh sản phẩm', 'lamnguyen'),
        'set_featured_image'    => __('Đặt ảnh sản phẩm', 'lamnguyen'),
        'remove_featured_image' => __('Xóa ảnh sản phẩm', 'lamnguyen'),
        'use_featured_image'    => __('Dùng làm ảnh sản phẩm', 'lamnguyen'),
        'archives'              => __('Lưu trữ sản phẩm', 'lamnguyen'),
        'insert_into_item'      => __('Chèn vào sản phẩm', 'lamnguyen'),
        'uploaded_to_this_item' => __('Tải lên cho sản phẩm này', 'lamnguyen'),
        'filter_items_list'     => __('Lọc danh sách sản phẩm', 'lamnguyen'),
        'items_list_navigation' => __('Điều hướng danh sách sản phẩm', 'lamnguyen'),
        'items_list'            => __('Danh sách sản phẩm', 'lamnguyen'),
    );

    register_post_type(
        'san-pham',
        array(
            'labels'             => $labels,
            'public'             => true,
            'has_archive'        => true,
            'rewrite'            => array('slug' => 'san-pham', 'with_front' => false),
            'menu_position'      => 20,
            'menu_icon'          => 'dashicons-products',
            'supports'           => array('title', 'editor', 'excerpt', 'thumbnail'),
            'show_in_rest'       => true,
            'show_in_nav_menus'  => true,
        )
    );
}

add_action('init', 'lamnguyen_register_san_pham_cpt');
