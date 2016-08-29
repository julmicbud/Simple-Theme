<?php
functions simple_theme_setup(){
	//featured image support
	add_theme_support('post-thumnails');
	
	// Menus
	register_nav_menus(array(
		'primary' =>__('Primary Menu')
		));
}

add_action('after_setup_theme', 'simple_theme_setup');

//Excerpt Length
function set_excerpt_length(){
	return 60;
}

add_filter('excerpt_length', 'set_excerpt_length');

