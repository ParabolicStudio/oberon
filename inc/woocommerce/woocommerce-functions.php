<?php

// Remove the woocommerce sidebar
function disable_woo_commerce_sidebar() {
	remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
}
add_action('init', 'disable_woo_commerce_sidebar');

// Remove the woocommerce sidebar
function add_wc_order_review_heading2() {
	?>
	<div class="wc-left-col-wrapper">
	<?php
}
add_action('woocommerce_checkout_before_customer_details', 'add_wc_order_review_heading2', 0);

// Remove the woocommerce sidebar
function add_wc_order_review_heading3() {
	?>
	</div>
	<div class="wc-right-col-wrapper">
	<?php
}
add_action('woocommerce_checkout_after_customer_details', 'add_wc_order_review_heading3', 1000);

// Remove the woocommerce sidebar
function add_wc_order_review_heading4() {
	?>
	</div>
	<?php
}
add_action('woocommerce_checkout_after_order_review', 'add_wc_order_review_heading4', 1000);


// Remove the woocommerce sidebar
function add_wc_account_menu_toggle() {
	?><a class="button account-menu-toggle" id="oberon-wc-account-menu-toggle">Menu</a><?php
}
add_action('woocommerce_account_navigation', 'add_wc_account_menu_toggle', 0);


// Remove Content editor
function remove_editor() {
  remove_post_type_support('product', 'editor');
}
add_action('admin_init', 'remove_editor');

/**
 * Remove Custom Fields meta box
 */
 function remove_metaboxes() {
      remove_meta_box( 'postcustom' , 'product' , 'normal' );
      remove_meta_box( 'postexcerpt' , 'product' , 'normal' );
      remove_meta_box( 'commentsdiv' , 'product' , 'normal' );
      remove_meta_box( 'postimagediv' , 'product' , 'side' );
      remove_meta_box( 'woocommerce-product-images',  'product', 'side');
 }
 add_action( 'add_meta_boxes' , 'remove_metaboxes', 50 );


// Add custom fields



function my_acf_add_local_field_groups() {

	acf_add_local_field_group(array(
		'key' => 'group_5ca11ac2596f3',
		'title' => 'Product Description',
		'fields' => array(
			array(
				'key' => 'field_5ca14fce12d9e',
				'label' => 'Short Description',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_5ca14fe1b06fa',
				'label' => '',
				'name' => 'oberon_content_short_description',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => 'oberon_wc_product_disc',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
			array(
				'key' => 'field_5ca14fc212d9d',
				'label' => 'Full Description',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_5ca11ad5e0cf4',
				'label' => '',
				'name' => 'oberon_content_editor',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => 'oberon_wc_product_disc',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'product',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

acf_add_local_field_group(array(
	'key' => 'group_5ca13d420754b',
	'title' => 'Product Images',
	'fields' => array(
		array(
			'key' => 'field_5ca123c8f5f76',
			'label' => '',
			'name' => 'oberon_product_gallery',
			'type' => 'gallery',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'oberon_wc_product_gallery',
				'id' => 'oberon_wc_product_gallery',
			),
			'min' => '',
			'max' => '',
			'insert' => 'append',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'product',
			),
		),
	),
	'menu_order' => 10,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

} add_action('acf/init', 'my_acf_add_local_field_groups');



// if ( class_exists( 'WooCommerce' ) ) {
//Auto add and update Title field:
  function my_post_title_updater( $post_id ) {

    $my_post = array();
    $my_post['ID'] = $post_id;

// custom post type
    $foo = get_field('foo');

    if ( get_post_type() == 'product' ) {
      $my_post['post_excerpt'] = get_field('oberon_content_short_description');
      $my_post['post_content'] = get_field('oberon_content_editor');
    }

    // Update the post into the database
    wp_update_post( $my_post );

  }

  // run after ACF saves the $_POST['fields'] data
  add_action('acf/save_post', 'my_post_title_updater', 20);
  //END Auto add and update Title field:
// }


// Set the first image in the acf gallery field as the featured image

function flex_FeaturedImageSetByACF() {

    $current_screen         = get_current_screen(); // Current admin screen needed to identify the current cpt
    $current_cpt_name       = $current_screen->post_type; // Current cpt name
    $current_cpt_support    = 'thumbnail'; // We want to check if the CPT supports this feature

    global $post;

    $post_id                = ( $post->ID ); // Current post ID
    $post_gallery_field     = get_field('oberon_product_gallery', $post_id ); // ACF field


    if  ( !empty( $post_id ) ) {

        if ( isset( $post_gallery_field['0'] ) ) {

            $post_image_id          = $post_gallery_field['0']['id']; // ACF image filed ID
            $post_image_url         = $post_gallery_field['0']['url']; // ACF image filed URL

            // If current cpt supports thumbnails/featured images

            if ( post_type_supports( $current_cpt_name, $current_cpt_support ) ) {

                if ( ( $post_image_url ) AND ( ( $post_image_url ) != ( get_the_post_thumbnail() ) ) ) {

                    update_post_meta($post_id, '_thumbnail_id', $post_image_id);

                }

            }

        } else {

            update_post_meta( $post_id, '_thumbnail_id', 0 );

        }

    }

} add_action('acf/save_post', 'flex_FeaturedImageSetByACF', 50);

// Add images in acf gallery field to the woocommerce product gallery

function use_acf_fields_for_product_photos($post_id) {

    if('product' != get_post_type($post_id)) {
      return false;
    }

    $images = get_field('oberon_product_gallery');

    if( $images ) {

    		$count = 0;

    		foreach( $images as $image ) {

    			if ($count == 0) {

    			} else {

    				$items[] = $image['ID'];

    			}

    			$count++;

    		}

  		$product_gallery_ids_string = implode(',', $items);

      update_post_meta($post_id, '_product_image_gallery', $product_gallery_ids_string);

    }

  }
add_action('acf/save_post', 'use_acf_fields_for_product_photos', 20);



$wc_info_tab = get_theme_mod( 'product_info_tab', 1);
if ($wc_info_tab == 0) {
	function bbloomer_remove_product_tabs( $tabs ) {

		unset( $tabs['additional_information'] );
		return $tabs;
	}
	add_filter( 'woocommerce_product_tabs', 'oberon_remove_product_tabs', 98 );
}
