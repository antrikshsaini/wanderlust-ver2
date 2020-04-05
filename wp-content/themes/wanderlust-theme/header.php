<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div id="indicator"></div>

    <header class="site-header" id="site">
    <div class="site-branding">
        
        <div class="logo-wrapper">
            <?php the_custom_logo( ); ?>
        </div>

        <div class="menu-full">

            <?php wp_nav_menu(array(
                    'theme_location'    =>  'menu-main',
                    'menu_id'           =>  'menu-main',
                    'menu_class'        =>  'menu menu-primary',
                    'container'         =>  'nav',
                    )); 
                ?>
                
        </div>
        
        <div class="menu-button">
            <i class="fas fa-bars"></i>
        </div>
        
        <div class="menu-modal">

            <div class="close">
            	<span class="close-button">X</span>
            </div>

            <div class="main-menu">
                <?php wp_nav_menu(array(
                    'theme_location'    =>  'menu-main',
                    'menu_id'           =>  'menu-main',
                    'menu_class'        =>  'menu menu-primary',
                    'container'         =>  'nav',
                    )); 
                ?>
    
                <p> Follow us on </p>
                <?php wp_nav_menu(array(
                    'theme_location'    =>  'menu-social',
                    'menu_id'           =>  'menu-social',
                    'menu_class'        =>  'menu menu-primary',
                    'container'         =>  'nav',
                    'link_before'       => '<span class="visually-hidden">',
                )); 
                ?>
    
                <div class="download-buttons">
                
                    <div class="android-button">
                        <a target="_blank" href="https://www.apple.com/ca/ios/app-store/"><img src="<?php echo get_template_directory_uri(); ?>/img/download-app-store.png" /></a>
                    </div>
        
                    <div class="ios-button">
                        <a target="_blank" href="https://play.google.com/store"><img src="<?php echo get_template_directory_uri(); ?>/img/download-play-store.png" /></a>
                    </div>
                </div>
            
            </div>

        </div>

    </header>
<div id="primary" class="content-area">
  <main id="main" class="site-main">