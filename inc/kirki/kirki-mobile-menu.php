<?php

// Add toggle to enabile the left sidebar
Kirki::add_field( 'oberon', [
 'type'        => 'toggle',
 'settings'    => 'popup_menu_toggle',
 'label'       => esc_html__( 'Enabile Popup Menu', 'oberon' ),
 'section'     => 'popup_menu',
 'default'     => 0,
 'priority'    => 10,
] );

// Add toggle to enabile the left sidebar
Kirki::add_field( 'oberon', [
 'type'        => 'toggle',
 'settings'    => 'popup_menu_preview',
 'label'       => esc_html__( 'Preview Popup Menu', 'oberon' ),
 'section'     => 'popup_menu',
 'default'     => 0,
 'priority'    => 10,
 'active_callback' => [
   [
     'setting'  => 'popup_menu_toggle',
     'operator' => '==',
     'value'    => 1,
   ],
 ],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'select',
	'settings'    => 'popup_menu_style',
	'label'       => esc_html__( 'Menu Style', 'kirki' ),
	'section'     => 'popup_menu',
	'default'     => 'slide-left',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'left-panel' => esc_html__( 'Left Panel', 'kirki' ),
		'right-panel' => esc_html__( 'Right Panel', 'kirki' ),
    'fade' => esc_html__( 'Fade In', 'kirki' ),
    'drop-down' => esc_html__( 'Drop Down', 'kirki' ),
	],
  'active_callback' => [
    [
      'setting'  => 'popup_menu_toggle',
      'operator' => '==',
      'value'    => 1,
    ],
  ],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'color',
	'settings'    => 'popup_bg_color',
	'label'       => __( 'Background Color', 'kirki' ),
	'section'     => 'popup_menu',
	'default'     => "rgba(50,50,50,0.95)",
  'transport' =>  "auto",
	'choices'   => [
		'alpha' => true,
	],
  'output'      => [
    [
      'element' => '.oberon-popup-menu',
      'property' => 'background-color',
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'popup_menu_toggle',
      'operator' => '==',
      'value'    => 1,
    ],
  ],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'color',
	'settings'    => 'popup_bg_overlay_color',
	'label'       => __( 'Overlay color', 'kirki' ),
	'section'     => 'popup_menu',
	'default'     => "rgba(50,50,50,0.25)",
  'transport' =>  "auto",
	'choices'   => [
		'alpha' => true,
	],
  'output'      => [
    [
      'element' => '.popup-menu-overlay',
      'property' => 'background-color',
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'popup_menu_toggle',
      'operator' => '==',
      'value'    => 1,
    ],
  ],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'popup_menu_width',
	'label'       => esc_html__( 'Menu Width', 'kirki' ),
	'section'     => 'popup_menu',
	'default'     => 360,
  'transport' =>  "auto",
	'choices'     => [
		'min'  => 140,
		'max'  => 400,
		'step' => 10,
	],
  'active_callback' => [
    [
      'setting'  => 'popup_menu_toggle',
      'operator' => '==',
      'value'    => 1,
    ],
    // [
    //   'setting'  => 'popup_menu_style',
    //   'operator' => '==',
    //   'value'    => 'left-panel',
    // ],
  ],
  'output' => [
    [
      'element' => '.oberon-popup-menu',
      'property' => 'width',
      'units'    => 'px',
    ],
  ],
] );
