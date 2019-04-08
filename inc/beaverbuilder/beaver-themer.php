<?php

function my_theme_header_footer_support() {
  add_theme_support( 'fl-theme-builder-headers' );
  add_theme_support( 'fl-theme-builder-footers' );
  add_theme_support( 'fl-theme-builder-parts' );
}
add_action( 'after_setup_theme', 'my_theme_header_footer_support' );


function my_theme_header_footer_render() {
  // Get the header ID.
  $header_ids = FLThemeBuilderLayoutData::get_current_page_header_ids();

  // If we have a header, remove the theme header and hook in Theme Builder's.
  if ( ! empty( $header_ids ) ) {
    remove_action( 'oberon_header', 'oberon_header_content', 10);
    add_action( 'oberon_header', 'FLThemeBuilderLayoutRenderer::render_header' );
  }
  // Get the footer ID.
  $footer_ids = FLThemeBuilderLayoutData::get_current_page_footer_ids();
  // If we have a footer, remove the theme footer and hook in Theme Builder's.
  if ( ! empty( $footer_ids ) ) {
    remove_action( 'oberon_footer', 'oberon_footer_content', 10 );
    add_action( 'oberon_footer', 'FLThemeBuilderLayoutRenderer::render_footer' );
  }
}
add_action( 'wp', 'my_theme_header_footer_render' );



add_action('fl_page_data_add_properties', function () {
    FLPageData::add_post_property('oberon_color', array(
        'label'   => 'My Connection',
        'group'   => 'site',
        'type'    => 'custom_field',
        'getter'  => 'my_connection_getter',
                'form'    => 'my_connection_form'
    ));
});
function my_connection_getter()
{
    return 'My text';
}



// Parts support


if ( class_exists( 'WooCommerce' ) ) {

  function oberon_register_part_hooks() {
    return array(
      array(
        'label' => 'Header',
        'hooks' => array(
          'oberon_before_header' => 'Before Header',
          'oberon_after_header'  => 'After Header',
        )
      ),
      array(
        'label' => 'Menus',
        'hooks' => array(
          'oberon_popup_menu' => 'Popup Menu',
          // 'genesis_after_header'  => 'After Header',
        )
      ),
      array(
        'label' => 'Account',
        'hooks' => array(
          'woocommerce_account_dashboard' => 'Account Dashboard',
          'woocommerce_thankyou' => 'Order Thankyou Page',
          // 'genesis_after_header'  => 'After Header',
        )
      ),
    );
  } add_filter( 'fl_theme_builder_part_hooks', 'oberon_register_part_hooks' );

} else {

  function oberon_register_part_hooks() {
    return array(
      array(
        'label' => 'Header',
        'hooks' => array(
          'oberon_before_header' => 'Before Header',
          'oberon_after_header'  => 'After Header',
        )
      ),
      array(
        'label' => 'Menus',
        'hooks' => array(
          'oberon_popup_menu' => 'Popup Menu',
          // 'genesis_after_header'  => 'After Header',
        )
      ),
    );
  } add_filter( 'fl_theme_builder_part_hooks', 'oberon_register_part_hooks' );

}
