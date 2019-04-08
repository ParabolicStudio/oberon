<?php
function remove_unwanted_css(){
	wp_dequeue_style('font-awesome');
}
add_filter('wp_print_styles', 'remove_unwanted_css');


// //Add color presets for Beaver Builder
// function my_builder_color_presets( $colors ) {
//
//
// 		// Color color_pallete
// 		$highlight_color = get_theme_mod( 'highlight_color', "#4169E1");
// 		$highlight_hover_color = get_theme_mod( 'highlight_hover_color', "#307ff7");
// 		$saved_palette = get_theme_mod( 'color_pallete', 'light' );
// 		if ( 'light' == $saved_palette ) {
// 			$background_2 = '#ffffff';
// 			$background   = '#ECEFF1';
// 			$border_color = '#cccccc';
// 			$text_color 	= '#222222';
// 		} else if ( 'light2' == $saved_palette ) {
// 			$background_2 = '#ECEFF1';
// 			$background   = '#ffffff';
// 			$border_color = '#cccccc';
// 			$text_color 	= '#222222';
// 		} else if ( 'dark' == $saved_palette ) {
// 			$background  		= '#111111';
// 			$background_2   = '#222222';
// 			$border_color 	= '#444444';
// 			$text_color 		= '#eeeeee';
// 		} else if ( 'dark2' == $saved_palette ) {
// 			$background  		= '#141115';
// 			$background_2   = '#1D1E22';
// 			$border_color 	= '#555555';
// 			$text_color 		= '#eeeeee';
// 		}
//
//     $colors = array();
//
//       $colors[] = $background;
//       $colors[] = $background_2;
//       $colors[] = $border_color;
//       $colors[] = $text_color;
//       $colors[] = $highlight_color;
//       $colors[] = $highlight_hover_color;
//
//     return $colors;
// }
// add_filter( 'fl_builder_color_presets', 'my_builder_color_presets' );
