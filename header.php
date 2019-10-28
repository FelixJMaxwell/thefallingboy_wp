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
                <header style="background-image: url('<?php echo get_background_image(); ?>');">
                    <div class="imagen_user text-center">
                        <img src="<?php echo get_theme_mod('imagen2'); ?>" alt="test">
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
                </header>
            </div>
            <div class="main col-lg-8">