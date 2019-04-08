<?php
// Kirki::add_field( 'oberon', [
// 	'type'        => 'color',
// 	'settings'    => 'text_color',
// 	'label'       => __( 'Text Color', 'kirki' ),
// 	'description' => esc_html__( 'This is a color control - without alpha channel.', 'kirki' ),
// 	'section'     => 'colors',
// 	'default'     => '#333333',
//   'transport' =>  "auto",
//   'output'      => [
//     [
//       'element' => '.site',
//       'property' => 'color',
//     ],
//   ],
// ] );


Kirki::add_field( 'oberon', [
	'type'        => 'palette',
	'settings'    => 'color_pallete',
	'label'       => esc_html__( 'Palette Control', 'kirki' ),
	'section'     => 'colors',
	'default'     => 'light',
	'priority'    => 10,
	'choices'     => [
		'light' => [
			'#ffffff',
			'#ECEFF1',
			'#cccccc',
			'#222222',
		],
		'light2' => [
			'#ECEFF1',
			'#ffffff',
			'#cccccc',
			'#222222',
		],
		'dark' => [
			'#222222',
			'#333333',
			'#111111',
			'#eeeeee',
		],
		'dark2' => [
			'#141115',
			'#1D1E22',
			'#555555',
			'#eeeeee',
		],
	],
] );


Kirki::add_field( 'oberon', [
	'type'        => 'color',
	'settings'    => 'heading_color',
	'label'       => __( 'Heading Color', 'kirki' ),
	'description' => esc_html__( 'This is a color control - without alpha channel.', 'kirki' ),
	'section'     => 'colors',
	'default'     => '#222222',
  'transport' =>  "auto",
  'output'      => [
    [
      'element' => 'h1, h2, h3, h4, h5, h6',
      'property' => 'color',
    ],
  ],
] );

// Kirki::add_field( 'oberon', [
// 	'type'        => 'color',
// 	'settings'    => 'background_color',
// 	'label'       => __( 'background Color', 'kirki' ),
// 	'description' => esc_html__( 'This is a color control - without alpha channel.', 'kirki' ),
// 	'section'     => 'colors',
// 	'default'     => '#ffffff',
//   'transport' =>  "auto",
//   'output'      => [
//     [
//       'element' => 'body, .site-header, .site-footer',
//       'property' => 'background-color',
//     ],
//   ],
// ] );

Kirki::add_field( 'oberon', [
	'type'        => 'color',
	'settings'    => 'highlight_color',
	'label'       => __( 'Highlight Color', 'kirki' ),
	'description' => esc_html__( 'This is a color control - without alpha channel.', 'kirki' ),
	'section'     => 'colors',
	'default'     => '#4169E1',
  'transport' =>  "auto",
  'output'      => [
    [
      'element' => 'body a, body a:visited,
										body .uabb-icon-wrap .uabb-icon i,
										body .uabb-icon-wrap .uabb-icon i:before',
      'property' => 'color',
    ],
  ],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'color',
	'settings'    => 'highlight_hover_color',
	'label'       => __( 'Highlight Hover Color', 'kirki' ),
	'description' => esc_html__( 'This is a color control - without alpha channel.', 'kirki' ),
	'section'     => 'colors',
	'default'     => '#307ff7',
  'transport' =>  "auto",
  'output'      => [
    [
      'element' => 'body a:hover, body a:focus, body a:active',
      'property' => 'color',
    ],
  ],
] );


Kirki::add_field( 'oberon', [
	'type'        => 'background',
	'settings'    => 'site_background',
	'label'       => esc_html__( 'Background Control', 'kirki' ),
	'description' => esc_html__( 'Background conrols are pretty complex - but extremely useful if properly used.', 'kirki' ),
	'section'     => 'colors',
	'default'     => [
		// 'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'body',
		],
	],
] );
