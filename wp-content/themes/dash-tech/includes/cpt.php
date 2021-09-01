<?php
function register_custom_post_types() {
    $labels = array(
        'name' => 'Reg Insights',
        'singular_name' => 'Reg Insight',
        'add_new' => 'Add Reg Insight',
        'add_new_item' => 'Add Reg Insight',
        'edit_item' => 'Edit Reg Insight',
        'new_item' => 'New Reg Insight',
        'all_items' => 'All Reg Insights',
        'menu_name' => 'Reg Insights'
    );
    $args = array(
        'labels' => $labels,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'menu_icon' => 'dashicons-megaphone',
        'menu_position' => 5,
        'has_archive' => true,
        'supports' => array( 'title', 'thumbnail', 'excerpt', 'editor' )
    );
    register_post_type('reg_insights', $args);

    $labels = array(
        'name' => 'Team',
        'singular_name' => 'Team',
        'add_new' => 'Add new teammate',
        'add_new_item' => 'Add teammate',
        'edit_item' => 'Edit teammate',
        'new_item' => 'New teammate',
        'all_items' => 'All teammates',
        'menu_name' => 'Team'
    );
    $args = array(
        'labels' => $labels,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'menu_icon' => 'dashicons-admin-users',
        'menu_position' => 6,
        'has_archive' => true,
        'supports' => array( 'title', 'thumbnail', 'editor' )
    );
    register_post_type('team', $args);
}
add_action( 'init', 'register_custom_post_types' );
