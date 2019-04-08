<?php
/**
 * Enqueue the stylesheet.
 */
function oberon_enqueue_customizer_stylesheet() {

	wp_register_style( 'oberon-customizer-css', get_template_directory_uri() . 'assets/css/customizer.css', NULL, NULL, 'all' );
	wp_enqueue_style( 'oberon-customizer-css' );

}
add_action( 'customize_controls_print_styles', 'oberon_enqueue_customizer_stylesheet' );
