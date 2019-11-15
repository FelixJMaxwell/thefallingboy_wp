<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container-fluid principal">
        <div class="row">
            <div class="col-lg-3 main-div-section">
                <header style="background-image: url('<?php echo get_theme_mod('background_image'); ?>');" class="text-center d-flex justify-content-center flex-column">
                    <div class="img-perfil">
                        <img src="<?php echo get_theme_mod('profile_image'); ?>" alt="test">
                    </div>
                    <div class="menu-sidebar">
                        <?php
                        $args = array(
                            'theme_location' => 'menu-header',
                            'container' => 'nav',
                            'container_class' => 'menu-header',
                        );
                        wp_nav_menu($args);
                        ?>
                    </div>
                </header>
            </div>
            <div class="main col-lg-9">
                <div class="main-contenido">