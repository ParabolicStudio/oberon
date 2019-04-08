<?php

Kirki::add_field( 'oberon', [
	'type'        => 'typography',
	'settings'    => 'site_typography',
	'label'       => esc_html__( 'Site Typography', 'kirki' ),
	'section'     => 'typography',
	'default'     => [
		'font-family'    => 'Arial',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		// 'color'          => '#333333',
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
			'element' => 'body',
		],
	],
] );

Kirki::add_field( 'oberon', [
 'type'        => 'toggle',
 'settings'    => 'custom_header_styles',
 'label'       => esc_html__( 'Use custom header styling', 'oberon' ),
 'section'     => 'typography',
 'default'     => false,
 'priority'    => 10,
] );

Kirki::add_field( 'oberon', [
	'type'        => 'typography',
	'settings'    => 'header_typography',
	'label'       => esc_html__( 'Header Typography', 'kirki' ),
	'section'     => 'typography',
	'default'     => [
		'font-family'    => 'Arial',
		'variant'        => 'bold',
		'letter-spacing' => '0',
    'letter-spacing' => '0',
    'text-transform' => 'none',
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
			'element' => 'h1, h2, h3, h4, h5, h6',
		],
	],
  'active_callback' => [
    [
      'setting'  => 'custom_header_styles',
      'operator' => '==',
      'value'    => true,
    ]
  ],
] );


Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'h1_size',
	'label'       => esc_html__( 'H1 Font Size', 'kirki' ),
	'section'     => 'typography',
	'default'     => 38,
	'choices'     => [
		'min'  => 16,
		'max'  => 54,
		'step' => 1,
	],
  'active_callback' => [
    [
      'setting'  => 'custom_header_styles',
      'operator' => '==',
      'value'    => true,
    ]
  ],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h1, .h1',
			'property' => 'font-size',
      'units'    => 'px',
		],
	],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'h2_size',
	'label'       => esc_html__( 'H2 Font Size', 'kirki' ),
	'section'     => 'typography',
	'default'     => 32,
	'choices'     => [
		'min'  => 16,
		'max'  => 54,
		'step' => 1,
	],
  'active_callback' => [
    [
      'setting'  => 'custom_header_styles',
      'operator' => '==',
      'value'    => true,
    ]
  ],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h2, .h2',
			'property' => 'font-size',
			'units'    => 'px',
		],
	],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'h3_size',
	'label'       => esc_html__( 'H3 Font Size', 'kirki' ),
	'section'     => 'typography',
	'default'     => 26,
	'choices'     => [
		'min'  => 16,
		'max'  => 54,
		'step' => 1,
	],
  'active_callback' => [
    [
      'setting'  => 'custom_header_styles',
      'operator' => '==',
      'value'    => true,
    ]
  ],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h3, .h3',
			'property' => 'font-size',
			'units'    => 'px',
		],
	],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'h4_size',
	'label'       => esc_html__( 'H4 Font Size', 'kirki' ),
	'section'     => 'typography',
	'default'     => 22,
	'choices'     => [
		'min'  => 16,
		'max'  => 54,
		'step' => 1,
	],
  'active_callback' => [
    [
      'setting'  => 'custom_header_styles',
      'operator' => '==',
      'value'    => true,
    ]
  ],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h4, .h4, .widgettitle',
			'property' => 'font-size',
			'units'    => 'px',
		],
	],
] );


Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'h5_size',
	'label'       => esc_html__( 'H5 Font Size', 'kirki' ),
	'section'     => 'typography',
	'default'     => 20,
	'choices'     => [
		'min'  => 16,
		'max'  => 54,
		'step' => 1,
	],
  'active_callback' => [
    [
      'setting'  => 'custom_header_styles',
      'operator' => '==',
      'value'    => true,
    ]
  ],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h5, .h5',
			'property' => 'font-size',
			'units'    => 'px',
		],
	],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'h6_size',
	'label'       => esc_html__( 'H6 Font Size', 'kirki' ),
	'section'     => 'typography',
	'default'     => 18,
	'choices'     => [
		'min'  => 16,
		'max'  => 54,
		'step' => 1,
	],
  'active_callback' => [
    [
      'setting'  => 'custom_header_styles',
      'operator' => '==',
      'value'    => true,
    ]
  ],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h6, .h6',
			'property' => 'font-size',
			'units'    => 'px',
		],
	],
] );
