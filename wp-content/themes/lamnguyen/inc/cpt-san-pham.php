<?php

declare(strict_types=1);

function lamnguyen_register_san_pham_cpt(): void
{
    $labels = array(
        'name'                  => __('Products', 'lamnguyen'),
        'singular_name'         => __('Product', 'lamnguyen'),
        'menu_name'             => __('Products', 'lamnguyen'),
        'name_admin_bar'        => __('Product', 'lamnguyen'),
        'add_new'               => __('Add New', 'lamnguyen'),
        'add_new_item'          => __('Add New Product', 'lamnguyen'),
        'new_item'              => __('New Product', 'lamnguyen'),
        'edit_item'             => __('Edit Product', 'lamnguyen'),
        'view_item'             => __('View Product', 'lamnguyen'),
        'all_items'             => __('All Products', 'lamnguyen'),
        'search_items'          => __('Search Products', 'lamnguyen'),
        'parent_item_colon'     => __('Parent Products:', 'lamnguyen'),
        'not_found'             => __('No products found.', 'lamnguyen'),
        'not_found_in_trash'    => __('No products found in Trash.', 'lamnguyen'),
        'featured_image'        => __('Product Image', 'lamnguyen'),
        'set_featured_image'    => __('Set product image', 'lamnguyen'),
        'remove_featured_image' => __('Remove product image', 'lamnguyen'),
        'use_featured_image'    => __('Use as product image', 'lamnguyen'),
        'archives'              => __('Product Archives', 'lamnguyen'),
        'insert_into_item'      => __('Insert into product', 'lamnguyen'),
        'uploaded_to_this_item' => __('Uploaded to this product', 'lamnguyen'),
        'filter_items_list'     => __('Filter products list', 'lamnguyen'),
        'items_list_navigation' => __('Products list navigation', 'lamnguyen'),
        'items_list'            => __('Products list', 'lamnguyen'),
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
