<?php 
/*
*This Template for displaing the header
*/


?>

<!DOCTYPE html>
<html lang="<?php language_attributes(  ); ?>" class="no-js"> 
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head();?>
  </head>
  <body <?php body_class(); ?>>
    <div id="header_area" class="<?php echo get_theme_mod('kitbase_menu_option');?>">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
              <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('kitbase_logo');?>" alt=""></a>
          </div>
          <div class="col-md-9">
            <div class="kitbase-nav-menu">
              <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav')); ?>
                 <div class="mobile-nav-menu">
                    <button class="menu-toggle">☰</button>
                    <div class="mobile-menu">
                        <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
                    </div>
                </div>
                  
            </div>
             <div class="kitbase-header-btn">
                <a href="#" class="btn btn-primary">
                  <?php echo esc_html(get_theme_mod('kitbase_button_text', 'Click Now')); ?>
                </a>
              </div>
           </div>
        </div>
      </div>
    </div>