<?php

require get_template_directory().'./include/cd_load_scripts.php';
add_action('wp_enqueue_scripts', 'cd_load_styles');
add_action('wp_enqueue_scripts', 'cd_load_scripts');

require get_template_directory().'./include/cd_register_nav_menus.php';