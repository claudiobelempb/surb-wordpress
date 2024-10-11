<?php
if (function_exists('register_sidebar')) {
    register_sidebar(
        array(
            'name' => 'Barra Lateral 1',
            'id' => 'sidebar-1',
            'description' => 'Barra lateral da página Home 1',
            'before_widget' => '<div class"widget_wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class"widget_title">',
            'after_title' => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name' => 'Barra Lateral 2',
            'id' => 'sidebar-2',
            'description' => 'Barra lateral da página Home 2',
            'before_widget' => '<div class"widget_wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class"widget_title">',
            'after_title' => '</h2>',
        )
    );
};
