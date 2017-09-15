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


function create_post_type() {
  register_post_type( 'Resources',
    array(
      'labels' => array(
        'name' => __( 'Resources' ),
        'singular_name' => __( 'Resource' ),
        'all_items' => __( 'All Resources' )
      ),
      'taxonomies' => array( 'resource-types'),
      'menu_icon' => 'dashicons-book-alt',
      'menu_position' => 4,
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail')
    )
  );
}
add_action( 'init', 'create_post_type' );


add_action( 'admin_head', 'replace_default_featured_image_meta_box', 100 );
function replace_default_featured_image_meta_box() {
    remove_meta_box( 'postimagediv', 'Resources', 'side' );
    add_meta_box('postimagediv', __('Card Image'), 'post_thumbnail_meta_box', 'Resources', 'side');
}

add_action( 'init', 'create_resources_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_resources_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Resource types', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Resource type', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Types', 'textdomain' ),
        'all_items'         => __( 'All Types', 'textdomain' ),
        'parent_item'       => __( 'Parent Type', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Type:', 'textdomain' ),
        'edit_item'         => __( 'Edit Type', 'textdomain' ),
        'update_item'       => __( 'Update Type', 'textdomain' ),
        'add_new_item'      => __( 'Add New Resource Type', 'textdomain' ),
        'new_item_name'     => __( 'New Resource Type Name', 'textdomain' ),
        'menu_name'         => __( 'Resource Type', 'textdomain' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'resource-types' ),
    );

    register_taxonomy( 'resource-types', array( 'Resources' ), $args );
}

?>
