<?php
Kirki::add_field( 'oberon', [
	'type'        => 'code',
	'settings'    => 'oberon_custom_css',
	'label'       => esc_html__( 'Custom CSS', 'kirki' ),
	'description' => esc_html__( 'Description', 'kirki' ),
	'section'     => 'oberon_css',
	'default'     => '',
	'choices'     => [
		'language' => 'css',
	],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'code',
	'settings'    => 'oberon_custom_js',
	'label'       => esc_html__( 'Custom Javascript', 'kirki' ),
	'description' => esc_html__( 'Description', 'kirki' ),
	'section'     => 'oberon_js',
	'default'     => '',
	'choices'     => [
		'language' => 'js',
	],
] );
