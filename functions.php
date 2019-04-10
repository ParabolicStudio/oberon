<?php
/**
 * Oberon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Oberon
 */

if ( ! function_exists( 'oberon_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function oberon_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Oberon, use a find and replace
		 * to change 'oberon' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'oberon', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'oberon' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );


		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'oberon_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function oberon_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'oberon_content_width', 700 );
}
add_action( 'after_setup_theme', 'oberon_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function oberon_scripts() {
	wp_enqueue_style( 'oberon-style', get_stylesheet_uri(), array(), '2.3' );

	if ( !class_exists( 'flbuilder' ) ) {
		wp_enqueue_style( 'oberon-fontawesome', "https://use.fontawesome.com/releases/v5.8.1/css/all.css" );
	}

	// wp_enqueue_script( 'oberon-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'oberon-popup-scripts', get_template_directory_uri() . '/assets/js/popup.js', array(), '20151215', true );

	wp_enqueue_script( 'oberon-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'oberon_scripts' );



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/oberon-template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce/woocommerce.php';
	require get_template_directory() . '/inc/woocommerce/woocommerce-functions.php';
}

// acf
require get_theme_file_path( 'inc/acf.php' );

/**
 * Load beaver builder compatibility file.
 */
if ( class_exists( 'flbuilder' ) ) {
	require get_template_directory() . '/inc/beaverbuilder/beaverbuilder.php';
}

if ( class_exists( 'flbuilder' ) && class_exists( 'FLThemeBuilder' ) ) {
	require get_template_directory() . '/inc/beaverbuilder/beaver-themer.php';
}


/**
 * Add shortcodes
 */

 require get_theme_file_path( 'inc/shortcodes.php' );


/**
 * Load Kirki compatibility file.
 */
 include_once get_theme_file_path( 'inc/kirki/class-kirki-installer-section.php' );

 if ( class_exists( 'kirki' ) ) {

	 require get_theme_file_path( 'inc/kirki/kirki-setup.php' );
	 // require get_theme_file_path( 'inc/kirki/kirki-customize.php' );
	 // require get_theme_file_path( 'inc/kirki/kirki-headers.php' );
	 require get_theme_file_path( 'inc/kirki/kirki-layout.php' );
	 require get_theme_file_path( 'inc/kirki/kirki-sidebar.php' );
	 require get_theme_file_path( 'inc/kirki/kirki-typography.php' );
	 require get_theme_file_path( 'inc/kirki/kirki-colors.php' );
	 require get_theme_file_path( 'inc/kirki/kirki-button.php' );
	 require get_theme_file_path( 'inc/kirki/kirki-fields.php' );
	 require get_theme_file_path( 'inc/kirki/kirki-mobile-menu.php' );
	 require get_theme_file_path( 'inc/kirki/kirki-code.php' );

	 if ( class_exists( 'WooCommerce' ) ) {
		 require get_theme_file_path( 'inc/kirki/kirki-woocommerce.php' );
	 }

 }


 // Admin stlyes
 require get_theme_file_path( 'inc/admin/admin-functions.php' );

 // Remove Admin Color Scheme.
 remove_action('admin_color_scheme_picker', 'admin_color_scheme_picker');


//
//  $debug_tags = array();
// add_action( 'all', function ( $tag ) {
//     global $debug_tags;
//     if ( in_array( $tag, $debug_tags ) ) {
//         return;
//     }
//     echo "<div>" . $tag . "</div>";
//     $debug_tags[] = $tag;
// } );
