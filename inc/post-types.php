<?php
/*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Events', 'Post Type General Name', 'primland' ),
        'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'primland' ),
        'menu_name'           => __( 'Events', 'primland' ),
        'parent_item_colon'   => __( 'Parent Event', 'primland' ),
        'all_items'           => __( 'All Events', 'primland' ),
        'view_item'           => __( 'View Event', 'primland' ),
        'add_new_item'        => __( 'Add New Event', 'primland' ),
        'add_new'             => __( 'Add New', 'primland' ),
        'edit_item'           => __( 'Edit Event', 'primland' ),
        'update_item'         => __( 'Update Event', 'primland' ),
        'search_items'        => __( 'Search Event', 'primland' ),
        'not_found'           => __( 'Not Found', 'primland' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'primland' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'events', 'primland' ),
        'description'         => __( 'Primland Events', 'primland' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'categories' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-calendar-alt'
    );
     
    // Registering your Custom Post Type
    register_post_type( 'events', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );