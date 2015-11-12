<?php

/*--------------------------------------------------------------
	CARREGANDO ESTILOS E SCRIPTS
--------------------------------------------------------------*/
add_action('wp_enqueue_scripts', 'btwp_enqueue_scripts');

function btwp_enqueue_scripts() {

	// CARREGA FONTE DO GOOGLE
	wp_register_style('btwp-googleFonts', 'http://fonts.googleapis.com/css?family=Lato:400,300,700,900');
	wp_enqueue_style( 'btwp-googleFonts');

	// CSSs
	wp_enqueue_style('reset', get_stylesheet_directory_uri() . '/assets/css/reset.css');
	wp_enqueue_style('grid', get_stylesheet_directory_uri() . '/assets/css/grid.css');
	wp_enqueue_style('owl-carousel', get_stylesheet_directory_uri() . '/assets/css/owl-carousel.css');
	wp_enqueue_style('owl-theme', get_stylesheet_directory_uri() . '/assets/css/owl-theme.css');
	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');

	// CARREGA JQUERY NATIVO
	wp_enqueue_script('jquery');

	// CARREGA SCRIPTS
	wp_enqueue_script('owl.carousel', get_stylesheet_directory_uri() . '/assets/js/plugins/owl.carousel.js');
	wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js');
}
