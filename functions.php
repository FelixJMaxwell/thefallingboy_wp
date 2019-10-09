<?php

function tfb_blog_menu() {
    register_nav_menus(array(
        'menu-principal' => __( 'Menu Principal', 'thefallingboy_blog' )
    ));
}

add_action( 'init', 'tfb_blog_menu' );