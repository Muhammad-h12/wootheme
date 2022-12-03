<?php
/**
 * This template powers up the home page of this theme
 * 
 * @package Woo Theme
 */

get_header(); ?>

    <?php
        if( have_posts() ):
            while( have_posts() ): the_post();
                echo the_title(); ;
            endWhile;
        endif;?>    
<?php get_footer(); ?>