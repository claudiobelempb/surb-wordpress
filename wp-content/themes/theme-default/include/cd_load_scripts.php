<?php
/*Função para carregamentos dos scripts*/
function cd_load_styles()
{
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '4.1.3', 'all');
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/css/fontawesome.min.css', array(), null, 'all');
    wp_enqueue_style('template', get_template_directory_uri().'/assets/css/templates.css', array(), '1.0', 'all');
}

function cd_load_scripts()
{
    wp_enqueue_script('template', get_template_directory_uri().'/assets/js/templates.js', array(), '1.0', true);
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), '4.1.3', true);
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array(), '3.3.1', true);
}