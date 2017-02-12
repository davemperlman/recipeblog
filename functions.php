<?php 

function load_css_files() {
	wp_register_style('template_default', get_template_directory_uri() . '/style.css');
	wp_register_style('mainstyle', get_template_directory_uri() . '/_css/mainstyle.css');
	wp_enqueue_style('template_default', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('mainstyle', get_template_directory_uri() . '/css/mainstyle.css');
}

// function create_post_type() {
// 	register_post_type('recipe',
// 		array(
// 			'labels' => array(
// 				'name' => __('Recipes'),
// 				'singular_name' => __('Recipe')
// 				),
// 			'public' => true,
// 			'has_archive' => true,
// 			)
// 		);
// }

// add_action('init', 'create_post_type');

add_action( 'wp_enqueue_scripts', 'load_css_files' );