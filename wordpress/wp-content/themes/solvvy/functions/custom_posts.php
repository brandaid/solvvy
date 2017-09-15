<?php

//CATALOGOS

// La función no será utilizada antes del 'init'.
add_action( 'init', 'my_custom_init' );
/* Here's how to create your customized labels */
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

    // Creamos un array para $args
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

    register_post_type( 'event', $args ); /* Registramos y a funcionar */

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

?>
