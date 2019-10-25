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

    wp_enqueue_style('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");

    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');
}

add_action('wp_enqueue_scripts', 'tfb_scripts_styles',);


$args = array(
    'default-color' => '000000',
    'default-image' => '%1$s/images/background.jpg',
);
add_theme_support('custom-background', $args);

function nueva_imagen($wp_customize){
    $wp_customize->add_section( 'custom_image' , array(
        'title'    => __( 'Imagenes', 'thefallingboy' ),
        'priority' => 30
    ) );   

    $wp_customize->add_setting( 'imagen1' , array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo1', array(
            'label'      => __( 'Upload a logo', 'theme_name' ),
            'section'    => 'custom_image',
            'settings'   => 'imagen1' 
    ) ) );

    $wp_customize->add_setting( 'imagen2' , array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo2', array(
            'label'      => __( 'Upload a logo', 'theme_name' ),
            'section'    => 'custom_image',
            'settings'   => 'imagen2' 
    ) ) );
}

add_action('customize_register', 'nueva_imagen');