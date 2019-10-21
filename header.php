<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <header>
                    <div class="contenedor">
                        <div class="barra-navegacion">
                            <img src="<?php background_image(); ?>" alt="fondoh">
                            <?php
                            $args = array(
                                'theme_location' => 'menu-principal',
                                'container' => 'nav',
                                'container-class' => 'menu-principal',
                            );
                            wp_nav_menu($args);
                            ?>
                        </div>
                    </div>
                </header>
            </div>
            <div class="main col-lg-8">