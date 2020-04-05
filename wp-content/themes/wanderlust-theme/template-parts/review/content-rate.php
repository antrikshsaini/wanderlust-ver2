<?php ?>


<article <?php post_class(); ?>>

    <div class="area4-review-content">

        <div class="rate-company">

            <h1>
                <?php the_field('company_name'); ?>
            </h1>
        </div>

        <div class="awards">
            <h2>
                <?php the_field('awards'); ?>
            </h2>
        </div>

        <div class="r">
            <p>
                <?php the_field('review_comments'); ?>
            </p>
        </div>

    </div>

</article>