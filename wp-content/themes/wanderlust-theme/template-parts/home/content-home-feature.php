<?php ?>

<article <?php post_class(); ?>>

    <figure>
        <?php the_post_thumbnail(); ?>
    </figure>

    <div class="area4-content">

        <div class="number">
            <h2><?php the_field('home_feature_number'); ?></h2>
        </div>

        <h1><?php the_field('home_feature_title'); ?></h1>

        <p> <?php the_field('home_feature_description'); ?> </p>

    </div>

</article>