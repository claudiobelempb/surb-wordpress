<?php
/*Função para carregamentos dos scripts*/
function cd_load_styles()
{
    wp_enqueue_style('template', get_template_directory_uri().'/assets/css/templates.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri(). './assets/css/bootstrap.min.css', array(), '5.1.0', 'all');
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/css/fontawesome.min.css', array(), null, 'all');
}

function cd_load_scripts()
{
    wp_enqueue_script('template', get_template_directory_uri().'/assets/js/templates.js', array(), '1.0', true);
    wp_enqueue_script('bootstrap',  get_template_directory_uri(). '/assets/js/bootstrap.bundle.min.js', array('jquery'), '5.1.0', true);
}