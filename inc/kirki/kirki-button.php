<?php

Kirki::add_field( 'oberon', [
	'type'        => 'typography',
	'settings'    => 'button_typography',
	'label'       => esc_html__( 'Site Typography', 'kirki' ),
	'section'     => 'fields',
	'default'     => [
		'font-family'    => 'Arial',
		'variant'        => 'regular',
		'font-size'      => '15px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		// 'text-transform' => 'none',
	],
	'priority'    => 10,
	'transport'   => 'auto',
  'choices' => [
  	'fonts' => [
  		'google'   => [ 'popularity', 100 ],
  		'standard' => [ 'helvatica', 'Verdana', "Arial", "Times", "Georgia", "Courier" ],
  	],
  ],
	'output'      => [
		[
			'element' =>  '.site button,
										.site .button,
										.site .fl-button,
										input[type="submit"],
										.site body div.fl-builder-content a.fl-button span,
										.site input[type=color],
										.site input[type=date],
										.site input[type=datetime],
										.site input[type=datetime-local],
										.site input[type=email],
										.site input[type=month],
										.site input[type=number],
										.site input[type=password],
										.site input[type=range],
										.site input[type=search],
										.site input[type=tel],
										.site input[type=text],
										.site input[type=time],
										.site input[type=url],
										.site input[type=week],
										.site textarea',
		],
	],
] );


Kirki::add_field( 'oberon', [
	'type'        => 'color',
	'settings'    => 'button_text_color',
	'label'       => __( 'Text Color', 'kirki' ),
	'section'     => 'fields',
	'priority'    => 20,
	'default'     => '#ffffff',
  'transport' =>  "auto",
  'output'      => [
    [
      'element' => 'button,
										button:focus,
										button:visited,
										.button,
										.button:focus,
										.button:visited,
										input[type="submit"],
										input[type="submit"]:visited,
										input[type="submit"]:focus,
										 a.fl-button,
										 a.fl-button:visited,
										 a.fl-button:focus,
										.fl-builder-content a.fl-button,
										.fl-builder-content a.fl-button:focus,
										.fl-builder-content a.fl-button:visited,
										.woocommerce-message a.button,
										.woocommerce-message a.button:focus,
										.woocommerce-message a.button:visited',
      'property' => 'color',
    ],
  ],
] );


Kirki::add_field( 'oberon', [
	'type'        => 'color',
	'settings'    => 'button_background_color',
	'label'       => __( 'Background Color', 'kirki' ),
	'section'     => 'fields',
	'priority'    => 30,
	'default'     => '#4169E1',
  'transport' =>  "auto",
  'output'      => [
    [
      'element' => 'button,
										button:focus,
										button:visited,
										.button,
										.button:focus,
										.button:visited,
										input[type="submit"],
										input[type="submit"]:visited,
										input[type="submit"]:focus,
										 a.fl-button,
										 a.fl-button:visited,
										 a.fl-button:focus,
										.fl-builder-content a.fl-button,
										.fl-builder-content a.fl-button:focus,
										.fl-builder-content a.fl-button:visited,
										.woocommerce-message a.button,
										.woocommerce-message a.button:focus,
										.woocommerce-message a.button:visited',
      'property' => 'background-color',
    ],
  ],
	'choices'     => [
		'alpha' => true,
	],
] );


Kirki::add_field( 'oberon', [
	'type'        => 'color',
	'settings'    => 'button_border_color',
	'label'       => __( 'Border Color', 'kirki' ),
	'section'     => 'fields',
	'priority'    => 40,
	'default'     => '#4169E1',
  'transport' =>  "auto",
	'choices'   => [
		'alpha' => true,
	],
  'output'      => [
    [
			'element' => 'button,
										button:focus,
										button:visited,
										.button,
										.button:focus,
										.button:visited,
										input[type="submit"],
										input[type="submit"]:visited,
										input[type="submit"]:focus,
										 a.fl-button,
										 a.fl-button:visited,
										 a.fl-button:focus,
										.fl-builder-content a.fl-button,
										.fl-builder-content a.fl-button:focus,
										.fl-builder-content a.fl-button:visited,
										.woocommerce-message a.button,
										.woocommerce-message a.button:focus,
										.woocommerce-message a.button:visited',
      'property' => 'border-color',
    ],
  ],
] );


Kirki::add_field( 'oberon', [
	'type'        => 'color',
	'settings'    => 'button_text_color_hover',
	'label'       => __( 'Text Color', 'kirki' ),
	'section'     => 'fields',
	'priority'    => 50,
	'default'     => '#ffffff',
  'transport' =>  "auto",
  'output'      => [
    [
      'element' => 'button:hover,
										.button:hover,
										input[type="submit"]:hover,
										a.fl-button:hover,
										a.fl-button:hover *,
										.fl-builder-content a.fl-button:hover,
										.fl-builder-content a.fl-button:hover *,
										.woocommerce-info a.button:hover',
      'property' => 'color',
    ],
  ],
] );


Kirki::add_field( 'oberon', [
	'type'        => 'color',
	'settings'    => 'button_background_color_hover',
	'label'       => __( 'Background Color', 'kirki' ),
	'section'     => 'fields',
	'priority'    => 60,
	'default'     => '#307ff7',
  'transport' =>  "auto",
  'output'      => [
    [
      'element' => 'button:hover,
										.button:hover,
										input[type="submit"]:hover,
										a.fl-button:hover,
										.fl-builder-content a.fl-button:hover',
      'property' => 'background-color',
    ],
  ],
	'choices'     => [
		'alpha' => true,
	],
] );


Kirki::add_field( 'oberon', [
	'type'        => 'color',
	'settings'    => 'button_border_color_hover',
	'label'       => __( 'Border Color', 'kirki' ),
	'section'     => 'fields',
	'priority'    => 70,
	'default'     => '#307ff7',
  'transport' =>  "auto",
	'choices'   => [
		'alpha' => true,
	],
  'output'      => [
    [
			'element' => 'button:hover,
										.button:hover,
										input[type="submit"]:hover,
										 a.fl-button:hover,
										.fl-builder-content a.fl-button:hover',
			'property' => 'border-color',
    ],
  ],
] );

////////////////


Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'button_padding',
	'label'       => esc_html__( 'Padding (top & bottom)', 'kirki' ),
	'section'     => 'fields',
	'priority'    => 80,
	'default'     => 10,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 2,
	],
  'output' => [
    [
      'element' => 'button,
										.button,
										input[type="submit"],
										a.fl-button,
										.fl-builder-content a.fl-button',
      'property' => 'padding-top',
      'units'    => 'px',
    ],
    [
      'element' => 'button,
										.button,
										input[type="submit"],
										a.fl-button,
										.fl-builder-content a.fl-button',
      'property' => 'padding-bottom',
      'units'    => 'px',
    ],
  ],
  'transport' =>  "auto",
] );

Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'button_padding_sides',
	'label'       => esc_html__( 'Padding (left & right)', 'kirki' ),
	'section'     => 'fields',
	'priority'    => 90,
	'default'     => 18,
	'choices'     => [
		'min'  => 0,
		'max'  => 50,
		'step' => 2,
	],
  'output' => [
    [
      'element' => 'button,
										.button,
										input[type="submit"],
										a.fl-button,
										.fl-builder-content a.fl-button',
      'property' => 'padding-left',
      'units'    => 'px',
    ],
    [
      'element' => 'button,
										.button,
										input[type="submit"],
										a.fl-button,
										.fl-builder-content a.fl-button',
      'property' => 'padding-right',
      'units'    => 'px',
    ],
  ],
  'transport' =>  "auto",
] );

Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'button_border_width',
	'label'       => esc_html__( 'Border Width', 'kirki' ),
	'section'     => 'fields',
	'priority'    => 100,
	'default'     => 1,
	'choices'     => [
		'min'  => 0,
		'max'  => 15,
		'step' => 1,
	],
  'output' => [
    [
      'element' => 'button,
										.button,
										input[type="submit"],
										a.fl-button,
										.fl-builder-content a.fl-button',
      'property' => 'border-width',
      'units'    => 'px',
    ],
  ],
  'transport' =>  "auto",
] );



Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'button_border_radius',
	'label'       => esc_html__( 'Rounded Corners', 'kirki' ),
	'section'     => 'fields',
	'priority'    => 110,
	'default'     => 5,
	'choices'     => [
		'min'  => 0,
		'max'  => 30,
		'step' => 1,
	],
  'output' => [
    [
      'element' => 'button,
										.button,
										input[type="submit"],
										 a.fl-button,
										.fl-builder-content a.fl-button',
      'property' => 'border-radius',
      'units'    => 'px',
    ],
  ],
  'transport' =>  "auto",
] );
