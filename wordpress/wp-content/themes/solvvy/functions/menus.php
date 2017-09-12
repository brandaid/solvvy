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

?>