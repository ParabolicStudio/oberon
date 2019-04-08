<?php
// Extended subscription function with subscription type variable
function oberon_year_shrtcode( ) {

  return date('Y');

}
add_shortcode( 'year', 'oberon_year_shrtcode' );


// Extended subscription function with subscription type variable
function oberon_signin_shrtcode( ) {

  if ( is_user_logged_in() ) {

    global $current_user; wp_get_current_user();
     // return 'Username: ' . $current_user->user_login . "\n";
     return 'Hi, ' . $current_user->display_name . "\n";

  } else {
    return "Sign In";
  }

}
add_shortcode( 'signin_text', 'oberon_signin_shrtcode' );

// Extended subscription function with subscription type variable
function oberon_deisigned_by_shrtcode( ) {

  return "<a class='designed_by_img' href='https://parabolic.studio' target='_blank'><img alt='Deisigned by Parabolic' src='".  get_template_directory_uri() . "/assets/images/designed-by-parabolic.svg'></a>";

}
add_shortcode( 'deisgned_by', 'oberon_deisigned_by_shrtcode' );




// Extended subscription function with subscription type variable
function oberon_social_share_facebook_shrtcode( ) {
  $page_url = get_permalink($post->ID);

  return 'https://www.facebook.com/sharer/sharer.php?u=' . $page_url;
}
add_shortcode( 'share_facebook', 'oberon_social_share_facebook_shrtcode' );


function oberon_social_share_pinterest_shrtcode( ) {
  $page_url = get_permalink($post->ID);
  $post_thumbnail_url = get_the_post_thumbnail_url();

  return 'https://pinterest.com/pin/create/button/?url='. $page_url . '&media=' . $post_thumbnail_url;
}
add_shortcode( 'share_pinterest', 'oberon_social_share_pinterest_shrtcode' );

function oberon_social_share_twitter_shrtcode( ) {
  $page_url = get_permalink($post->ID);

  return 'https://twitter.com/intent/tweet?source=' . $page_url . '&text=' . $page_url;
}
add_shortcode( 'share_twitter', 'oberon_social_share_twitter_shrtcode' );

function oberon_social_share_email_shrtcode( ) {
  $page_url  = get_permalink($post->ID);
  $site_name = get_bloginfo( 'name' );
  $post_name = get_the_title( $ID );;

  return 'mailto:?subject=' . $site_name . ' - ' . $post_name . '&body=' . $post_name . ' from ' . $site_name . ' ' . $page_url;
}
add_shortcode( 'share_email', 'oberon_social_share_email_shrtcode' );
