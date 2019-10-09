<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

<header class="site-header">
    <h1>Site header</h1>
    
    <?php 
        $args = array(
            'theme_location' => 'menu-principal',
            'container' => 'nav',
            'container_class' => 'menu-principal',
        );
        wp_nav_menu($args);
    ?>
</header>