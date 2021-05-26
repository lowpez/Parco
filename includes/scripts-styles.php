<?php
/*
* Archivo de registro y carga de scripts y estilos
*
*
*
*
* @package Parco
* @subpackage Parco
* @since 1.0
*/

/*
* Registrando y cargando estilos
*/

function parco_theme_styles(){


	// Registrar los estilos
	wp_register_style('fontawesome', THEMEROOT . '/css/fontawesome.css', '', '5.1.1', 'all');
	wp_register_style('parco-styles', get_stylesheet_uri(), array('fontawesome'), '1.0', 'all');

	// Cargar estilos
	wp_enqueue_style('parco-styles');

	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Righteous:ital,wght@0,300;0,400;0,700;1,400&family=Quicksand:ital,wght@0,300;0,400;0,700;1,400&display=swap', array('parco-styles'), null ); 


}
add_action('wp_enqueue_scripts', 'parco_theme_styles');


/*
* Registrando y cargando scripts
*/

function parco_theme_scripts(){

	// Registrar scripts
	wp_register_script('modernizr', THEMEROOT . '/js/modernizr.js', array('jquery'), '1.5.0', false);
	wp_register_script('parallax', THEMEROOT . '/js/parallax.min.js', array('jquery'), '1.5.0', true);
	wp_register_script('fitvids', THEMEROOT . '/js/jquery.fitvids.js', array('jquery'), '1.0', true);
	wp_register_script('imagesloaded', THEMEROOT . '/js/jquery.imagesloaded.min.js', array('jquery'), '4.1.4', true);
	wp_register_script('parco-scripts', THEMEROOT . '/js/main.js', array('jquery', 'parallax'), '1.0', true);


	// Cargar scripts
	wp_enqueue_script('modernizr');
	wp_enqueue_script('fitvids');
	wp_enqueue_script('imagesloaded');
	wp_enqueue_script('parco-scripts');


}
add_action('wp_enqueue_scripts', 'parco_theme_scripts');