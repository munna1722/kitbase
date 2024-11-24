<?php


function kitbase_register_sidebar() {
    register_sidebar(array(

        'name'          => __('Sidebar Widget', 'kitbase'),
        'id'            => 'kitbase-sidebar',
        'description'   => __('Add widgets here to appear in your sidebar.', 'kitbase'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',

    ));

}
add_action('widgets_init', 'kitbase_register_sidebar');




