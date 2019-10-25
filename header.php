<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>
</head>

<body>

    <div class="container-fluid principal">
        <div class="row">
            <div class="col-lg-4">
                <header>
                    <div class="contenedor" style="background-image: url('<?php echo get_background_image();?>');">
                        <div class="imagen_user">
                            <img src="<?php echo get_theme_mod('imagen1');?>" alt="">
                        </div>
                        <div class="barra-navegacion">
                            <?php
                            $args = array(
                                'theme_location' => 'menu-header',
                                'container' => 'nav',
                                'container-class' => 'menu-header',
                            );
                            wp_nav_menu($args);
                            ?>
                        </div>
                    </div>
                </header>
            </div>
            <div class="main col-lg-8">