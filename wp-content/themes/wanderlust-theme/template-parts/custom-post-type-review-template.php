<?php
/*
Template Name: REVIEW Template
*/

get_header();
?>

<div class="review-area1">
    <figure>
        <?php the_post_thumbnail(); ?>
    </figure>

    <div class="review-area1-content">

        <div class="review-area1-heading">
            <h1><?php the_title(); ?></h1>
            <h2>Get in touch with us </h2>
        </div>

        <div class="review-area1-intro">
            <p>It is more than just an application! See what other users have said about Wanderlust.</p>
        </div>

    </div>
</div>

<div class="review-area2">

    <?php 
          $args = array(
            'post_type'       =>  'review_intro',
            'order'           =>  'ASC'
          );
         
          $my_query = new WP_Query( $args );
         
          if ( $my_query->have_posts() ) :
            while ( $my_query->have_posts() ) :
              $my_query->the_post();
              get_template_part('template-parts/review/content-review-intro');
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
            'order'           =>  'ASC'
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

<div class="review-area4">

    <div class="rate-title-posts">
        <h1>RATES</h1>
    </div>

    <div class="rate-content">
        <?php 
              $args = array(
                'post_type'       =>  'review_app',
                'order'           =>  'ASC'
              );
             
              $my_query = new WP_Query( $args );
             
              if ( $my_query->have_posts() ) :
                while ( $my_query->have_posts() ) :
                  $my_query->the_post();
                  get_template_part('template-parts/review/content-rate');
                endwhile;
              else :
                get_template_part('template-parts/content-none.php');
              endif;
        ?>
    </div>
</div>


<div class="review-area5">

    
        <?php 
              $args = array(
                'post_type'       =>  'review_cta'
              );
             
              $my_query = new WP_Query( $args );
             
              if ( $my_query->have_posts() ) :
                while ( $my_query->have_posts() ) :
                  $my_query->the_post();
                  get_template_part('template-parts/review/content-review-cta');
                endwhile;
              else :
                get_template_part('template-parts/content-none.php');
              endif;
        ?>
   
</div>


<?php get_footer(); ?>