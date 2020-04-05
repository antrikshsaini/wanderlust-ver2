<?php ?>


  </main>   <!-- .site-main -->
  <footer class="site-footer" id="site-footer">
    <?php wp_nav_menu(array(
          'theme_location'    =>  'menu-main',
          'menu_id'           =>  'menu-main',
          'menu_class'        =>  'menu menu-primary',
          'container'         =>  'nav',
          )); 
    ?>

    <?php wp_nav_menu(array(
          'theme_location'    =>  'menu-social',
          'menu_id'           =>  'menu-social',
          'menu_class'        =>  'menu menu-social',
          'container'         =>  'nav',
          'link_before'       =>  '<span class="visually-hidden">',
          )); 
    ?>


    <p>  &copy; Copyright Wanderlust - 2020. All Rights Reserved.</p>

    </footer>
</div>      <!-- .content-area -->
<?php wp_footer(); ?>
</body>
</html>