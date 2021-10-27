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


if ( ! function_exists( 'getaway_qodef_whatsapp_button' ) ) {
	/**
	 * Function that outputs back to top button html if back to top functionality is turned on
	 * Hooked to getaway_qodef_after_header_area action
	 */
	function getaway_qodef_whatsapp_button() {
		if ( getaway_qodef_options()->getOptionValue( 'show_back_button' ) == 'yes' ) { ?>
            <a id='fixed-whatsapp' href='https://web.whatsapp.com/send?phone=919205312142&text=Hi!' target="_blank">
            	<img src="<?php echo get_stylesheet_directory_uri(). '/assets/whatsapp.png' ?>">
            </a>
		<?php }
	}

	add_action( 'getaway_qodef_after_header_area', 'getaway_qodef_whatsapp_button', 10 );
}

if ( ! function_exists( 'getaway_qodef_call_button' ) ) {
	/**
	 * Function that outputs back to top button html if back to top functionality is turned on
	 * Hooked to getaway_qodef_after_header_area action
	 */
	function getaway_qodef_call_button() {
		if ( getaway_qodef_options()->getOptionValue( 'show_back_button' ) == 'yes' ) { ?>
            <a id='fixed-call' onclick="this.nextElementSibling.classList.add('open')">
                <span class="qodef-icon-stack">
					<i class="qodef-icon-font-awesome fa <?php echo getaway_qodef_icon_collections()->iconCollections['font_awesome']->icons['fa-comments']; ?> "></i>
					<i class="qodef-icon-font-awesome fa <?php echo getaway_qodef_icon_collections()->iconCollections['font_awesome']->icons['fa-question']; ?> "></i>
                </span>
            </a>
            <div class="fixed-enquire-now">
            	<?php dynamic_sidebar( 'enquire_now' ); ?>
            	<span class="close" onclick="this.parentElement.classList.remove('open')">
            		<i class="fa fa-times qodef-icon-font-awesome"></i>
            	</span>
            </div>
		<?php }
	}

	add_action( 'getaway_qodef_after_header_area', 'getaway_qodef_call_button', 10 );
}

function register_enquire_now_widget(){
	register_sidebar(
		array(
			'id'            => 'enquire_now',
			'name'          => esc_html__( 'Enquire Now', 'getaway' ),
			'description'   => esc_html__( 'Widgets added here will appear when you click the call icon', 'getaway' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => ''
		)
	);	
}

add_action( 'widgets_init', 'register_enquire_now_widget' );
