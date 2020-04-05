<?php ?>
<article <?php post_class(); ?>>


  <div class="faq-post-question">
    <?php the_field('question_faq'); ?>
  </div>
 
  <div class="faq-post-answer">
    <?php the_field('answer_faq'); ?>
  </div>
  
</article>