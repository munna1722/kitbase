<?php

function kitbase_service_cpt() {
    $labels = array(
        'name'                  => __('Services', 'kitbase' ),
        'singular_name'         =>__('service', 'kitbase'),
        'add_new'               =>__('Add New', 'kitbase'),
        'add_new_item'          =>__('Add New Services', 'kitbase'),
        'edit_item'             =>__('Edit Service', 'kitbase'),
        'view_item'             =>__('View Services', 'kitbase'),
        'all_items'             =>__('All Services', 'kitbase'),
        'featured_image'        =>__('Service Image', 'kitbase'),
        'set_featured_image'    => __('Set service image', 'kitbase'),
        'remove_featured_image' => __('Remove service image', 'kitbase'),
        'use_featured_image'    => __(' service image', 'kitbase'),
        'search_items'          =>__('Search_Services', 'kitbase'),
        'not_found'             =>__('No Services.', 'kitbase'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'rewrite'            => array('slug', 'services'),
        'capability_type'    => 'post', 
        'has_archive'        => true,
        'hieracechical'      => false,
        'menu_icon'          => 'dashicons-admin-tools',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),   
    );
    register_post_type( 'services', $args );
}

add_action( 'init', 'kitbase_service_cpt' );

?>