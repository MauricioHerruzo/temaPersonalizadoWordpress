<?php

function zoo_styles(){
    wp_enqueue_style(
        'zoo-main-style',
        get_template_directory_uri()."/style.css",
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'zoo_styles');

// CON ESTO AÑADIMOS A WORDPRESS LA OPCION DE CREAR MENÚS 
// ------------------------
//Creamos una ubicacion para cargar los menus que luego podemos crear en wordpres con enlaces a páginas
function mis_menus(){
    register_nav_menus(
        array("menu-principal"=> __("Menú Principal", "zooeag"))
    );
};
//momento en el que se va a cargar
add_action("after_setup_theme", "mis_menus");
// ------------------------------ 


function zoo_widgets_init(){
    register_sidebar(
        array(
            'name' => __('Pie de Página', 'zooeag'),
            'id' => 'footer-1',
            'description' => __('Widget para el pie de página', 'zooeag'),
            'before_widget'=> '<div id= "%1$s" class= "widget %2$s">',
            'after_widget' => '</div>',
            'before_title'=> '< class= "widget-title">',
            'after_title'=> '</h2>'
        )
        );
}
add_action('init','zoo_widgets_init');

//Activar imagen Destacada
function zoo_setup(){
    add_theme_support('post-thumbnails');
    //Para ajustar el tamaño sin que se deforme
    add_image_size('custom-medium',600,400,true);
}

add_action('after_setup_theme','zoo_setup');


function mis_scripts(){

    wp_enqueue_script('jquery');

    wp_register_script(
        'mi-script-personalizado',
        get_template_directory_uri() . '/assets/js/script.js',
        array('jquery'),
        '1.0.0',
        true
    );
    wp_enqueue_script('mi-script-personalizado');
}

add_action('wp_enqueue_scripts', 'mis_scripts');
?>