<?php
// Panels
Kirki::add_panel( 'woocommerce', array(
    'priority'    => 100,
    'title'       => esc_html__( 'Store Settings', 'kirki' ),
    'description' => esc_html__( 'My panel description', 'kirki' ),
) );

// Sections
Kirki::add_section( 'single_product', array(
    'title'          => __( 'Product Page' ),
    'description'    => __( 'Add custom CSS here' ),
    'panel'          => 'woocommerce', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

// Sections
Kirki::add_section( 'wc_colors', array(
    'title'          => __( 'Store Design' ),
    'description'    => __( 'Add custom CSS here' ),
    'panel'          => 'woocommerce', // Not typically needed.
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


// Colors

// $woocommerce__color-error: #e2401c;
// $woocommerce__color-success: #0f834d;
// $woocommerce__color-info: #3D9CD2;

Kirki::add_field( 'oberon', [
	'type'        => 'color',
	'settings'    => 'wc_info_text_color',
	'label'       => __( 'Info Text Color', 'kirki' ),
	// 'description' => esc_html__( 'This is a color control - without alpha channel.', 'kirki' ),
	'section'     => 'wc_colors',
	'default'     => '#000000',
  'transport' =>  "auto",
  'output'      => [
    [
      'element' => '.woocommerce-info,
                    .woocommerce-noreviews,
                    p.no-comments,
                    .woocommerce-message,
                    .woocommerce-error,
                    .woocommerce mark, .woocommerce ins,
                    .woocommerce-button.cancel:hover',
      'property' => 'color',
    ],
    [
      'element' => '.woocommerce-button.cancel',
      'property' => 'background-color',
    ],
  ],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'color',
	'settings'    => 'wc_info_color',
	'label'       => __( 'Info Banner Color', 'kirki' ),
	// 'description' => esc_html__( 'This is a color control - without alpha channel.', 'kirki' ),
	'section'     => 'wc_colors',
	'default'     => '#3D9CD2',
  'transport' =>  "auto",
  'output'      => [
    [
      'element' => '.woocommerce-info,
                    .woocommerce-noreviews, p.no-comments',
      'property' => 'background-color',
    ],
  ],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'color',
	'settings'    => 'wc_success_color',
	'label'       => __( 'Success Banner Color', 'kirki' ),
	// 'description' => esc_html__( 'This is a color control - without alpha channel.', 'kirki' ),
	'section'     => 'wc_colors',
	'default'     => '#0f834d',
  'transport' =>  "auto",
  'output'      => [
    [
      'element' => '.stock.in-stock,
                    .woocommerce-orders-table__row--status-completed .woocommerce-orders-table__cell-order-status,
                    .woocommerce-orders-table__row--status-refunded .woocommerce-orders-table__cell-order-status',
      'property' => 'color',
    ],
  ],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'color',
	'settings'    => 'wc_processing_color',
	'label'       => __( 'Processing Color', 'kirki' ),
	// 'description' => esc_html__( 'This is a color control - without alpha channel.', 'kirki' ),
	'section'     => 'wc_colors',
	'default'     => '#f8dda7',
  'transport' =>  "auto",
  'output'      => [
    [
      'element' => '.woocommerce-orders-table__row--status-processing .woocommerce-orders-table__cell-order-status,
                    .woocommerce-orders-table__row--status-pending .woocommerce-orders-table__cell-order-status,
                    .woocommerce-orders-table__row--status-on-hold .woocommerce-orders-table__cell-order-status',
      'property' => 'color',
    ],
    [
      'element' => '.woocommerce mark,
                    .woocommerce ins',
      'property' => 'background-color',
    ],
  ],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'color',
	'settings'    => 'wc_error_color',
	'label'       => __( 'Error Color', 'kirki' ),
	// 'description' => esc_html__( 'This is a color control - without alpha channel.', 'kirki' ),
	'section'     => 'wc_colors',
	'default'     => '#e2401c',
  'transport' =>  "auto",
  'output'      => [
    [
      'element' => '.woocommerce-billing-fields__field-wrapper .required::after,
                    body.woocommerce-cart .woocommerce-cart-form .product-remove a:hover::after,
                    .woocommerce-MyAccount-navigation-link--customer-logout:hover a,
                    .woocommerce-orders-table__row--status-failed .woocommerce-orders-table__cell-order-status,
                    .woocommerce-orders-table__row--status-cancelled .woocommerce-orders-table__cell-order-status,
                    .woocommerce-button.cancel',
      'property' => 'color',
    ],
    [
      'element' => '.woocommerce-error,
                    .woocommerce-button.cancel:hover',
      'property' => 'background-color',
    ],
  ],
] );


// Catalog

Kirki::add_field( 'oberon', [
	'type'        => 'number',
	'settings'    => 'wc_products_per_page',
	'label'       => esc_html__( 'Products Per Page', 'kirki' ),
	'section'     => 'woocommerce_product_catalog',
	'default'     => 12,
  'priority'    => 10,
	'choices'     => [
		'min'  => 3,
		'max'  => 30,
		'step' => 1,
	],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'wc_products_col_desktop',
	'label'       => esc_html__( 'Product Columns (desktop)', 'kirki' ),
	'section'     => 'woocommerce_product_catalog',
	'default'     => 4,
  'priority'    => 10,
	'choices'     => [
		'min'  => 2,
		'max'  => 8,
		'step' => 1,
	],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'wc_products_col_tablet',
	'label'       => esc_html__( 'Product Columns (tablet)', 'kirki' ),
	'section'     => 'woocommerce_product_catalog',
	'default'     => 3,
  'priority'    => 10,
	'choices'     => [
		'min'  => 1,
		'max'  => 6,
		'step' => 1,
	],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'wc_products_col_phone',
	'label'       => esc_html__( 'Product Columns (Phone)', 'kirki' ),
	'section'     => 'woocommerce_product_catalog',
	'default'     => 2,
  'priority'    => 10,
	'choices'     => [
		'min'  => 1,
		'max'  => 5,
		'step' => 1,
	],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'wc_products_col_padding',
	'label'       => esc_html__( 'Product Columns Padding', 'kirki' ),
	'section'     => 'woocommerce_product_catalog',
	'default'     => 20,
  'priority'    => 10,
	'choices'     => [
		'min'  => 0,
		'max'  => 50,
		'step' => 5,
	],
] );


// Single product page

Kirki::add_field( 'oberon', [
	'type'        => 'toggle',
	'settings'    => 'product_info_tab',
	'label'       => esc_html__( 'Additional Information Tab', 'kirki' ),
	'section'     => 'single_product',
	'default'     => '1',
	'priority'    => 10,
] );

Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'wc_product_gallery_col',
	'label'       => esc_html__( 'Product Thumbnails', 'kirki' ),
	'section'     => 'single_product',
	'default'     => 6,
  'priority'    => 10,
	'choices'     => [
		'min'  => 3,
		'max'  => 13,
		'step' => 1,
	],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'wc_related_products_count',
	'label'       => esc_html__( 'Related products per page', 'kirki' ),
	'section'     => 'single_product',
	'default'     => 4,
  'priority'    => 10,
	'choices'     => [
		'min'  => 2,
		'max'  => 8,
		'step' => 1,
	],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'wc_related_products_col',
	'label'       => esc_html__( 'Related Products - Columns', 'kirki' ),
	'section'     => 'single_product',
	'default'     => 4,
  'priority'    => 10,
	'choices'     => [
		'min'  => 2,
		'max'  => 8,
		'step' => 1,
	],
] );
