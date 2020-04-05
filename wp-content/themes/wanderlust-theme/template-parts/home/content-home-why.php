<?php ?>

<article <?php post_class(); ?>>

    <figure>
        <?php the_post_thumbnail(); ?>
    </figure>

    <div class="area3-content">

        <h2><?php the_field('home_why_title'); ?></h2>

        <p> <?php the_field('home_why_description'); ?> </p>

    </div>

</article>