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
	wp_enqueue_style('all-min', get_stylesheet_directory_uri() . '/assets/css/all.min.css');

	// CARREGA JQUERY NATIVO
	wp_enqueue_script('jquery');

	// CARREGA SCRIPTS
	wp_enqueue_script('owl.carousel', get_stylesheet_directory_uri() . '/assets/js/plugins/owl.carousel.js');
	wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/assets/js/public/scripts.js');
}
