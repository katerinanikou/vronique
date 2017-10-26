<?php
	
  /* Function for menu*/
	function testmiljo_setup() {
	
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus( array(
		'primary' => __('header navigation menu')
	
	));
}
add_action('after_setup_theme', 'testmiljo_setup');



// Register Custom Post Type
function create_post_type() {
  register_post_type( 'work',
    array(
      'labels' => array(
        'name' => __( 'selected work' ),
        'singular_name' => __( 'selected work' )
      ),
      'public' => true,
      'has_archive' => false,
    )
  );
}
add_action( 'init', 'create_post_type' );

?>