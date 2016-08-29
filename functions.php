<?php
functions simple_theme_setup(){
	//featured image support
	add_theme_support('post-thumnails');
}

add_action('after_setup_theme', 'simple_theme_setup');