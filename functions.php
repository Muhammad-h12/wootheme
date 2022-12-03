<?php
/**
 * Woo Theme Functions and Definitions
 * 
 * @package Woo Theme
 */

 function woo_theme_scripts() {

    // Register Styles
    wp_register_style( 'woo-theme-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . './style.css' ), 'all' );

    wp_register_style( 'bootstrap-css',get_template_directory_uri() . '/assets/library/css/bootstrap.min.css', [] , false, 'all' );

    // Register Scripts
    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/library/js/bootstrap.min.js', array( 'jquery' ) , false , true );

    //Enqueue Styles 
    wp_enqueue_style('woo-theme-style');
    wp_enqueue_style('bootstrap-css');
    
    // Enqueue Scripts
    wp_enqueue_script( 'bootstrap-js' );

 }

add_action( 'wp_enqueue_scripts', 'woo_theme_scripts' );


function woo_theme_setup() {

   // resgister custom Naviagtion walker

   require_once get_template_directory() . '/assets/class-wp-bootstrap-navwalker.php';
   
   register_nav_menus(
      array(
         'woo_theme_main_menu' => 'Woo Theme Main Menu',
         'woo_theme_footer_menu' => 'Woo Theme Footer Menu'
      )
   );

   add_theme_support( 'woocommerce' );

   add_theme_support( 'wc-product-gallery-zoom' );
   add_theme_support( 'wc-product-gallery-lightbox' );
   add_theme_support( 'wc-product-gallery-slider' );
}

add_action( 'after_setup_theme', 'woo_theme_setup' );