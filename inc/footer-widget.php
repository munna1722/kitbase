<?php


// Register Footer Widgets
function kitbase_register_footer_widgets() {
    register_sidebar(array(
        'name'          => __('Footer Widget 1', 'kitbase'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here for Footer Widget 1.', 'kitbase'),
        'before_widget' => '<div class="footer-widget footer-1">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 2', 'kitbase'),
        'id'            => 'footer-2',
        'description'   => __('Add widgets here for Footer Widget 2.', 'kitbase'),
        'before_widget' => '<div class="footer-widget footer-2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 3', 'kitbase'),
        'id'            => 'footer-3',
        'description'   => __('Add widgets here for Footer Widget 3.', 'kitbase'),
        'before_widget' => '<div class="footer-widget footer-3">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 4', 'kitbase'),
        'id'            => 'footer-4',
        'description'   => __('Add widgets here for Footer Widget 4.', 'kitbase'),
        'before_widget' => '<div class="footer-widget footer-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'kitbase_register_footer_widgets');
