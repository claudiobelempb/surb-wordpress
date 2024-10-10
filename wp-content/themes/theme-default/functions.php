<?php

require get_template_directory().'./include/setup.php';
add_action('wp_enqueue_styles', 'cd_load_styles');
add_action('wp_enqueue_scripts', 'cd_load_scripts');
add_action('after_setup_theme', 'cd_after_setup');
