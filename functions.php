<?php

/*** Child Theme Function  ***/
if( ! function_exists('getaway_qodef_child_theme_enqueue_scripts')) {
	function getaway_qodef_child_theme_enqueue_scripts() {
		
		$parent_style = 'getaway_qodef_default_style';
		
		wp_enqueue_style('getaway_qodef_child_style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
	}

	add_action( 'wp_enqueue_scripts', 'getaway_qodef_child_theme_enqueue_scripts' );
}



function enqueue_function_scripts() {
	wp_enqueue_script( 'function_scripts', get_stylesheet_directory_uri() . 'functions.js', array('jquery'), null, true );
    wp_localize_script( 'function_scripts', 'theme',
        array( 
            'theme_dir' => get_stylesheet_directory_uri() . "/",
        )
    );
}
add_action( 'wp_enqueue_scripts', 'enqueue_function_scripts' );
