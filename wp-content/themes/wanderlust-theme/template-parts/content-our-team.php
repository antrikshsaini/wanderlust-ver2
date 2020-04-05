<?php ?>
<article <?php post_class(); ?>>

    <div class="post-thumbnail">
        <?php the_post_thumbnail(); ?>
    </div>

    <div class="member-info">

      <div class="member-name">
          <?php the_field('member_name'); ?>
      </div>
  
      <div class="member-role">
          <?php the_field('member_role'); ?>
      </div>
  
      <div class="member-details">
          <?php the_field('member_details'); ?>
      </div>

    </div>

</article>