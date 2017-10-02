<?php 

// Menu
function register_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'main-menu' => __( 'Main Menu' ),
            'fisrt-menu-footer' => __( 'First Menu Footer' ),
            'second-menu-footer' => __( 'Second Menu Footer' ),
            'third-menu-footer' => __( 'Third Menu Footer' ),
            'fourth-menu-footer' => __( 'Fourth Menu Footer' ),
            'fifth-menu-footer' => __( 'Fifth Menu Footer' ),
      		'terms-menu' => __( 'Terms and Privacy Menu' )
        )
    );
}
add_action( 'init', 'register_menus' );


//MENU TOP IN MOBILE
function add_menu_clone($items, $args){
    if( $args->theme_location == 'main-menu' ){
        $items .= '<li class="top-menu"><div class="menu-top-clone"></div></li>';
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_menu_clone', 10, 2);

//SEARCH FORM
function add_search_box( $items, $args ) {
	if ($args->theme_location == 'main-menu') {
		$items .= '<li class="search">' . get_search_form( false ) . '</li>';
		return $items;
	}
	return $items;
}
add_filter( 'wp_nav_menu_items','add_search_box', 10, 2 );

?>