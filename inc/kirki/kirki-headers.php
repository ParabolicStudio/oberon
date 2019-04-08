<?php

Kirki::add_field( 'oberon', [
	'type'        => 'custom',
	'settings'    => 'btn_header',
	'section'     => 'fields',
	'default'     => '<h1>' . esc_html__( 'Buttons', 'oberon' ) . '</h1><hr/>',
	'priority'    => 15,
] );

Kirki::add_field( 'oberon', [
	'type'        => 'custom',
	'settings'    => 'btn_header_hvr',
	'section'     => 'fields',
	'default'     => '<h3>' . esc_html__( 'Buttons (hover)', 'oberon' ) . '</h3><hr/>',
	'priority'    => 45,
] );

Kirki::add_field( 'oberon', [
	'type'        => 'custom',
	'settings'    => 'fld_header',
	'section'     => 'fields',
	'default'     => '<h1>' . esc_html__( 'Inputs', 'oberon' ) . '</h1><hr/>',
	'priority'    => 130,
] );

Kirki::add_field( 'oberon', [
	'type'        => 'custom',
	'settings'    => 'fld_header_hover',
	'section'     => 'fields',
	'default'     => '<h3>' . esc_html__( 'Inputs Hover', 'oberon' ) . '</h3><hr/>',
	'priority'    => 160,
] );
