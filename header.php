<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Oberon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
	<link rel="profile" href="https://gmpg.org/xfn/11">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'oberon_before_page' ) ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'oberon' ); ?></a>

	<div class="site-wrap">

	<?php do_action( 'oberon_before_header' ) ?>

	<div id="masthead" class="site-header">

		<?php do_action( 'oberon_header' ) ?>

	</div><!-- #masthead -->

	<?php do_action( 'oberon_after_header' ) ?>


	<div id="content" class="site-content">
		<div class="site-content-wrap">
