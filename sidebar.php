<?php
/*
* Archivo de sidebar del sitio
*
*
*
*
* @package Parco
* @subpackage Parco
* @since 1.0
*/
?>

<aside class="sidebar">
    
    <?php 

        if( is_active_sidebar('main-sidebar') ){

            dynamic_sidebar('main-sidebar');

        } 

     ?>

</aside>