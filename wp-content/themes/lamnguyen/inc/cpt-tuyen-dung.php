<?php

declare(strict_types=1);

function lamnguyen_register_tuyen_dung_cpt(): void
{
    $labels = array(
        'name'                  => __('Careers', 'lamnguyen'),
        'singular_name'         => __('Career', 'lamnguyen'),
        'menu_name'             => __('Careers', 'lamnguyen'),
        'name_admin_bar'        => __('Career', 'lamnguyen'),
        'add_new'               => __('Add New', 'lamnguyen'),
        'add_new_item'          => __('Add New Career', 'lamnguyen'),
        'new_item'              => __('New Career', 'lamnguyen'),
        'edit_item'             => __('Edit Career', 'lamnguyen'),
        'view_item'             => __('View Career', 'lamnguyen'),
        'all_items'             => __('All Careers', 'lamnguyen'),
        'search_items'          => __('Search Careers', 'lamnguyen'),
        'parent_item_colon'     => __('Parent Careers:', 'lamnguyen'),
        'not_found'             => __('No roles found.', 'lamnguyen'),
        'not_found_in_trash'    => __('No roles found in Trash.', 'lamnguyen'),
        'featured_image'        => __('Role Image', 'lamnguyen'),
        'set_featured_image'    => __('Set role image', 'lamnguyen'),
        'remove_featured_image' => __('Remove role image', 'lamnguyen'),
        'use_featured_image'    => __('Use as role image', 'lamnguyen'),
        'archives'              => __('Career Archives', 'lamnguyen'),
        'insert_into_item'      => __('Insert into role', 'lamnguyen'),
        'uploaded_to_this_item' => __('Uploaded to this role', 'lamnguyen'),
        'filter_items_list'     => __('Filter roles list', 'lamnguyen'),
        'items_list_navigation' => __('Roles list navigation', 'lamnguyen'),
        'items_list'            => __('Roles list', 'lamnguyen'),
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
