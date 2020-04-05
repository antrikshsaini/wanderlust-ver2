<?php
/*
Template Name: OURTEAM Template
*/

get_header();
?>
<div class="team-area1">

    <div class="team-thumbnail">
        <?php the_post_thumbnail(); ?>
    </div>

    <div class="team-banner-content">

        <div class="page-title">
            <h1><?php the_title(); ?></h1>
            <h2>Know more about us</h2>
        </div>

        <div class="page-description">
            <p>Get to know who are the amazing people behind this product.</p>
        </div>

    </div>
    
</div>

<div class="team-area2">
    <?php 
          $args = array(
            'post_type'       =>  'our_team',
            'order'         =>   'DSC'
          );
         
          $my_query = new WP_Query( $args );
         
          if ( $my_query->have_posts() ) :
            while ( $my_query->have_posts() ) :
              $my_query->the_post();
              get_template_part('template-parts/content-our-team');
            endwhile;
          else :
            get_template_part('template-parts/content-none.php');
          endif;
        ?>
</div>

<?php
get_footer();