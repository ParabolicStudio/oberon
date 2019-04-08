<?php
/**
 * left sidebar settings
 */

 Kirki::add_field( 'oberon', [
 	'type'        => 'custom',
 	'settings'    => 'lsbr_header',
 	// 'label'       => esc_html__( 'This is the label', 'kirki' ),
 	'section'     => 'sidebar',
 	'default'     => '<h1>' . esc_html__( 'Left Sidebar', 'kirki' ) . '</h1><hr>',
 	'priority'    => 10,
 ] );


 // Add toggle to enabile the left sidebar
Kirki::add_field( 'oberon', [
	'type'        => 'toggle',
	'settings'    => 'enable_lsbr',
	'label'       => esc_html__( 'Enabile Left Sidebar', 'oberon' ),
	'section'     => 'sidebar',
	'default'     => 0,
	'priority'    => 10,
  'active_callback' => [
    [
      'setting'  => 'header_position',
      'operator' => '!=',
      'value'    => 'left',
    ],
  ],
] );


Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'lsbr_width',
	'label'       => esc_html__( 'Sidebar Width', 'kirki' ),
	'section'     => 'sidebar',
	'default'     => 260,
	'choices'     => [
		'min'  => 140,
		'max'  => 400,
		'step' => 10,
	],
	'active_callback' => [
		[
			'setting'  => 'enable_lsbr',
			'operator' => '==',
			'value'    => true,
		]
	],
] );

// Sidebar visibilty
if ( class_exists( 'WooCommerce' ) ) {

Kirki::add_field( 'oberon', [
	'type'        => 'multicheck',
	'settings'    => 'lsbr_visibility',
	'label'       => esc_html__( 'Show left sidebar on:', 'kirki' ),
	'section'     => 'sidebar',
	'default'     => array('home', 'blog', 'page', 'blog-posts', 'archive', ),
	'priority'    => 10,
	'choices'     => [
		'home' 			 => esc_html__( 'Home page', 'kirki' ),
		'blog' 			 => esc_html__( 'Blog Page', 'kirki' ),
		'page' 		   => esc_html__( 'Pages', 'kirki' ),
		'blog-posts' => esc_html__( 'Blog Posts', 'kirki' ),
		'archive' 	 => esc_html__( 'Archives', 'kirki' ),
		'shop' 			 => esc_html__( 'Shop Page', 'kirki' ),
		'product' 	 => esc_html__( 'Products', 'kirki' ),
	],
	'active_callback' => [
		[
			'setting'  => 'enable_lsbr',
			'operator' => '==',
			'value'    => true,
		]
	],
] );

} else {

	Kirki::add_field( 'oberon', [
		'type'        => 'multicheck',
		'settings'    => 'lsbr_visibility',
		'label'       => esc_html__( 'Show left sidebar on:', 'kirki' ),
		'section'     => 'sidebar',
		'default'     => array('home', 'blog', 'page', 'blog-posts', 'archive', ),
		'priority'    => 10,
		'choices'     => [
			'home' 			 => esc_html__( 'Home page', 'kirki' ),
			'blog' 			 => esc_html__( 'Blog Page', 'kirki' ),
			'page' 		   => esc_html__( 'Pages', 'kirki' ),
			'blog-posts' => esc_html__( 'Blog Posts', 'kirki' ),
			'archive' 	 => esc_html__( 'Archives', 'kirki' ),
		],
		'active_callback' => [
			[
				'setting'  => 'enable_lsbr',
				'operator' => '==',
				'value'    => true,
			]
		],
	] );
}

Kirki::add_field( 'oberon', [
	'type'        => 'multicheck',
	'settings'    => 'left_sidebar_devices',
	'label'       => esc_html__( 'Show on these device sizes', 'kirki' ),
	'section'     => 'sidebar',
	'default'     => array('medium', 'large'),
	'priority'    => 10,
	'choices'     => [
		'large' => esc_html__( 'Desktop', 'kirki' ),
		'medium' => esc_html__( 'Tablet', 'kirki' ),
		'small' => esc_html__( 'Phone', 'kirki' ),
	],
	'active_callback' => [
		[
			'setting'  => 'enable_lsbr',
			'operator' => '==',
			'value'    => true,
		]
	],
] );


// Add toggle to enabile the left sidebar
Kirki::add_field( 'oberon', [
 'type'        => 'toggle',
 'settings'    => 'wrap_lsbr_tablet',
 'label'       => esc_html__( 'Align sidebar left on tablets', 'oberon' ),
 'section'     => 'sidebar',
 'default'     => true,
 'priority'    => 10,
 'active_callback' => [
	 [
		 'setting'  => 'enable_lsbr',
		 'operator' => '==',
		 'value'    => true,
	 ]
 ],
] );


Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'lsbr_tablet_width',
	'label'       => esc_html__( 'Sidebar Tablet Width', 'kirki' ),
	'section'     => 'sidebar',
	'default'     => 200,
	'choices'     => [
		'min'  => 100,
		'max'  => 300,
		'step' => 10,
	],
	'active_callback' => [
		[
			'setting'  => 'enable_lsbr',
			'operator' => '==',
			'value'    => true,
		],
		[
			'setting'  => 'wrap_lsbr_tablet',
			'operator' => '==',
			'value'    => true,
		]
	],
] );


/**
 * Right sidebar settings
 */

 Kirki::add_field( 'oberon', [
	 'type'        => 'custom',
	 'settings'    => 'rsbr_header',
	 // 'label'       => esc_html__( 'This is the label', 'kirki' ),
	 'section'     => 'sidebar',
	 'default'     => '<br><h1>' . esc_html__( 'Right Sidebar', 'kirki' ) . '</h1><hr>',
	 'priority'    => 10,
 ] );

 // Add toggle to enabile the right sidebar
Kirki::add_field( 'oberon', [
	'type'        => 'toggle',
	'settings'    => 'enable_rsbr',
	'label'       => esc_html__( 'Enabile Right Sidebar', 'oberon' ),
	'section'     => 'sidebar',
	'default'     => 0,
	'priority'    => 10,
  'active_callback' => [
    [
      'setting'  => 'header_position',
      'operator' => '!=',
      'value'    => 'right',
    ],
  ],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'rsbr_width',
	'label'       => esc_html__( 'Sidebar Width', 'kirki' ),
	'section'     => 'sidebar',
	'default'     => 230,
	'choices'     => [
		'min'  => 140,
		'max'  => 400,
		'step' => 10,
	],
	'active_callback' => [
		[
			'setting'  => 'enable_rsbr',
			'operator' => '==',
			'value'    => true,
		]
	],
] );


if ( class_exists( 'WooCommerce' ) ) {

Kirki::add_field( 'oberon', [
	'type'        => 'multicheck',
	'settings'    => 'rsbr_visibility',
	'label'       => esc_html__( 'Show right sidebar on:', 'kirki' ),
	'section'     => 'sidebar',
	'default'     => array('home', 'blog', 'page', 'blog-posts', 'archive', ),
	'priority'    => 10,
	'choices'     => [
		'home' 			 => esc_html__( 'Home page', 'kirki' ),
		'blog' 			 => esc_html__( 'Blog Page', 'kirki' ),
		'page' 		   => esc_html__( 'Pages', 'kirki' ),
		'blog-posts' => esc_html__( 'Blog Posts', 'kirki' ),
		'archive' 	 => esc_html__( 'Archives', 'kirki' ),
		'shop' 			 => esc_html__( 'Shop Page', 'kirki' ),
		'product' 	 => esc_html__( 'Products', 'kirki' ),
	],
	'active_callback' => [
		[
			'setting'  => 'enable_rsbr',
			'operator' => '==',
			'value'    => true,
		]
	],
] );

} else {

	Kirki::add_field( 'oberon', [
		'type'        => 'multicheck',
		'settings'    => 'rsbr_visibility',
		'label'       => esc_html__( 'Show right sidebar on:', 'kirki' ),
		'section'     => 'sidebar',
		'default'     => array('home', 'blog', 'page', 'blog-posts', 'archive', ),
		'priority'    => 10,
		'choices'     => [
			'home' 			 => esc_html__( 'Home page', 'kirki' ),
			'blog' 			 => esc_html__( 'Blog Page', 'kirki' ),
			'page' 		 => esc_html__( 'Pages', 'kirki' ),
			'blog-posts' => esc_html__( 'Blog Posts', 'kirki' ),
			'archive' 	 => esc_html__( 'Archives', 'kirki' ),
		],
		'active_callback' => [
			[
				'setting'  => 'enable_rsbr',
				'operator' => '==',
				'value'    => true,
			]
		],
	] );
}

Kirki::add_field( 'oberon', [
	'type'        => 'multicheck',
	'settings'    => 'right_sidebar_devices',
	'label'       => esc_html__( 'Show on these device sizes', 'kirki' ),
	'section'     => 'sidebar',
	'default'     => array('medium', 'large'),
	'priority'    => 10,
	'choices'     => [
		'large' => esc_html__( 'Desktop', 'kirki' ),
		'medium' => esc_html__( 'Tablet', 'kirki' ),
		'small' => esc_html__( 'Phone', 'kirki' ),
	],
	'active_callback' => [
		[
			'setting'  => 'enable_rsbr',
			'operator' => '==',
			'value'    => true,
		]
	],
] );


// Add toggle to enabile the left sidebar
Kirki::add_field( 'oberon', [
 'type'        => 'toggle',
 'settings'    => 'wrap_rsbr_tablet',
 'label'       => esc_html__( 'Align sidebar right on tablets', 'oberon' ),
 'section'     => 'sidebar',
 'default'     => false,
 'priority'    => 10,
 'active_callback' => [
	 [
		 'setting'  => 'enable_rsbr',
		 'operator' => '==',
		 'value'    => true,
	 ]
 ],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'rsbr_tablet_width',
	'label'       => esc_html__( 'Sidebar Tablet Width', 'kirki' ),
	'section'     => 'sidebar',
	'default'     => 180,
	'choices'     => [
		'min'  => 100,
		'max'  => 300,
		'step' => 10,
	],
	'active_callback' => [
		[
			'setting'  => 'enable_rsbr',
			'operator' => '==',
			'value'    => true,
		],
		[
			'setting'  => 'wrap_rsbr_tablet',
			'operator' => '==',
			'value'    => true,
		]
	],
] );
