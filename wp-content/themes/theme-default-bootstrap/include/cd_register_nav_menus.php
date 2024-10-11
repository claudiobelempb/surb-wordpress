<?php
/*Função para menus */
// register_nav_menus(
//     array(
//         'menu_principal' => 'Menu Principal',
//         'menu_secundario' => 'Menu Secundario'
//     )
// );

function cd_after_setup()
{
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('video', 'image'));
    add_theme_support('menus');
    register_nav_menus(
        array(
            'primary' => 'Primary Menu',
            'menu_secundario' => 'Menu Secundario'
        )
    );
}
