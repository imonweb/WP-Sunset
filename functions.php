<?php 

require get_template_directory() . '/inc/function-admin.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/theme-support.php';

/**
 * Proper way to enqueue scripts and styles
 */
function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_template_directory() . '/admin-custom.css', array(), '1.0.0', true );
	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

//if you want to see on your screen
// print_r( filemtime( get_template_directory() . '/style.css' ) );
// echo get_template_directory() . '/admin-custom.css';
/*
function custom_theme_support() {
  add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
}
add_action('after_setup_theme', 'custom_theme_support');
 */
// function my_admin_theme_style() {
//     wp_enqueue_style('my-admin-style', get_template_directory_uri() . '/css/sunset.admin.css');
// }
// add_action('admin_head', 'my_admin_theme_style');

// Enqueues style.css on the front.
// if ( ! function_exists( 'twentytwentyfive_enqueue_styles' ) ) :
// 	function sunset_admin_script() {
// 		wp_enqueue_style(
// 			'twentytwentyfive-style',
// 			get_parent_theme_file_uri( '/css/sunset.admin.css' ),
// 			array(),
// 			wp_get_theme()->get( 'Version' )
// 		);
// 	}
// endif;
// add_action( 'wp_enqueue_scripts', 'sunset_admin_script' );