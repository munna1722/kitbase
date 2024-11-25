<?php

function kitbase_customize_register($wp_customize) {
    $wp_customize->add_section('kitbase_layout_section', array(
        'title'   =>__('layout Section', 'kitbase'),
        'priority'=> 30,
    ));

    $wp_customize->add_setting('kitbase_layout_setting', array(
        'default'           => 'default',
        'sanitize_callback' => 'kitbase_sanitize_layout',
    ));

    $wp_customize->add_control('kitbase_layout_control', array(
        'label'    =>__('Select Layout', 'kitbase'),
        'section'  => 'kitbase_layout_section',
        'settings' => 'kitbase_layout_setting',
        'type'     => 'radio',
        'choices'  => array (
            'default'    =>__('Default Layout', 'Kitbase'),
            'fullwidth'  =>__('Full width (No Sidebar)', 'kitbase'),
        ),
    ));
}
add_action( 'customize_register', 'kitbase_customize_register');

// Sanitize the input
function kitbase_sanitize_layout($input) {
    $valid = array('default', 'fullwidth');
    return in_array($input, $valid) ? $input : 'default';
}