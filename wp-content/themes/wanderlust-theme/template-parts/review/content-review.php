<article <?php post_class(); ?>>

    <figure>
        <?php the_post_thumbnail(); ?>
    </figure>

    <div class="area3-review-content">

        <div class="client-review">

            <h1>
                <?php the_field('quote'); ?>
            </h1>

            <h2>
                <?php the_field('client_review'); ?>
            </h2>
        </div>

        <div class="client-name">
            <?php the_field('client_name'); ?>
        </div>

        <div class="client-designation">
            <?php the_field('client_designation'); ?>
        </div>

        <div class="read-more-link">

            <?php if (is_front_page()) : ?>
  
                <a href="<?php the_field('review_read_more') ?> ">Read More</a>
  
            <?php endif; ?>

        </div>

    </div>

</article>