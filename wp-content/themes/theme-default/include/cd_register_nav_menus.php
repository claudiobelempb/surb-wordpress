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
    add_theme_support('menus');
    register_nav_menus(
        array(
            'primary' => 'Primary Menu',
            'menu_secundario' => 'Menu Secundario'
        )
    );
}
