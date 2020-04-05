<?php 

get_header(); 

/* Start the Loop */

the_title();

while ( have_posts() ) :
    the_post();
    the_content();


endwhile; // End of the loop.


get_footer();