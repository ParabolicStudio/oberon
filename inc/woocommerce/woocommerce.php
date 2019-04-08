<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package Oberon
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */
function oberon_woocommerce_setup() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'oberon_woocommerce_setup' );

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function oberon_woocommerce_scripts() {
	wp_enqueue_style( 'oberon-woocommerce-style', get_template_directory_uri() . '/woocommerce.css', array(), '3.1' );

	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style( 'oberon-woocommerce-style', $inline_font );
}
add_action( 'wp_enqueue_scripts', 'oberon_woocommerce_scripts' );

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function oberon_woocommerce_active_body_class( $classes ) {
	$wc_prod_gall_col 			= get_theme_mod( 'wc_product_gallery_col', 6);
	$wc_catalog_col_desktop = get_theme_mod( 'wc_products_col_desktop', 4);
	$wc_catalog_col_tablet  = get_theme_mod( 'wc_products_col_tablet',  3);
	$wc_catalog_col_phone   = get_theme_mod( 'wc_products_col_phone',   2);

	$classes[] = 'woocommerce-active';
	$classes[] = 'wc-catalog-col-num-desktop-' . $wc_catalog_col_desktop;
	$classes[] = 'wc-catalog-col-num-tablet-'  . $wc_catalog_col_tablet;
	$classes[] = 'wc-catalog-col-num-phone-'   . $wc_catalog_col_phone;
	$classes[] = 'wc-product-gallery-col-'   . $wc_prod_gall_col;

	return $classes;
}
add_filter( 'body_class', 'oberon_woocommerce_active_body_class' );

/**
 * Products per page.
 *
 * @return integer number of products.
 */
function oberon_woocommerce_products_per_page() {
	return 12;
}
add_filter( 'loop_shop_per_page', 'oberon_woocommerce_products_per_page' );

// /**
//  * Product gallery thumnbail columns.
//  *
//  * @return integer number of columns.
//  */
// function oberon_woocommerce_thumbnail_columns() {
//
// 	$wc_prod_gall_col = get_theme_mod( 'wc_product_gallery_col', 6);
//
// 	return $wc_prod_gall_col;
// }
// add_filter( 'woocommerce_product_thumbnails_columns', 'oberon_woocommerce_thumbnail_columns' );

/**
 * Default loop columns on product archives.
 *
 * @return integer products per row.
 */
function oberon_woocommerce_loop_columns() {
	return 4;
}
add_filter( 'loop_shop_columns', 'oberon_woocommerce_loop_columns' );











/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function oberon_woocommerce_related_products_args( $args ) {

	$wc_related_prod_count = get_theme_mod( 'wc_related_products_count', 4);
	$wc_related_prod_cols  = get_theme_mod( 'wc_related_products_col', 4);

	$defaults = array(
		'posts_per_page' => $wc_related_prod_count,
		'columns'        => $wc_related_prod_cols,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'oberon_woocommerce_related_products_args' );


// if ( ! function_exists( 'oberon_woocommerce_product_columns_wrapper' ) ) {
// 	/**
// 	 * Product columns wrapper.
// 	 *
// 	 * @return  void
// 	 */
// 	function oberon_woocommerce_product_columns_wrapper() {
// 		$columns = oberon_woocommerce_loop_columns();
// 		echo '<div class="columns-' . absint( $columns ) . '">';
// 	}
// }
// add_action( 'woocommerce_before_shop_loop', 'oberon_woocommerce_product_columns_wrapper', 40 );
//
//
//
//
// if ( ! function_exists( 'oberon_woocommerce_product_columns_wrapper_close' ) ) {
// 	/**
// 	 * Product columns wrapper close.
// 	 *
// 	 * @return  void
// 	 */
// 	function oberon_woocommerce_product_columns_wrapper_close() {
// 		echo '</div>';
// 	}
// }
// add_action( 'woocommerce_after_shop_loop', 'oberon_woocommerce_product_columns_wrapper_close', 40 );




/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );



if ( ! function_exists( 'oberon_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function oberon_woocommerce_wrapper_before() {
		?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			<?php
	}
}
add_action( 'woocommerce_before_main_content', 'oberon_woocommerce_wrapper_before' );

if ( ! function_exists( 'oberon_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function oberon_woocommerce_wrapper_after() {
			?>
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php
	}
}
add_action( 'woocommerce_after_main_content', 'oberon_woocommerce_wrapper_after' );

/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
	<?php
		if ( function_exists( 'oberon_woocommerce_header_cart' ) ) {
			oberon_woocommerce_header_cart();
		}
	?>
 */

if ( ! function_exists( 'oberon_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function oberon_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		oberon_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'oberon_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'oberon_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function oberon_woocommerce_cart_link() {
		?>
		<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'oberon' ); ?>">
			<?php
			$item_count_text = sprintf(
				/* translators: number of items in the mini cart. */
				_n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'oberon' ),
				WC()->cart->get_cart_contents_count()
			);
			?>
			<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> <span class="count"><?php echo esc_html( $item_count_text ); ?></span>
		</a>
		<?php
	}
}

if ( ! function_exists( 'oberon_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function oberon_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php oberon_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
				$instance = array(
					'title' => '',
				);

				the_widget( 'WC_Widget_Cart', $instance );
				?>
			</li>
		</ul>
		<?php
	}
}

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );







// Qunity plus and minus


// Avoid direct plugin access
if ( ! defined( 'ABSPATH' ) ) {
	die( '¯\_(ツ)_/¯' );
}

// Show warning if WooCommerce is not active or WooCommerce version < 2.3
add_action( 'admin_notices', function () {
	global $woocommerce;
	global $woocommerce;

	if ( ! class_exists( 'WooCommerce' ) || version_compare( $woocommerce->version, '2.3', '<' ) ) {
		$class   = 'notice notice-warning is-dismissible';
		$message = __( 'SMNTCS WooCommerce Quantity Buttons requires at least WooCommerce 2.3.', 'smntcs-woocommerce-quantity-buttons' );

		printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) );
	}
} );

// Load localisation
add_action( 'plugins_loaded', function () {
	load_plugin_textdomain( 'smntcs-woocommerce-quantity-buttons', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
} );

// Enqueue script
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/assets/js/wc.js', array( 'jquery' ), false, true );

	// wp_enqueue_style( 'custom-style', plugins_url( 'custom.css', __FILE__ ), null, false, 'screen' );
} );

// Load WooCommerce template
add_filter( 'woocommerce_locate_template', function ( $template, $template_name, $template_path ) {
	global $woocommerce;

	$_template     = $template;
	$plugin_path   = untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/template/';
	$template_path = ( ! $template_path ) ? $woocommerce->template_url : null;
	$template      = locate_template( array( $template_path . $template_name, $template_name ) );

	if ( ! $template && file_exists( $plugin_path . $template_name ) ) {
		$template = $plugin_path . $template_name;
	}

	if ( ! $template ) {
		$template = $_template;
	}

	return $template;
}, 1, 3 );
