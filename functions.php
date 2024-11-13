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

//Theme Function
//add logo
function kitbase_customizer_register($wp_customize) {
  $wp_customize->add_section('kitbase_header_area', array(
    'title'      =>__('Header Area', 'kitbase'),
    'description'=> 'if you interested to update your  header logo image.'
  ));

  //add logo setting
  $wp_customize->add_setting('kitbase_logo', array(
    'default' => get_bloginfo('template_directory') . '/img/logo.png',
    'sanitize_callback' => 'esc_url_raw', // Ensures the URL is properly sanitized
  ));

  //add logo control
  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'kitbase_logo', array(
    'label'      => 'Logo Update',
    'description'=> 'if you interested to change .',
    'setting'    => 'kitbase_logo',
    'section'    => 'kitbase_header_area',
  ) ));

  // add Button Text 
  $wp_customize->add_setting('kitbase_button_text', array(
    'default'          => 'Click Here',
    'sanitize_callback'=> 'sanitize_text_field',
  ));

  //add button  control
  $wp_customize->add_control('kitbase_button_text', array(
    'label'     => 'Button Text',
    'section'   => 'kitbase_header_area',
    'type'      => 'text',
  ));

  //add button link
   $wp_customize->add_setting('kitbase_button_link', array(
    'default'  => '#',
    'sanitize_callback'=> 'esc_uri_raw',
   ));
  
   //add button control
   $wp_customize->add_control('kitbase_button_link', array(
     'label'   => 'Button Link',
     'section' => 'kitbase_header_area',
     'type'    => 'uri',
   ));
 
}

add_action('customize_register', 'kitbase_customizer_register');
?>