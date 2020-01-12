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
                <header style="background-image: url('<?php echo get_theme_mod('header_image'); ?>');" 
                                                class="text-center d-flex justify-content-center flex-column">
                    <div class="img-perfil">
                        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_theme_mod('profile_image'); ?>" alt="test"></a>
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
                    <footer class="site-footer">
                    <p><?php bloginfo('description'); ?></p>
                    </footer>
                </header>
            </div>
            <div class="main col-lg-9">
                <div class="main-contenido">