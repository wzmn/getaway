<?php

/*** Child Theme Function  ***/
if( ! function_exists('getaway_qodef_child_theme_enqueue_scripts')) {
	function getaway_qodef_child_theme_enqueue_scripts() {
		
		$parent_style = 'getaway_qodef_default_style';
		
		wp_enqueue_style('getaway_qodef_child_style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
	}

	add_action( 'wp_enqueue_scripts', 'getaway_qodef_child_theme_enqueue_scripts' );
}
