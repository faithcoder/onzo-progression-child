<?php

function create_robot_diaries_cpt() {
    $labels = [
        'name'               => _x('Robot Diaries', 'Post Type General Name', 'textdomain'),
        'singular_name'      => _x('Robot Diary', 'Post Type Singular Name', 'textdomain'),
        'menu_name'          => __('Robot Diaries', 'textdomain'),
        'all_items'          => __('All Robot Diaries', 'textdomain'),
        'add_new_item'       => __('Add New Robot Diary', 'textdomain'),
        'edit_item'          => __('Edit Robot Diary', 'textdomain'),
        'new_item'           => __('New Robot Diary', 'textdomain'),
        'view_item'          => __('View Robot Diary', 'textdomain'),
        'search_items'       => __('Search Robot Diaries', 'textdomain'),
        'not_found'          => __('No Robot Diaries found', 'textdomain'),
        'not_found_in_trash' => __('No Robot Diaries found in Trash', 'textdomain'),
    ];

    $args = [
        'label'               => __('Robot Diaries', 'textdomain'),
        'description'         => __('A custom post type for Robot Diaries', 'textdomain'),
        'labels'              => $labels,
        'supports'            => ['title', 'editor', 'thumbnail', 'excerpt', 'comments'],
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-edit-page', 
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true, 
    ];

    register_post_type('robot_diaries', $args);
}


function create_robot_categories_taxonomy() {
    $labels = [
        'name'              => _x('Robot Categories', 'taxonomy general name', 'textdomain'),
        'singular_name'     => _x('Robot Category', 'taxonomy singular name', 'textdomain'),
        'search_items'      => __('Search Robot Categories', 'textdomain'),
        'all_items'         => __('All Robot Categories', 'textdomain'),
        'parent_item'       => __('Parent Robot Category', 'textdomain'),
        'parent_item_colon' => __('Parent Robot Category:', 'textdomain'),
        'edit_item'         => __('Edit Robot Category', 'textdomain'),
        'update_item'       => __('Update Robot Category', 'textdomain'),
        'add_new_item'      => __('Add New Robot Category', 'textdomain'),
        'new_item_name'     => __('New Robot Category Name', 'textdomain'),
        'menu_name'         => __('Robot Categories', 'textdomain'),
    ];

    $args = [
        'labels'            => $labels,
        'hierarchical'      => true, 
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud'     => true,
        'show_in_rest'      => true, 
    ];

    register_taxonomy('robot_categories', ['robot_diaries'], $args);
}

// Hook into WordPress
add_action('init', 'create_robot_diaries_cpt', 0);
add_action('init', 'create_robot_categories_taxonomy', 0);
