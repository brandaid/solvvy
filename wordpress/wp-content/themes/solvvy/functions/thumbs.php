<?php 

add_theme_support('post-thumbnails');

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'brand', 600, 600, false );
	add_image_size( 'client_logo', 200, 40, false );
	add_image_size( 'case_study_logo', 200, 80, false );
	add_image_size( 'redirects_logo', 160, 80, false );
    add_image_size( 'featured', 1500, 500, true );
    add_image_size( 'inner-post', 730, 300, true );
    add_image_size( 'slider_profile', 297, 447, true );
    add_image_size( 'slider_team', 620, 646, true );
    add_image_size( 'case_study', 275, 358, true );
    add_image_size( 'join_us_section', 360, 273, true );
}

add_filter( 'image_size_names_choose', 'my_custom_sizes' );

function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
		'brand' => __('Brand Logo'),
		'client_logo' => __('Client Logo'),
		'case_study_logo' => __('Case Study Logo'),
		'redirects_logo' => __('Redirects Logo'),
	    'featured' => __('Featured'),
	    'inner-post' => __('Inner Post'),
	    'slider_profile' => __('Slider Profile'),
	    'slider_team' => __('Slider Team'),
	    'case_study' => __('Case of Study'),
	    'join_us_section' => __('Section Join')
	) );
}


// img unautop
function img_unautop($pee) {
    $pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '<div class="figure">$1</div>', $pee);
    return $pee;
}
add_filter( 'the_content', 'img_unautop', 30 );

?>