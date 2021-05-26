<?php
/*
* Registro de sidebars
*
*
*
*
* @package Parco
* @subpackage Parco
* @since 1.0
*/

function parco_sidebars(){

	register_sidebar(array(

	'name'          => __( 'Barra lateral', 'parco' ),
	'id'            => 'main-sidebar',
	'description'   => __( 'Widgets en la barra lateral', 'parco' ),
    'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>'

	));

	register_sidebar(array(

	'name'          => __( 'Pie de página zona izquierda', 'parco' ),
	'id'            => 'sidebar-footer-izq',
	'description'   => '',
    'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>'

	));

	register_sidebar(array(

	'name'          => __( 'Pie de página zona central', 'parco' ),
	'id'            => 'sidebar-footer-cent',
	'description'   => '',
    'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>'

	));

	register_sidebar(array(

	'name'          => __( 'Pie de página zona derecha', 'parco' ),
	'id'            => 'sidebar-footer-der',
	'description'   => '',
    'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>'

	));

}
add_action('widgets_init', 'parco_sidebars');