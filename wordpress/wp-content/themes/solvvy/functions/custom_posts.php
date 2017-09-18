<?php

//EVENTS

add_action( 'init', 'my_custom_init' );

function my_custom_init() {
    $labels = array(
    'name' => _x( 'Events', 'post type general name' ),
        'singular_name' => _x( 'Event', 'post type singular name' ),
        'add_new' => _x( 'Add new', 'fellowship' ),
        'add_new_item' => __( 'Add new' ),
        'edit_item' => __( 'Edit event' ),
        'new_item' => __( 'New event' ),
        'view_item' => __( 'See event' ),
        'search_items' => __( 'Search event' ),
        'not_found' =>  __( 'Not found events' ),
        'not_found_in_trash' => __( 'Not found events in trash' ),
        'parent_item_colon' => ''
    );

    
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'has_archive' => 'custom_post_type',
        'supports' => array( 'title', 'editor','thumbnail' )
    );

    register_post_type( 'event', $args ); 

}

add_action( 'init', 'create_book_taxonomies_listas', 0 );

function create_book_taxonomies_listas() {
    $labels = array(
        'name' => _x( 'Categories events', 'taxonomy general name' ),
        'singular_name' => _x( 'Category', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search for category' ),
        'all_items' => __( 'All categories' ),
        'parent_item' => __( 'Parent category' ),
        'parent_item_colon' => __( 'Parent category:' ),
        'edit_item' => __( 'Edit category' ),
        'update_item' => __( 'Update category' ),
        'add_new_item' => __( 'Add new category' ),
        'new_item_name' => __( 'Name of the new category' ),
    );
    register_taxonomy( 'category-events', array( 'event' ), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'category-events' ),
    ));
}


//NEWSLETTER

add_action( 'init', 'my_custom_init_newsletter' );

function my_custom_init_newsletter() {
    $labels = array(
    'name' => _x( 'Newsletters', 'post type general name' ),
        'singular_name' => _x( 'Newsletter', 'post type singular name' ),
        'add_new' => _x( 'Add new', 'fellowship' ),
        'add_new_item' => __( 'Add new' ),
        'edit_item' => __( 'Edit newsletter' ),
        'new_item' => __( 'New newsletter' ),
        'view_item' => __( 'See newsletter' ),
        'search_items' => __( 'Search newsletter' ),
        'not_found' =>  __( 'Not found events' ),
        'not_found_in_trash' => __( 'Not found newsletters in trash' ),
        'parent_item_colon' => ''
    );

    
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'has_archive' => 'custom_post_type',
        'supports' => array( 'title', 'editor','thumbnail' )
    );

    register_post_type( 'newsletter', $args ); 

}

add_action( 'init', 'create_newsletter_taxonomies', 0 );

function create_newsletter_taxonomies() {
    $labels = array(
        'name' => _x( 'Categories newsletters', 'taxonomy general name' ),
        'singular_name' => _x( 'Category', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search for category' ),
        'all_items' => __( 'All categories' ),
        'parent_item' => __( 'Parent category' ),
        'parent_item_colon' => __( 'Parent category:' ),
        'edit_item' => __( 'Edit category' ),
        'update_item' => __( 'Update category' ),
        'add_new_item' => __( 'Add new category' ),
        'new_item_name' => __( 'Name of the new category' ),
    );
    register_taxonomy( 'category-newsletters', array( 'newsletter' ), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'category-newsletters' ),
    ));
}



?>
