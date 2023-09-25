<?php

// Change all instances of eatery_theme to your theme name.
if ( ! function_exists( 'eatery_theme_setup' ) ) :
 
   function eatery_theme_setup() {
     add_theme_support( 'automatic-feed-links' );
     add_theme_support( 'title-tag' );
     add_theme_support( 'post-thumbnails' );
     add_theme_support( 'custom-logo', array(
        'height' => 800,
        'width' => 800,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description')
     ) );
     register_nav_menus( array(
      'main_menu'   =>    'Main Menu',
      'main_social' =>    'Social Menu',
     ));
   }
 
endif;
 
add_action('after_setup_theme', 'eatery_theme_setup');
 
function eatery_theme_scripts_styles(){
   wp_enqueue_style('eatery_theme_style', get_stylesheet_uri(), array(), time());
}
 
add_action('wp_enqueue_scripts', 'eatery_theme_scripts_styles');