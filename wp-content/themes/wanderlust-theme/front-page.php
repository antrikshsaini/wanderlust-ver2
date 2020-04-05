<?php
/*
Template Name: Homepage
*/

get_header(); ?>

<div class="home-area1-wrapper">

    <div class="home-area1">

        <div class="area1-heading">
            <h2>Discover new events with</h2>
            <h1>Wanderlust</h1>

            <div class="area1-download">
                <p>Get Wanderlust Free At</p>

                <div class="area1-download-pics">
                    <a target="_blank" href="https://www.apple.com/ca/ios/app-store/">
                      <figure class="wp-block-image size-large"><img
                              src="http://localhost:8888/wanderlust/wp-content/uploads/2020/03/download-app-store.png"
                              alt="" class="wp-image-53"></figure>
                    </a>
                    <a target="_blank" href="https://play.google.com/store">
                      <figure class="wp-block-image size-large"><img
                              src="http://localhost:8888/wanderlust/wp-content/uploads/2020/03/download-play-store.png"
                              alt="" class="wp-image-55"></figure>
                    </a>
                </div>
            </div>
        </div>

        <div class="home-phone">

            <figure class="wp-block-image size-large">
                <?php the_post_thumbnail(); ?>
            </figure>

        </div>

    </div>

</div>

<div class="home-area2">

    <?php 
          $args = array(
            'post_type'       =>  'home_what',
            'order'           =>  'ASC'
          );
         
          $my_query = new WP_Query( $args );
         
          if ( $my_query->have_posts() ) :
            while ( $my_query->have_posts() ) :
              $my_query->the_post();
              get_template_part('template-parts/home/content-home-what');
            endwhile;
          else :
            get_template_part('template-parts/content-none.php');
          endif;
    ?>
</div>


<div class="home-area3">

    <div class="area3-heading">
        <h1>Why Wanderlust?</h1>
    </div>

    <?php 
          $args = array(
            'post_type'       =>  'home_why',
            'order'           =>  'ASC'
          );
         
          $my_query = new WP_Query( $args );
         
          if ( $my_query->have_posts() ) :
            while ( $my_query->have_posts() ) :
              $my_query->the_post();
              get_template_part('template-parts/home/content-home-why');
            endwhile;
          else :
            get_template_part('template-parts/content-none.php');
          endif;
    ?>
</div>


<div id="feature" class="home-area4">

    <div class="area4-heading">
        <h1>Features</h1>
    </div>

    <?php 
          $args = array(
            'post_type'       =>  'home_feature',
            'order'           =>  'ASC'
          );
         
          $my_query = new WP_Query( $args );
         
          if ( $my_query->have_posts() ) :
            while ( $my_query->have_posts() ) :
              $my_query->the_post();
              get_template_part('template-parts/home/content-home-feature');
            endwhile;
          else :
            get_template_part('template-parts/content-none.php');
          endif;
    ?>
</div>

<div class="review-area3">

    <div class="review-title-posts">
        <h1>REVIEWS</h1>
    </div>

    <?php 
          $args = array(
            'post_type'       =>  'review_client',
            'posts_per_page'   =>  '1',
            'orderby'         =>  'rand'
          );
         
          $my_query = new WP_Query( $args );
         
          if ( $my_query->have_posts() ) :
            while ( $my_query->have_posts() ) :
              $my_query->the_post();
              get_template_part('template-parts/review/content-review');
            endwhile;
          else :
            get_template_part('template-parts/content-none.php');
          endif;
    ?>
</div>


<div class="home-area6">
<div class="area6-heading">
    <h1> WANDERLUST </h1>
    <h2> Unforgettable starts here </h2>
</div>

<button type="submit"><a target="_blank" href="https://play.google.com/">Get Wander Free</a></button>


</div>


<?php get_footer(); ?>