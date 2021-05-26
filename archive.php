<?php
/*
Template Name: Archivo
https://codex.wordpress.org/Creating_an_Archive_Index
*/
get_header(); ?>
<main class="site-content">
 
	<header>
		<?php the_post(); ?>
		<h1 class="entry-title">Archivo</h1>
	</header>	
		<?php get_search_form(); ?>

		<?php the_content(); ?>
		
		<h2>Archivos por Mes:</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
		
		<h2>Archivos por temas:</h2>
		<ul>
			 <?php wp_list_categories(); ?>
		</ul>



</main>
<?php get_footer(); ?>