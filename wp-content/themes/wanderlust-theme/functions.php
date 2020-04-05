<?php

if ( ! function_exists( 'wanderlust_setup' ) ) :
 
   function wanderlust_setup() {
     add_theme_support( 'automatic-feed-links' );
     add_theme_support( 'title-tag' );
     add_theme_support( 'post-thumbnails');
     add_theme_support( 'html5' , array('search-form') );

     add_theme_support( 'custom-logo', array(
      'height'      => 800,
      'width'       => 800,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'site-title', 'site-description' ),
      ) );

     register_nav_menus( array(
      'menu-main'   =>  'Primary Menu', 
      'menu-social'   =>  'Social Menu', 
      ) );
   }
 
endif;
 
add_action('after_setup_theme', 'wanderlust_setup');
 
function wanderlust_scripts_styles(){
   wp_enqueue_style('wanderlust_style', get_stylesheet_uri());
   wp_enqueue_style( 'wanderlust_google_font', "https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800&display=swap");
   wp_enqueue_style( 'wanderlust_fawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css' );
   wp_enqueue_script( 'wanderlust_menu_js', get_template_directory_uri() . '/js/main.js', array(), true, true);
}
 
add_action('wp_enqueue_scripts', 'wanderlust_scripts_styles');