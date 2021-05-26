<?php
/*
* Añadiendo opciones al personalizador del tema
*
*
*
*
* @package Parco
* @subpackage Parco
* @since 1.0
*/

function parco_customize_register($wp_customize){

	// Panel Encabezado
	$wp_customize->add_panel('parco_header_panel', array(

		'title' => __('Opciones de Cabecera', 'parco'),
		'description' => __('Opciones del encabezado', 'parco'),
		'priority' => 35

	));

	// Seccion encabezado superior
	$wp_customize->add_section('parco_header_top', array(

		'title' => __('Redes Sociales y Texto en Blog', 'parco'),
		'description' => __('Opciones del encabezado superior', 'parco'),
		'priority' => 10,
		'panel' => 'parco_header_panel'

	));


	// Enlace Facebook
	$wp_customize->add_setting('parco_settings[top_header_facebook_link]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('top_header_facebook_link', array(
		'label' => __('Enlace de facebook', 'parco'),
		'section' => 'parco_header_top',
		'settings' => 'parco_settings[top_header_facebook_link]'
	));


	// Enlace Twitter
	$wp_customize->add_setting('parco_settings[top_header_twitter_link]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('top_header_twitter_link', array(
		'label' => __('Enlace de twitter', 'parco'),
		'section' => 'parco_header_top',
		'settings' => 'parco_settings[top_header_twitter_link]'
	));



	// Enlace Instagram
	$wp_customize->add_setting('parco_settings[top_header_instagram_link]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('top_header_instagram_link', array(
		'label' => __('Enlace de instagram', 'parco'),
		'section' => 'parco_header_top',
		'settings' => 'parco_settings[top_header_instagram_link]'
	));


	// Texto Personalizado para Blog
	$wp_customize->add_setting('parco_settings[blog_header_text]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('blog_header_text', array(
		'label' => __('Cabecera del Blog', 'parco'),
		'description' => __('Texto en la Cabecera del Blog. <br />Soporta HTML.', 'parco'),
		'section' => 'parco_header_top',
		'settings' => 'parco_settings[blog_header_text]',
		'type'     => 'textarea'
	));



	// Seccion Info de Contacto Personal
    $wp_customize->add_section( 'parco_menu_section', array(
        'title'    => esc_html__( 'Info de Contacto Personal', 'parco' ),
        'panel'    => 'parco_header_panel',
        'priority' => 15
    ) );


    // E-mail
	$wp_customize->add_setting('parco_info_settings[mail_address]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('mail_address', array(
		'label' => __('Dirección de Correo', 'parco'),
		'section' => 'parco_menu_section',
		'settings' => 'parco_info_settings[mail_address]'
	));
	

    // Telefono
	$wp_customize->add_setting('parco_info_settings[phone_address]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('phone_address', array(
		'label' => __('Telefono', 'parco'),
		'description' => __('Formato: +56 9 12345678', 'parco'),
		'section' => 'parco_menu_section',
		'settings' => 'parco_info_settings[phone_address]'
	));



	// Seccion encabezado normal : Logo y otros
	$wp_customize->add_section('parco_header', array(

		'title' => __('Logo y otros', 'parco'),
		'description' => __('Opciones del encabezado normal', 'parco'),
		'priority' => 20,
		'panel' => 'parco_header_panel'

	));


	// Logo
	$wp_customize->add_setting('parco_settings[logo]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
		'label' => esc_html__( 'Sube tu Logo', 'parco'),
		'description' => __('PNG / WebP + 250px x 150px', 'parco'),
		'section' => 'parco_header',
		'settings' => 'parco_settings[logo]'
	)));


	// Panel Pagina de inicio
	$wp_customize->add_panel('parco_homepage', array(

		'title' => __('Pagina de inicio', 'parco'),
		'description' => __('Opciones de la página de inicio', 'parco'),
		'priority' => 41

	));

	// Seccion proyectos
	$wp_customize->add_section('parco_home_projects', array(

		'title' => __('Mostrar Proyectos', 'parco'),
		'description' => __('Opciones de sección de proyectos', 'parco'),
		'priority' => 10,
		'panel' => 'parco_homepage'

	));

	// Mostrar seccion proyectos
	$wp_customize->add_setting('parco_settings[show_projects_section]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('show_projects_section', array(
		'label' => __('Mostrar sección de Proyectos', 'parco'),
		'section' => 'parco_home_projects',
		'settings' => 'parco_settings[show_projects_section]',
		'type' => 'checkbox'
	));

	// Titulo seccion proyectos
	$wp_customize->add_setting('parco_settings[projects_section_title]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('projects_section_title', array(
		'label' => __('Titulo de seccion Proyectos', 'parco'),
		'section' => 'parco_home_projects',
		'settings' => 'parco_settings[projects_section_title]'
	));



	// Seccion Ultimos articulos
	$wp_customize->add_section('parco_last_posts', array(

		'title' => __('Ultimos artículos', 'parco'),
		'description' => __('Opciones de sección de últimos artículos', 'parco'),
		'priority' => 20,
		'panel' => 'parco_homepage'

	));

	// Mostrar seccion ultimos articulos
	$wp_customize->add_setting('parco_settings[show_last_posts_section]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('show_last_posts_section', array(
		'label' => __('Mostrar sección de últimos artículos', 'parco'),
		'section' => 'parco_last_posts',
		'settings' => 'parco_settings[show_last_posts_section]',
		'type' => 'checkbox'
	));

	// Titulo seccion ultimos articulos
	$wp_customize->add_setting('parco_settings[last_posts_section_title]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('last_posts_section_title', array(
		'label' => __('Titulo de seccion ultimos articulos', 'parco'),
		'section' => 'parco_last_posts',
		'settings' => 'parco_settings[last_posts_section_title]'
	));



/* --- Section --- */
    $wp_customize->add_panel( 'parco_footer_panel', array(
        'capability'  => 'edit_theme_options',
        'title'       => esc_html__( 'Pie de Pagina', 'parco' ),
        'description' => esc_html__( 'Opciones Pie de Pagina', 'parco' ),
        'priority'    => 198
    ) );
    // Layout Section
    $wp_customize->add_section( 'parco_footer_section', array(
        'title'    => esc_html__( 'Ajustes Pie de Pagina', 'parco' ),
        'panel'    => 'parco_footer_panel',
        'priority' => 203
    ) );

    /* --- Settings --- */

    // Footer Copyright text
    /*$wp_customize->add_setting( 'goodz_footer_copyright', array(
    	'default'           => '',
        'sanitize_callback' => 'goodz_sanitize_text',
    ) );

    $wp_customize->add_control( 'goodz_footer_copyright', array(
        'label'       => esc_html__( 'Footer Copyright Text', 'parco' ),
        'section'     => 'footer_section',
        'priority'    => 0,
        'settings'    => 'goodz_footer_copyright',
        'type'        => 'textarea'
    ) );*/


	$wp_customize->add_setting('parco_footer_settings[parco_footer_copyright]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('parco_footer_copyright', array(
		'label' => __('Texto en Pie de Pagina', 'parco'),
		'description' => __('Comunmente usado para copyleft/right. <br />Soporta HTML.', 'parco'),
		'section' => 'parco_footer_section',
		'settings' => 'parco_footer_settings[parco_footer_copyright]',
		'type'        => 'textarea'
	));



}
add_action('customize_register', 'parco_customize_register');