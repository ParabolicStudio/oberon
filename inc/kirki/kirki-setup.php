<?php
Kirki::add_config( 'oberon', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
    'option_name'   => 'oberon',
) );

// Sections
Kirki::add_section( 'layout', array(
    'title'          => __( 'Layout' ),
    'description'    => __( 'Add custom CSS here' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_section( 'sidebar', array(
    'title'          => __( 'Sidebars' ),
    'description'    => __( 'Add custom CSS here' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_section( 'typography', array(
    'title'          => __( 'Typography' ),
    'description'    => __( 'Add custom CSS here' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_section( 'colors', array(
    'title'          => __( 'Colors' ),
    'description'    => __( 'Add custom CSS here' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_section( 'fields', array(
    'title'          => __( 'Buttens & Fields' ),
    'description'    => __( 'Add custom CSS here' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_section( 'popup_menu', array(
    'title'          => __( 'Popup Menu' ),
    // 'description'    => __( 'Add custom CSS here' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_panel( 'oberon_code', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Custom Code', 'kirki' ),
    'description' => esc_html__( 'My panel description', 'kirki' ),
) );

Kirki::add_section( 'oberon_css', array(
    'title'          => __( 'Custom Code' ),
    // 'description'    => __( 'Add custom CSS here' ),
    'panel'          => 'oberon_code', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_section( 'oberon_js', array(
    'title'          => __( 'Custom JS' ),
    // 'description'    => __( 'Add custom CSS here' ),
    'panel'          => 'oberon_code', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );
