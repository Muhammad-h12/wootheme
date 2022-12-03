<?php 

/**
 * The Template powers up all the static Pages
 * 
 * @package wootheme
 */

get_header(); ?>

    <!-- Display Posts -->

    <?php
        if( have_posts() ):

            while( have_posts() ): the_post();
            ?>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-sm-12">
                
                        <h2><?php echo the_title(); ?></h2>
                        <p><?php echo the_content(); ?></p>
                    </div>
                </div>
            </div>    
            <?php                
            endWhile;
        else:
    ?>
        <p>No posts were found</p>
        <?php endif;
    ?>  


<?php get_footer(); ?>