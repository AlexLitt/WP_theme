<?php
 
function register_styles() {
    wp_register_style('style', get_template_directory_uri() . 
'/style.css');
    wp_enqueue_style('style'); 
 
}
 
add_action( 'wp_enqueue_scripts', 'register_styles' );

/*
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method() {
	// отменяем зарегистрированный jQuery
	wp_deregister_script('jquery-core');
	wp_deregister_script('jquery');

	// регистрируем
	wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, true );
	wp_register_script( 'jquery', false, array('jquery-core'), null, true );

	// подключаем
	wp_enqueue_script( 'jquery' );
}  
*/



function load_my_script() {
  /*wp_enqueue_script('newscript', get_template_directory_uri() . '/js/script.js'); */
  wp_deregister_script('jquery');
  wp_register_script('jquery',get_template_directory_uri(). '/js/jquery.js');
  wp_enqueue_style('jquery');

  wp_register_script('js', get_template_directory_uri().'/js/script.js');
  wp_enqueue_style('script.js');
}

add_action( 'wp_enqueue_scripts', 'load_my_script' );

