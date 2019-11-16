<?php

function tfb_blog_menu() {
    register_nav_menus(array(
        'menu-header' => __('Menu Header', 'thefalllingboy_blog')
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



$defaults = array(
    'default-color'          => '',
    'default-preset'         => 'fill',
	'default-image'          => '',
	'default-attachment'     => 'fixed',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );



function customizer_seccions($wp_customize){
    $wp_customize->add_section( 'custom_image' , array(
        'title'    => __( 'Imagenes', 'thefallingboy' ),
        'priority' => 30
    ) );   

    //Imagen para el fondo del header
    $wp_customize->add_setting( 'header_image' , array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo1', array(
            'label'      => __( 'Imagen para el header', 'theme_name' ),
            'section'    => 'custom_image',
            'settings'   => 'header_image' 
    ) ) );

    //Imagen del usuario
    $wp_customize->add_setting( 'profile_image' , array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo2', array(
            'label'      => __( 'Imagen de perfil', 'theme_name' ),
            'section'    => 'custom_image',
            'settings'   => 'profile_image' 
    ) ) );
}

add_action('customize_register', 'customizer_seccions');