<?php ?>

<article <?php post_class(); ?>>

    <div class="cta-thumbnail">

        <h1>
            <?php the_post_thumbnail(); ?>
        </h1>
    </div>

    <div class="cta-content">

        <div class="cta-heading">
            <h2>
                <?php the_field('review_cta_heading'); ?>
            </h2>
    
            <p>
                <?php the_field('review_cta_details'); ?>
            </p>
        </div>
    
        <div class="cta-buttons">
    
            <a target="_blank" href="https://play.google.com/">
                <img src="<?php the_field('review_cta_button_1'); ?>">
            </a>
    
            <a target="_blank" href="https://www.apple.com/ca/ios/app-store/">
                <img src="<?php the_field('review_cta_button_2'); ?>">
            </a>
            
        </div>

    </div>



</article>