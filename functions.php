<?php 

function load_css_files() {
	wp_register_style('template_default', get_template_directory_uri() . '/style.css');
	wp_register_style('mainstyle', get_template_directory_uri() . '/_css/mainstyle.css');
	wp_enqueue_style('template_default', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('mainstyle', get_template_directory_uri() . '/css/mainstyle.css');
}

add_action( 'wp_enqueue_scripts', 'load_css_files' );


function add_last_nav_item($items) {
  return $items .= "<li><button id='close-menu'>Close</button></li>";
}
add_filter('wp_nav_menu_items','add_last_nav_item');

// add_action( 'init', 'create_post_type' );
// function create_post_type() {
//   register_post_type( 'recipe',
//     array(
//       'labels' => array(
//         'name' => __( 'Recipes' ),
//         'singular_name' => __( 'Recipe' )
//       ),
//       'public' => true,
//       'has_archive' => true,
//     )
//   );
// }

add_theme_support('post-thumbnails');

function create_my_post_type() {
	$labels = array(
		'name'			=> 'Recipes',
		'singular_name'	=> 'Recipe',
		'add_new'		=> 'Add New',
		'edit_item'		=> 'Edit'
		);
	$args = array(
		'labels'		=> $labels,
		'description'	=> 'Post type for Recipes',
		'public'		=> true,
		'menu_position'	=> 4,
		'supports'		=> array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments'),
		'has_archive'	=> true
		);
	register_post_type('Recipe', $args);
}
add_action('init', 'create_my_post_type');

