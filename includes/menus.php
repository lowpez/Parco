<?php
/*
* Registrando zonas de menu
*
*
*
*
* @package Parco
* @subpackage Parco Hotel
* @since 1.0
*/

function parco_menus(){

	register_nav_menus(array(

		'main-menu' => __('Menu principal en encabezado', 'parco')

	));

}
add_action('init', 'parco_menus');