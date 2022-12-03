<?php
/**
 * The Header File
 * 
 * This file powers the header section of our site
 * 
 * @package Woo Theme
 */

 ?>
<!-- Dont Forget to make some html attributes dynamic -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta <?php bloginfo( 'charset' ); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <div id="page" class="site">

    <!-- Site Header -->
    <?php get_template_part( 'template-parts/header/site-header' );?>

    
    <div id="content" class="content-area">

    <!-- add Content Area Templates Here -->


    