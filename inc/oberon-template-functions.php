<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Oberon
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function oberon_body_classes( $classes ) {
	// Get theme options

	// Layout
	$boxed_layout	= get_theme_mod( 'boxed_layout', false);

	if ( $boxed_layout == true) {
		$page_layout	= "boxed-layout";
	} else {
		$page_layout	= "full-page-layout";
	}

	// Header
	$header_postion  				= get_theme_mod( 'header_position', "top");

	if ( $header_postion == "top" ) {
			$header_attachment 				= get_theme_mod( 'header_attachment', "default");
			$header_attachment_mobile = get_theme_mod( 'header_attachment_mobile', "default");
	}

	$side_header_attachment = get_theme_mod( 'side_header_attachment', 0);


	if ( $side_header_attachment && $header_postion != "top" ) {
		$side_header_attached	= "fixed-side-header";
	} elseif ( !$side_header_attachment && $header_postion != "top" ) {
		$side_header_attached = "inline-side-header";
	}

	// Popup menu

	$pop_menu_toggle = get_theme_mod( 'popup_menu_toggle', 0);
	if ( $pop_menu_toggle == 1 ) {
		$pop_menu_style = 'popup-menu popup-menu-' . get_theme_mod( 'popup_menu_style', 'left-panel');
	}

	$pop_menu_preview = get_theme_mod( 'popup_menu_preview', 0);
	if ( $pop_menu_preview ) {
		$show_pop_menu_preview = "preview-popup-menu";
	}


	// Sidebar
	$lsbr  				 	= get_theme_mod( 'enable_lsbr', false);
	$lsbr_visible   = get_theme_mod( 'lsbr_visibility', array('home', 'blog', 'page', 'blog-posts', 'archive', ));
	$rsbr 					= get_theme_mod( 'enable_rsbr', false);
	$rsbr_visible   = get_theme_mod( 'rsbr_visibility', array('home', 'blog', 'page', 'blog-posts', 'archive', ));

	$lsbr_devices   = get_theme_mod( 'left_sidebar_devices', array('large', 'medium'));
	$rsbr_devices   = get_theme_mod( 'right_sidebar_devices', array('large', 'medium'));

	$wrap_lsbr_tablet = get_theme_mod( 'wrap_lsbr_tablet', true);
	$wrap_rsbr_tablet = get_theme_mod( 'wrap_rsbr_tablet', false);

	if ( $wrap_lsbr_tablet == true ) {
		$left_align_sidebar_on_tablet = "left_align_sidebar_on_tablet";
	}
	if ( $wrap_rsbr_tablet == true ) {
		$right_align_sidebar_on_tablet = "right_align_sidebar_on_tablet";
	}

	if ( class_exists( 'WooCommerce' ) ) {
		if ( is_product() ) {
			$is_product = true;
		}
		if ( is_shop() || is_product_category() || is_product_tag() ) {
			$is_shop = true;
		}
	}

	if ( is_archive() || is_author() || is_category() || is_tag() ) {
		if ( !$is_shop == true ) {
			$is_archive = true;
		}
	}


	if ( in_array("small", $lsbr_devices) ) {
		$lsbr_show_small = "lsbr-on-small";
	}
	if ( in_array("medium", $lsbr_devices) ) {
		$lsbr_show_medium = "lsbr-on-medium";
	}
	if ( in_array("large", $lsbr_devices) ) {
		$lsbr_show_large = "lsbr-on-large";
	}

	if ( in_array("small", $rsbr_devices) ) {
	  $rsbr_show_small = "rsbr-on-small";
	}
	if ( in_array("medium", $rsbr_devices) ) {
	  $rsbr_show_medium = "rsbr-on-medium";
	}
	if ( in_array("large", $rsbr_devices) ) {
	  $rsbr_show_large = "rsbr-on-large";
	}


	//
	// LEFT SIDEBAR
	//
	if ( $header_postion != "left" ) {

		// If the left isdebar is enabiled add "left-sdiebar" class to body
		if ( $lsbr == true ) {
			if (
				in_array("home", $lsbr_visible) && is_front_page() ||
				in_array("blog", $lsbr_visible) && is_home() ||
				in_array("page", $lsbr_visible) && is_page() && !is_front_page() ||
				in_array("shop", $lsbr_visible) && $is_shop == true ||
				in_array("product", $lsbr_visible) && $is_product == true ||
				in_array("archive", $lsbr_visible) && $is_archive == true ||
				in_array("blog-posts", $lsbr_visible) && is_single() && !$is_product == true
			 ) {
				 $classes[] = 'lsbr';
				 $classes[] = $lsbr_show_small;
				 $classes[] = $lsbr_show_medium;
				 $classes[] = $lsbr_show_large;
				 $classes[] = $left_align_sidebar_on_tablet;
			 }
	 	}
	}

	//
	// RIGHT SIDEBAR
	//
	if ( $header_postion != "right" ) {

		// If the left isdebar is enabiled add "left-sdiebar" class to body
		if ( true == $rsbr ) {
			if (
				in_array("home", $rsbr_visible) && is_front_page() ||
				in_array("blog", $rsbr_visible) && is_home() ||
				in_array("page", $rsbr_visible) && is_page() && !is_front_page() ||
				in_array("shop", $rsbr_visible) && $is_shop == true ||
				in_array("product", $rsbr_visible) && $is_product == true ||
				in_array("archive", $rsbr_visible) && $is_archive == true ||
				in_array("blog-posts", $rsbr_visible) && is_single() && !$is_product == true
			 ) {
				 $classes[] = 'rsbr';
				 $classes[] = $rsbr_show_small;
				 $classes[] = $rsbr_show_medium;
				 $classes[] = $rsbr_show_large;
				 $classes[] = $right_align_sidebar_on_tablet;
			 }
		}
	}

	// add the header postion to the body
	$classes[] = $page_layout;
	$classes[] = "header-" . $header_postion;
	$classes[] = "header-" . $header_attachment;
	$classes[] = "header-mobile-" . $header_attachment_mobile;
	$classes[] = $side_header_attached;
	$classes[] = $pop_menu_style;
	$classes[] = $show_pop_menu_preview;
	// Defalt to large device with no js

	if ( wp_is_mobile() ) {
		$classes[] = "small-device";
	} else {
		$classes[] = "large-device";
	}


	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}


	return $classes;
}
add_filter( 'body_class', 'oberon_body_classes' );


function oberon_basic_script() {

	$max_width     = get_theme_mod( 'max_breakpoint', 1100);
	$medium_device = get_theme_mod( 'medium_breakpoint', 992);
	$small_device  = get_theme_mod( 'small_breakpoint', 768);

	// break out of php ?>
<script type="text/javascript">

jQuery(document).ready(function($) {
  var alterClass = function() {
    var ww = document.body.clientWidth;

		// Add small device class
    if (ww <= <?php echo $small_device; ?>) {
      $('body').addClass('small-device');
			$('body').removeClass('medium-device');
    } else if (ww > <?php echo $small_device; ?>) {
      $('body').removeClass('small-device');
			$('body').addClass('medium-device');
    }

		// Add small device class
    if (ww > <?php echo $medium_device; ?>) {
			$('body').removeClass('medium-device');
			$('body').addClass('large-device');
    } else if (ww <= <?php echo $medium_device; ?>) {
      $('body').removeClass('large-device');
    }

  };

  $(window).resize(function(){
    alterClass();
  });
  //Fire it when the page first loads:
  alterClass();
});
</script>
<?php } // break back into php
add_action('wp_head','oberon_basic_script');



/**
 * Add css from customizer values
 */
function oberon_customizer_styles() {

	$max_width     = get_theme_mod( 'max_breakpoint', 1100);
	$medium_device = get_theme_mod( 'medium_breakpoint', 992);
	$small_device  = get_theme_mod( 'small_breakpoint', 768);

	$content_padding = get_theme_mod( 'content_padding', 20);
	$content_padding_half = $content_padding / 2;

	$under_max_width 		 = $max_width - 1;
	$under_medium_device = $medium_device - 1;
	$under_small_device  = $small_device - 1;

	$over_max_width 		 = $max_width + 1;
	$over_medium_device  = $medium_device + 1;
	$over_small_device   = $small_device + 1;

	$header_width = get_theme_mod( 'header_width', 200);
	$highlight_color = get_theme_mod( 'highlight_color', '#4169E1');

	// Get the body classess
	$classes = get_body_class();

	// Setup sidebar widths
	if ( in_array('lsbr-on-large', $classes) ) {
		$lsbr_width  = get_theme_mod( 'lsbr_width', 260);
	}
	if ( in_array('rsbr-on-large', $classes) ) {
		$rsbr_width = get_theme_mod( 'rsbr_width', 230);
	}
	$total_sidebar_width = $lsbr_width + $rsbr_width;

	// Setup sidebar widths
	if ( in_array('lsbr-on-medium', $classes) && in_array('left_align_sidebar_on_tablet', $classes) ) {
		$lsbr_tablet_width  = get_theme_mod( 'lsbr_tablet_width', 220);
	}
	if ( in_array('rsbr-on-medium', $classes) && in_array('right_align_sidebar_on_tablet', $classes) ) {
		$rsbr_tablet_width = get_theme_mod( 'rsbr_tablet_width', 180);
	}
	$total_sidebar_tablet_width = $lsbr_tablet_width + $rsbr_tablet_width;


	// Color color_pallete
	$field_bg_clr = get_theme_mod( 'field_background_color', '#fafafa' );
	$field_top_padding = get_theme_mod( 'field_padding', 10 );

	$saved_palette = get_theme_mod( 'color_pallete', 'light' );
	if ( 'light' == $saved_palette ) {
		$background_2 = '#ffffff';
		$background   = '#ECEFF1';
		$border_color = '#cccccc';
		$text_color 	= '#222222';
	} else if ( 'light2' == $saved_palette ) {
		$background_2 = '#ECEFF1';
		$background   = '#ffffff';
		$border_color = '#cccccc';
		$text_color 	= '#222222';
	} else if ( 'dark' == $saved_palette ) {
		$background  		= '#111111';
		$background_2   = '#222222';
		$border_color 	= '#444444';
		$text_color 		= '#eeeeee';
	} else if ( 'dark2' == $saved_palette ) {
		$background  		= '#141115';
		$background_2   = '#1D1E22';
		$border_color 	= '#333333';
		$text_color 		= '#eeeeee';
	}

	// Code

	$oberon_css = get_theme_mod( 'oberon_custom_css' );


  $custom_css = "
		body {
			background-color: {$background};
			color: {$text_color};
		}

		body::selection,
		body::-moz-selection {
		  background-color: {$highlight_color};
		}


		.site-header,
		.site-footer,
		tr.cart_item,
		.cart-collaterals .cart_totals,
		.zoomImg,
		.flex-viewport,
		.flex-control-nav li {
			background-color: {$background_2};
		}

		.boxed-layout .site,
		.header-left .site-wrap,
		.header-right .site-wrap,
		.site-content-wrap {
			max-width: {$max_width}px;
			width: 100%;
			margin-left: auto;
			margin-right: auto;
		}

		.site-left-sidebar,
		.site-right-sidebar {
			display: none;
		}


		.fl-builder-pagination li a.page-numbers:hover, .fl-builder-pagination li span.current {
			background-color: {$background_2};
		}

		.fl-builder-pagination li a.page-numbers, .fl-builder-pagination li span.page-numbers {
			border: solid 1px {$border_color};
		}

		fieldset,
		.woocommerce-cart tr.cart_item,
		.woocommerce-cart tr.cart_item img,
		.woocommerce-Tabs-panel,
		div.woocommerce-tabs ul.wc-tabs li,
		.cart_totals,
		.woocommerce-billing-fields__field-wrapper,
		.woocommerce-shipping-fields__field-wrapper,
		.woocommerce-additional-fields__field-wrapper,
		.woocommerce-checkout-payment,
		.woocommerce-checkout-review-order-table {
			border: solid 1px {$border_color};
		}

		.woocommerce-checkout-review-order-table tbody {
			border-left: solid 1px {$border_color};
			border-right: solid 1px {$border_color};
		}

		.woocommerce-checkout-review-order-table tbody tr {
			padding-left: {$content_padding_half}px;
			padding-right: {$content_padding_half}px;
		}

		div.woocommerce-tabs ul.tabs li a {
			background-color: {$background};
			padding: {$content_padding_half}px;
		}

		.woocommerce-Tabs-panel,
		div.woocommerce-tabs ul.tabs li.active a {
			background-color: {$background_2};
		}

		div.woocommerce-tabs ul.tabs li.active a {
			background-color: {$background_2};
			border-bottom: solid 1px {$background_2};
		}

		.woocommerce-Tabs-panel {
			padding: {$content_padding}px;
		}


		.small-device.woocommerce-cart tr.cart_item,
		.medium-device.woocommerce-cart tr.cart_item {
			padding: {$content_padding_half}px;
		}


		.woocommerce-product-gallery .flex-viewport,
		.flex-control-nav.flex-control-thumbs li{
			border: solid 1px {$border_color};
		}

		.flex-control-nav.flex-control-thumbs li {
			border-right: solid 1px {$border_color};
		}

		.cart-collaterals tr,
		.cart-collaterals td,
		.woocommerce-checkout-review-order-table tr,
		.small-device .woocommerce-MyAccount-navigation ul,
		.medium-device .woocommerce-MyAccount-navigation ul,
		.large-device .woocommerce-MyAccount-navigation ul li {
			border-bottom: solid 1px {$border_color};
		}

		.woocommerce-info,
		.woocommerce-message,
		.woocommerce-Message,
		.woocommerce-error li {
			padding: {$content_padding_half}px {$content_padding}px;
		}

		.woocommerce-account .shop_table tr td {
			background-color: {$background};
			padding: {$content_padding_half}px;
		}

		.woocommerce-checkout-review-order-table,
		.woocommerce-checkout-payment,
		.woocommerce-billing-fields__field-wrapper,
		.woocommerce-shipping-fields__field-wrapper,
		.woocommerce-additional-fields__field-wrapper,
		.large-device .woocommerce-MyAccount-content {
			background-color: {$background_2};
		}


		.woocommerce-MyAccount-content {
			padding: {$content_padding}px;
		}

		.woocommerce-MyAccount-navigation ul li.is-active {
			background: {$background_2};
		}

		.large-device .woocommerce-MyAccount-navigation ul li:not(.is-active) {
			border-right: solid 1px {$border_color};
		}

		.woocommerce-checkout .woocommerce-order {
			background-color: {$background};
			border: solid 1px {$background_2};
		}


		.woocommerce-checkout .woocommerce-order .woocommerce-thankyou-order-details {
			background-color: {$background_2};
			padding: {$content_padding_half}px 0;
		}

		.woocommerce-checkout .woocommerce-order .woocommerce-order-details thead,
		.woocommerce-checkout .woocommerce-order .woocommerce-order-details tfoot,
		.woocommerce-order-pay #order_review {
			background-color: {$background_2};
		}

		.woocommerce-order-pay #order_review tbody {
			background-color: {$background};
		}

		.woocommerce-thankyou-order-details li,
		.woocommerce-checkout .woocommerce-order .woocommerce-order-details tr,
		.woocommerce-order-pay #order_review .shop_table tr {
			padding: {$content_padding_half}px {$content_padding}px;
		}

		.woocommerce-order-pay #order_review  tr,
		.woocommerce-thankyou-order-details li:not(:last-child) {
			border-bottom: solid 1px {$background};
		}

		.order_details:before, .order_details:after {
	    background: -webkit-linear-gradient(transparent 0,transparent 0),
			-webkit-linear-gradient(135deg,{$background_2} 33.33%,transparent 33.33%),
			-webkit-linear-gradient(45deg,{$background_2} 33.33%,transparent 33.33%);
		}

		.woocommerce-MyAccount-navigation li a {
			padding: {$content_padding_half}px;
		}

		.woocommerce .form-row-first {
			margin-right: {$content_padding_half}px;
		}

		.woocommerce .form-row-last {
			margin-left: {$content_padding_half}px;
		}

		body.large-device.woocommerce-cart .woocommerce-cart-form {
			flex-basis: calc(100% - 300px - {$content_padding}px) !important;
		}


		.woocommerce .form-row-first,
		.woocommerce .form-row-last {
			flex-basis: calc(50% - {$content_padding_half}px) !important;
			display: inline-block;
			width: calc(50% - {$content_padding_half}px) !important;
		}

		#add_payment_method .button {
			margin-top: {$content_padding}px;
		}

		li.wc_payment_method .payment_box {
			background-color: {$background};
			margin-left: -{$content_padding}px;
			margin-right: -{$content_padding}px;
		}

		li.wc_payment_method .payment_box::before {
			border-bottom-color: {$background} !important;
		}



		@media only screen and (max-width: {$small_device}px) {

			.lsbr-on-small .site-left-sidebar,
			.rsbr-on-small .site-right-sidebar {
				display: block;
			}
		}

		@media only screen and (min-width: {$over_small_device}px)  {

			.header-left.inline-side-header .site-wrap,
			.header-right.inline-side-header .site-wrap {
				display: flex;
			}

			.header-left.inline-side-header .site-content,
			.header-right.inline-side-header .site-content {
				flex-basis: calc(100% - {$header_width}px);
				width: calc(100% - {$header_width}px);
			}

			.header-left.inline-side-header .site-header,
			.header-right.inline-side-header .site-header {
				flex-basis: {$header_width}px;
				width: {$header_width}px;
			}

			.header-left.inline-side-header .site-header {
				order: 0;
			}
			.header-left.inline-side-header .site-content {
				order: 1;
			}

			.header-right.inline-side-header .site-header {
				order: 1;
			}
			.header-right.inline-side-header .site-content {
				order: 0;
			}



			.header-left.fixed-side-header {
				margin-left: calc({$header_width}px - 1px);
			}

			.header-right.fixed-side-header {
				margin-right: calc({$header_width}px - 1px);
			}

			.fixed-side-header .site-header {
				position: fixed;
				z-index: 99;
				top: 0;
				height: 100%;
				width: {$header_width}px;
			}

			.header-left .site-header {
				left: 0;
			}

			.header-right .site-header {
				right: 0;
			}

		}

		@media only screen and (min-width: {$over_small_device}px) and (max-width: {$medium_device}px) {

			.lsbr-on-medium.left_align_sidebar_on_tablet .site-content .site-content-wrap,
			.rsbr-on-medium.right_align_sidebar_on_tablet .site-content .site-content-wrap {
				display: flex;
				flex-wrap: wrap;
			}

			.lsbr-on-medium .site-left-sidebar,
			.rsbr-on-medium .site-right-sidebar {
				display: block;
			}

			.lsbr.left_align_sidebar_on_tablet .content-area {
				order: 1;
			}

			.content-area {
				flex-basis: calc(100% - {$total_sidebar_tablet_width}px);
				width: calc(100% - {$total_sidebar_tablet_width}px);
			}

			.site-left-sidebar,
			.site-right-sidebar {
				flex-basis: 100%;
				order: 3;
			}

			.left_align_sidebar_on_tablet .site-left-sidebar {
				order: 0;
				width: {$lsbr_tablet_width}px;
				flex-basis: {$lsbr_tablet_width}px;
			}

			.right_align_sidebar_on_tablet .site-right-sidebar {
				order: 2;
				width: {$rsbr_tablet_width}px;
				flex-basis: {$rsbr_tablet_width}px;
			}

		}


		@media only screen and (min-width: {$over_medium_device}px) {

			.lsbr-on-large .site-content .site-content-wrap,
			.rsbr-on-large .site-content .site-content-wrap {
				display: flex;
			}

			.lsbr-on-large .site-left-sidebar,
			.rsbr-on-large .site-right-sidebar {
				display: block;
			}

			.lsbr .content-area {
				order: 1;
			}

			.content-area {
				flex-basis: calc(100% - {$total_sidebar_width}px);
				width: calc(100% - {$total_sidebar_width}px);
			}

			.site-left-sidebar {
				order: 0;
				flex-basis: {$lsbr_width}px;
				width: {$lsbr_width}px;
			}

			.site-right-sidebar {
				order: 2;
				flex-basis: {$rsbr_width}px;
				width: {$rsbr_width}px;
			}
		}

		{$oberon_css}
		";
	wp_register_style( 'custom-css', false );
	wp_enqueue_style( 'custom-css' );
  wp_add_inline_style( 'custom-css', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'oberon_customizer_styles' );


/**
 * Sticky header
 */
function oberon_sticky_header() {

	$classes = get_body_class();

	if (in_array('header-sticky', $classes)) {

		wp_enqueue_script( 'oberon-sticky-js', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array(), '20151215', true );

	}
}
add_action( 'wp_enqueue_scripts', 'oberon_sticky_header');

/**
 * fade header
 */
function oberon_fade_header() {

	$classes = get_body_class();

	if (in_array('header-fade', $classes) || in_array('header-mobile-fade', $classes) ) {

		wp_enqueue_script( 'oberon-sticky-js', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array(), '20151215', true );
		wp_enqueue_script( 'oberon-fade-js', get_template_directory_uri() . '/assets/js/jquery.header-fade.js', array(), '20151215', true );

	}
}
add_action( 'wp_enqueue_scripts', 'oberon_fade_header');



/**
 * Add header
 */
function oberon_header_content() {
 	?>
<header>
	<div class="site-content-wrap site-padding">
	  <div class="site-branding">

			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<?php $oberon_description = get_bloginfo( 'description', 'display' );

			if ( $oberon_description || is_customize_preview() ) { ?>
				<p class="site-description"><?php echo $oberon_description; /* WPCS: xss ok. */ ?></p>
			<?php } ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</div>
</header><!-- #masthead -->

 <?php
}
add_action( 'oberon_header', 'oberon_header_content', 10 );

/**
 * Add header
 */
function oberon_popup_menu() {
	// check if the class "lsbr" is added to body
	$show_popup = get_theme_mod( 'popup_menu_toggle', 0);

	$show_popup = get_theme_mod( 'popup_menu_toggle', 0);
	$show_popup_preview = get_theme_mod( 'popup_menu_preview', 0);

	if ( $show_popup_preview  == 0 && is_customize_preview() ) {

		// Do nothing

	} else if ( $show_popup == 1 || $show_popup_preview  == 1 ) {
	   ?>
		 	<div id="oberon-popup-menu" class="oberon-popup-menu">

				<!-- <a id="oberon-popup-menu-close" class="oberon-popup-menu-close" href="#0">Close Menu</a> -->

				<div class="oberon-popup-menu-content site-content-wrap">
					<!-- <h1>POPUP MENU</h1> -->
					<?php do_action( 'oberon_popup_menu' ) ?>
				</div>

		 	</div>

			<div id="popup-menu-overlay" class="popup-menu-overlay"></div>
		 <?php
	}
}
add_action( 'oberon_before_page', 'oberon_popup_menu', 10 );

/**
 * Add footer
 */
function oberon_footer_content() {
 ?>
 	<footer id="colophon" class="site-footer site-padding">
		<div class="site-content-wrap">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'oberon' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'oberon' ), 'WordPress' );
					?>
				</a>
			  <span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'oberon' ), 'oberon', '<a href="https://parabolic.studio/">Parabolic</a>' );
				?>
		 	</div><!-- .site-info -->
		</div>
	 </footer><!-- #colophon -->
 <?php
}
add_action( 'oberon_footer', 'oberon_footer_content', 10 );

/**
 * Add left sidebar
 */
function oberon_lsbr() {

	// check if the class "lsbr" is added to body
	$classes = get_body_class();
	if (in_array('lsbr', $classes)) {
	   ?>
		 	<aside class="site-left-sidebar site-padding">
				<h1>LEFT SIDEBARE</h1>
		 	</aside>
		 <?php
	}
}
add_action( 'oberon_sidebar', 'oberon_lsbr', 10 );
add_action( 'woocommerce_sidebar', 'oberon_lsbr', 10 );

/**
 * Add right sidebar
 */
function oberon_rsbr() {

	// check if the class "lsbr" is added to body
	$classes = get_body_class();
	if (in_array('rsbr', $classes)) {
	   ?>
		 	<aside class="site-right-sidebar site-padding">
				<h1>RIGHT SIDEBARE</h1>
		 	</aside>
		 <?php
	}
}
add_action( 'oberon_sidebar', 'oberon_rsbr', 20 );
add_action( 'woocommerce_sidebar', 'oberon_rsbr', 20 );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function oberon_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'oberon_pingback_header' );

/**
 * Add page content header
 */
function oberon_page_content_header() {
	if ( !class_exists( 'flbuilder' ) && !FLBuilderModel::is_builder_enabled() ) { ?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	<?php }
}
add_action( 'oberon_page_header', 'oberon_page_content_header', 10 );


/**
 * Remove the additional CSS section, introduced in 4.7, from the Customizer.
 * @param $wp_customize WP_Customize_Manager
 */
function prefix_remove_css_section( $wp_customize ) {
	$wp_customize->remove_section( 'custom_css' );
}
add_action( 'customize_register', 'prefix_remove_css_section', 15 );
