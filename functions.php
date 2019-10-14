<?php

function tfb_blog_menu() {
    register_nav_menus(array(
        'menu-principal' => __( 'Menu Principal', 'thefallingboy_blog' )
    ));
}

add_action( 'init', 'tfb_blog_menu' );



function tfb_scripts_styles(){
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    wp_enqueue_style(
        'googleFont', 
        'https://fonts.googleapis.com/css?family=Anton|Libre+Franklin:400,900|Roboto+Condensed:400,700i&display=swap', 
        array(), '1.0.0');



    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');
}

add_action('wp_enqueue_scripts', 'tfb_scripts_styles',);