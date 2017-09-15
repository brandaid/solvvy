<?php 


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