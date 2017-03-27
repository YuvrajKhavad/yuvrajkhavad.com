<?php
/**
 * @package Author Child Theme
 */

/**
 * Load the parent and child theme styles
 */
function author_parent_theme_style() {

	// Parent theme styles
	wp_enqueue_style( 'author-style', get_template_directory_uri(). '/style.css' );

	// Child theme styles
	wp_enqueue_style( 'author-child-style', get_stylesheet_directory_uri(). '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'author_parent_theme_style' );