<?php

//acá se cargan las hojas de estilo
function load_css()
{
    // wp_register_style registra una hoja de estilos para usarla en el tema.
    // Parámetros:
    // 1. 'bootstrap': identificador único del estilo.
    // 2. get_template_directory_uri() . '/css/bootstrap.min.css': URL del archivo CSS.
    // 3. array(): dependencias (ninguna en este caso).
    // 4. false: versión (false usa la versión del tema o ninguna).
    // 5. media
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}
//here we make the function run and hook it to the header
add_action('wp_enqueue_scripts','load_css');

//hy acá el js
function load_js()
{

    // wp_register_script registra un archivo JavaScript para usarlo en el tema.
    // Parámetros:
    // 1. 'bootstrapjs': identificador único del script.
    // 2. get_template_directory_uri().'/css/boostrap.bundle.min.js': URL del archivo JS 
    // 3. dependencia (ahora bootstrap funciona con vanilla js y no necesita jquery).
    // 4. false: versión (false usa la versión del tema o ninguna).
    // 5. true: carga el script en el footer.
    wp_register_script('bootstrapjs',get_template_directory_uri().'/js/bootstrap.bundle.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrapjs');
}
add_action('wp_enqueue_scripts','load_js');


// Opciones del Tema
add_theme_support('menus');


// Menús
register_nav_menus(

    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
    )
);