<?php

// Add toggle to enabile the left sidebar
Kirki::add_field( 'oberon', [
 'type'        => 'toggle',
 'settings'    => 'boxed_layout',
 'label'       => esc_html__( 'Enabile Boxed layout', 'oberon' ),
 'section'     => 'layout',
 'default'     => 0,
 'priority'    => 10,
] );

Kirki::add_field( 'oberon', [
	'type'        => 'radio-buttonset',
	'settings'    => 'header_position',
	'label'       => esc_html__( 'Header Position', 'oberon' ),
	'section'     => 'layout',
	'default'     => 'top',
	'priority'    => 10,
	'choices'     => [
		'left'   => esc_html__( 'Left', 'oberon' ),
		'top'    => esc_html__( 'Top', 'oberon' ),
		'right'  => esc_html__( 'Right', 'oberon' ),
	],
] );

// Top header

Kirki::add_field( 'oberon', [
	'type'        => 'radio',
	'settings'    => 'header_attachment',
	'label'       => esc_html__( 'Header Style', 'kirki' ),
	'section'     => 'layout',
	'default'     => 'default',
	'priority'    => 10,
	'choices'     => [
		'default' => esc_html__( 'Inline', 'kirki' ),
		'sticky'  => esc_html__( 'Sticky', 'kirki' ),
		'fade'    => esc_html__( 'Fade in', 'kirki' ),
	],
  'active_callback' => [
    [
      'setting'  => 'header_position',
      'operator' => '==',
      'value'    => "top",
    ]
  ],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'radio',
	'settings'    => 'header_attachment_mobile',
	'label'       => esc_html__( 'Header Style (mobile)', 'kirki' ),
	'section'     => 'layout',
	'default'     => 'default',
	'priority'    => 10,
	'choices'     => [
		'default' => esc_html__( 'Inline', 'kirki' ),
		'sticky'  => esc_html__( 'Sticky', 'kirki' ),
		'fade'    => esc_html__( 'Fade in', 'kirki' ),
	],
  'active_callback' => [
    [
      'setting'  => 'header_position',
      'operator' => '==',
      'value'    => "top",
    ]
  ],
] );


// Side header
Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'header_width',
	'label'       => esc_html__( 'Header Width', 'kirki' ),
	'section'     => 'layout',
	'default'     => 200,
	'choices'     => [
		'min'  => 100,
		'max'  => 400,
		'step' => 5,
	],
  'active_callback' => [
    [
      'setting'  => 'header_position',
      'operator' => '!=',
      'value'    => "top",
    ]
  ],
  'transport' =>  "auto",
] );


// Add toggle to enabile the left sidebar
Kirki::add_field( 'oberon', [
 'type'        => 'toggle',
 'settings'    => 'side_header_attachment',
 'label'       => esc_html__( 'Fixed Header', 'oberon' ),
 'section'     => 'layout',
 'default'     => 0,
 'priority'    => 10,
 'active_callback' => [
   [
     'setting'  => 'header_position',
     'operator' => '!=',
     'value'    => "top",
   ]
 ],
] );


Kirki::add_field( 'oberon', [
	'type'        => 'slider',
	'settings'    => 'content_padding',
	'label'       => esc_html__( 'Site Padding', 'kirki' ),
	'section'     => 'layout',
	'default'     => 20,
	'choices'     => [
		'min'  => 0,
		'max'  => 60,
		'step' => 5,
	],
  'output' => [
    [
      'element'  => '.site-padding,
                     .content-area,
                     .boxed-layout,
                     .large-device.woocommerce-cart tr.cart_item,
                     .cart-collaterals .cart_totals,
                     .woocommerce-checkout-payment,
                     .woocommerce-billing-fields__field-wrapper,
                     .woocommerce-shipping-fields__field-wrapper,
                     .woocommerce-additional-fields__field-wrapper,
                     .woocommerce-checkout-review-order-table,
                     li.wc_payment_method .payment_box,
                     .u-columns.col2-set .col-1,
                     .u-columns.col2-set .col-2,
                     .woocommerce-ResetPassword,
                     .woocommerce-checkout .woocommerce-order .woocommerce-order-details,
                 		 .woocommerce-checkout .woocommerce-order .woocommerce-customer-details,
                     .woocommerce-thankyou-order-received,
                     .woocommerce .cart-empty,
                     .woocommerce-order-pay #order_review',
      'property' => 'padding',
      'units'    => 'px',
    ],
    [
      'element'  => 'body.large-device.woocommerce-cart .woocommerce-cart-form,
                    body.large-device form.woocommerce-checkout #customer_details,
                    .large-device .quantity-wrap',
      'property' => 'margin-right',
      'units'    => 'px',
    ],
    [
      'element'  => '.woocommerce-cart tr.cart_item,
                     #customer_details .form-row,
                     .quantity-wrap,
                     .single_add_to_cart_button,
                     .single-product .quantity,
                     .woocommerce-notices-wrapper .woocommerce-message:last-child,
                     #order_review ul,
                     .woocommerce-terms-and-conditions-wrapper,
                     .woocommerce-EditAccountForm fieldset',
      'property' => 'margin-bottom',
      'units'    => 'px',
    ],
    // [
    //   'element'  => '.woocommerce-checkout-review-order-table td',
    //   'property' => 'padding-left',
    //   'units'    => 'px',
    // ],
    [
      'element'  => '.wc-left-col-wrapper,
                     .wc-right-col-wrapper',
      'property' => 'padding-top',
      'units'    => 'px',
    ],
    // [
    //   'element'  => '.woocommerce-checkout-review-order-table td',
    //   'property' => 'padding-right',
    //   'units'    => 'px',
    // ],
  ],
  'transport' =>  "auto",
] );


// Content widths

Kirki::add_field( 'oberon', [
	'type'        => 'number',
	'settings'    => 'max_breakpoint',
	'label'       => esc_html__( 'Content Width', 'kirki' ),
	'section'     => 'layout',
	'default'     => 1100,
	'choices'     => [
		'min'  => 700,
		'max'  => 3000,
		'step' => 1,
	],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'number',
	'settings'    => 'medium_breakpoint',
	'label'       => esc_html__( 'Medium Device Breakpoint', 'kirki' ),
	'section'     => 'layout',
	'default'     => 992,
	'choices'     => [
		'min'  => 700,
		'max'  => 1200,
		'step' => 1,
	],
] );

Kirki::add_field( 'oberon', [
	'type'        => 'number',
	'settings'    => 'small_breakpoint',
	'label'       => esc_html__( 'Small Device Breakpoint', 'kirki' ),
	'section'     => 'layout',
	'default'     => 768,
	'choices'     => [
		'min'  => 700,
		'max'  => 1200,
		'step' => 1,
	],
] );
