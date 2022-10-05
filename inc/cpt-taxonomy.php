<?php

function dl_register_custom_post_types() {

        // Register Works

        $labels = array(

            'name'               => _x( 'Works', 'post type general name' ),

            'singular_name'      => _x( 'Work', 'post type singular name'),

            'menu_name'          => _x( 'Works', 'admin menu' ),

            'name_admin_bar'     => _x( 'Work', 'add new on admin bar' ),

            'add_new'            => _x( 'Add New', 'work' ),

            'add_new_item'       => __( 'Add New Work' ),

            'new_item'           => __( 'New Work' ),

            'edit_item'          => __( 'Edit Work' ),

            'view_item'          => __( 'View Work' ),

            'all_items'          => __( 'All Works' ),

            'search_items'       => __( 'Search Works' ),

            'parent_item_colon'  => __( 'Parent Works:' ),

            'not_found'          => __( 'No works found.' ),

            'not_found_in_trash' => __( 'No works found in Trash.' ),

            'archives'           => __( 'Work Archives'),

            'insert_into_item'   => __( 'Insert into work'),

            'uploaded_to_this_item' => __( 'Uploaded to this work'),

            'filter_item_list'   => __( 'Filter works list'),

            'items_list_navigation' => __( 'Works list navigation'),

            'items_list'         => __( 'Works list'),

            'featured_image'     => __( 'Work featured image'),

            'set_featured_image' => __( 'Set work featured image'),

            'remove_featured_image' => __( 'Remove work featured image'),

            'use_featured_image' => __( 'Use as featured image'),

        );

        

        $args = array(

            'labels'             => $labels,

            'public'             => true,

            'publicly_queryable' => true,

            'show_ui'            => true,

            'show_in_menu'       => true,

            'show_in_nav_menus'  => true,

            'show_in_admin_bar'  => true,

            'show_in_rest'       => true,

            'query_var'          => true,

            'rewrite'            => array( 'slug' => 'works' ),

            'capability_type'    => 'post',

            'has_archive'        => true,

            'hierarchical'       => false,

            'menu_position'      => 5,

            'menu_icon'          => 'dashicons-archive',

            'supports'           => array( 'title', 'thumbnail', 'editor' ),

            // Prevent moving, inserting, deleting blocks

            'template_lock' => 'all'

        );        



    register_post_type( 'dl-works', $args );



        

    $labels = array(

        'name'               => _x( 'Gallery', 'post type general name' ),

        'singular_name'      => _x( 'Gallery', 'post type singular name'),

        'menu_name'          => _x( 'Gallery', 'admin menu' ),

        'name_admin_bar'     => _x( 'Gallery', 'add new on admin bar' ),

        'add_new'            => _x( 'Add New', 'Gallery' ),

        'add_new_item'       => __( 'Add New Gallery' ),

        'new_item'           => __( 'New Gallery' ),

        'edit_item'          => __( 'Edit Gallery' ),

        'view_item'          => __( 'View Gallery' ),

        'all_items'          => __( 'All Gallery' ),

        'search_items'       => __( 'Search Gallery' ),

        'parent_item_colon'  => __( 'Parent Gallery:' ),

        'not_found'          => __( 'No works found.' ),

        'not_found_in_trash' => __( 'No works found in Trash.' ),

        'archives'           => __( 'Gallery Archives'),

        'insert_into_item'   => __( 'Insert into gallery'),

        'uploaded_to_this_item' => __( 'Uploaded to this gallery'),

        'filter_item_list'   => __( 'Filter gallery list'),

        'items_list_navigation' => __( 'gallery list navigation'),

        'items_list'         => __( 'gallery list'),

        'featured_image'     => __( 'Gallery featured image'),

        'set_featured_image' => __( 'Set Gallery featured image'),

        'remove_featured_image' => __( 'Remove gallery featured image'),

        'use_featured_image' => __( 'Use as featured image'),

    );



    $args = array(

        'labels'             => $labels,

        'public'             => true,

        'publicly_queryable' => true,

        'show_ui'            => true,

        'show_in_menu'       => true,

        'show_in_nav_menus'  => true,

        'show_in_admin_bar'  => true,

        'show_in_rest'       => true,

        'query_var'          => true,

        'rewrite'            => array( 'slug' => 'single-gallery' ),

        'capability_type'    => 'post',

        'has_archive'        => true,

        'hierarchical'       => false,

        'menu_position'      => 5,

        'menu_icon'          => 'dashicons-admin-links',

        'supports'           => array( 'title', 'editor')

    );



    register_post_type( 'dl-gallery', $args );



}

add_action( 'init', 'dl_register_custom_post_types' );


function dl_rewrite_flush() {
    dl_register_custom_post_types();
    flush_rewrite_rules();

}

add_action( 'after_switch_theme', 'dl_rewrite_flush' );

