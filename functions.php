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
