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
    <div id="header_area">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
              <a href=""><img src="<?php echo get_theme_mod('kitbase_logo');?>" alt=""></a>
          </div>
          <div class="col-md-7">
              <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav')); ?>
            </div>
            <div class="col-md-2">
               <a href="<?php echo get_theme_mod('kitbase_button_link');?>" class="btn btn_primary">
                  <?php echo get_theme_mod('kitbase_button_text'); ?>
               </a>
            </div>
        </div>
      </div>
    </div>
    
  <?php wp_footer();?>
  </body>
</html>