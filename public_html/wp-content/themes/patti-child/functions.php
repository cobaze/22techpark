<?php
add_action(  'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_register_style( 'parent-style', get_template_directory_uri() . 'css/style.css');
	wp_register_style( 'child-style',
		get_stylesheet_directory_uri() . 'css/style.css',
		array('parent-style')
	);
	wp_enqueue_style( 'child-style' );
}

?>