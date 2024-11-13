<?php 
/*
*My Theme Function
*/

// Theme Title
add_theme_support( 'title_tag' );


//Theme css and jQuery file colling

function kit_css_js_calling() {
  wp_enqueue_style('kit-style', get_stylesheet_uri());

  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '5.0.2', 'all');
  wp_enqueue_style('bootstrap');
  wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
  wp_enqueue_style('custom');

  //Jquery
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'bootstrap', get_template_directory_uri(). '/js/bootstrap.js', array(), '5.0.2', 'true');
  wp_enqueue_script( 'main', get_template_directory_uri(). '/js/main.js', array(), '1.0.0', 'true');
  
}

add_action('wp_enqueue_scripts', 'kit_css_js_calling' );
?>