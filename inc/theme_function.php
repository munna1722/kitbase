<?php


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
    'default'          => __('Click Here', 'kitbase'),
    'sanitize_callback'=> 'sanitize_text_field',
  ));

  //add button  control
  $wp_customize->add_control('kitbase_button_text', array(
    'label'     => __('Button Text', 'kitbase'),
    'section'   => 'kitbase_header_area',
    'settings'  =>   'kitbase_button_text',
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

   // menu position
   

   $wp_customize->add_section('kitbase_menu_option', array(
    'title'       => __('Menu Position Option', 'kitbase'),
    'description' => 'Select the position of the menu in the header.',
));

// Menu Position Setting
$wp_customize->add_setting('kitbase_menu_option', array(
    'default'           => 'right_menu',
    'sanitize_callback' => 'sanitize_text_field', // Ensures the input is sanitized
));

// Menu Position Control
$wp_customize->add_control('kitbase_menu_option', array(
    'label'       => 'Menu Position',
    'description' => 'Select Your Menu Position',
    'settings'  =>   'kitbase_menu_option',
    'section'     => 'kitbase_menu_option',
    'type'        => 'radio',
    'choices'     => array(
        'default'    =>  'Default Menu',
        'left_menu'  => 'Left Menu',
        'right_menu' => 'Right Menu',
        'center_menu'=> 'Center Menu'
    ),
));

//footer option
$wp_customize->add_section('kitbase_footer_option', array(
  'title'       => __('Footer Option', 'kitbase'),
  'description' => 'Select the position of the footer.',
));

// Menu Position Setting
$wp_customize->add_setting('kitbase_copyright_section', array(
  'default'           => '&copy; Copyright 2024 ! Kitbase',
  'sanitize_callback' => 'sanitize_text_field', // Ensures the input is sanitized
));

// Menu Position Control
$wp_customize->add_control('kitbase_copyright_section', array(
  'label'       => 'Copyright text',
  'description' => 'if need you can update your Copyright text',
  'section'     => 'kitbase_menu_option',
  
  
 
));


 
}

add_action('customize_register', 'kitbase_customizer_register');