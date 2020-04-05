<?php
/*
Template Name: FAQ Template
*/

get_header();

?>

<div class="faq-area1">
    <div class="faq-thumbnail">
        <?php the_post_thumbnail(); ?>
    </div>

    <div class="faq-banner-content">

        <div class="page-title">
            <h1><?php the_title(); ?></h1>
            <h2>How can we help you?</h2>
        </div>

        <div class="page-description">
            <p>Got a question? We are here to answer it!</p>
        </div>

    </div>
</div>


<div class="customposttype1-title">
    <h1>Frequently Asked Questions</h1>
</div>

<div class="faq-popular-question">
    <?php 
          $args = array(
            'post_type'     =>  'faq_popular_question',
            'order'         =>   'ASC'
          );
         
          $my_query = new WP_Query( $args );
         
          if ( $my_query->have_posts() ) :
            while ( $my_query->have_posts() ) :
              $my_query->the_post();
              get_template_part('template-parts/content-faq');
            endwhile;
          else :
            get_template_part('template-parts/content-none.php');
          endif;
        ?>
</div>

<div class="customposttype2-title">
    <h1>How to use Wanderlust?</h1>
</div>

<div class="faq-how-use">
    <?php 
          $args = array(
            'post_type'     =>  'faq_how_use',
            'order'         =>   'ASC'
          );
         
          $my_query = new WP_Query( $args );
         
          if ( $my_query->have_posts() ) :
            while ( $my_query->have_posts() ) :
              $my_query->the_post();
              get_template_part('template-parts/content-faq');
            endwhile;
          else :
            get_template_part('template-parts/content-none.php');
          endif;
        ?>
</div>

<?php
get_footer();