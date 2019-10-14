# thefallingboy_wp
 Tema de wordpress

Se necesitan solo dos archivos para crear un tema personalizado de wordpress.

    - index.php
    - style.css

- Se debe seguir la [Jerarquia de temas](https://developer.wordpress.org/themes/basics/template-hierarchy/) para poder crear los archivos necesarios para el tema.
    - **index.php:**    plantilla para la pagina principal, este archivo entrada primero siempre que no exista algun otro por encima.
    - **single.php:**   plantilla para los "posts/entradas" existentes
    - **page.php:**     plantilla para las paginas existentes

- Todas las paginas deben llamar a los siguientes archivos desde sus respectivas posiciones, header primero, footer al final para tener
        dichas secciones funcionando correctamente.
    - **header.php:**    plantilla para el encabezado del tema, se llama con <?php get_header(); ?>
        - Ejemplo de un header basico
        ``` php
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/style.css">
        </head>
        <body>

        <header class="site-header">
            <h1>Site header</h1>
        </header>
        ```
    - **footer.php:**    plantilla para el pie de pagina del tema, se llama con <?php get_footer(); ?>
        - Ejemplo de un footer basico
        ``` php
        <footer class="site-footer">
            <p>Powered by black holes</p>
        </footer>

            </body>
        </html>
        ```

***Nota***  
> En los archivos header.php y footer.php se agregan el inicio y finall de las etiquetas html y body, las etiquetas que abren van en header.php y las de cierre van en footer.php  

Ejemplo de las plantillas index, single y page con el header y footer:
```php
    <?php get_header(); ?>

    <h2>Hola desde page.php<h2>

    <?php while(have_posts(  )): the_post();?>

        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>

    <?php endwhile; ?>

    <?php get_footer(); ?>
```
Se agrega tambien el loop mas utilizado de wordpress: *while(have_posts()): the post();*  
que permite acceder a diferentes funciones relacionadas con los posts o contenido de las paginas.  

*Funciones disponibles con el loop de wordpress:*
- Title (the_title())
- Time (the_time())
- Categories (the_category())

***functions.php***
- Archivo para agregar funciones propias del tema, todo lo que no tenga lugar en los diferentes archivos o plantillas.
    - Menus
        - Tener cuidado al declarar el menu, tambien hay que crearlo en las configuraciones con el nombre indicado en la funcion
    - CSS
        - El archivo styles.css; es decir el principal, se debe cargar desde functions, es posible cargalo desde header.php pero es recomendable hacerlo directamente desde aqui.
    - Javascript
    - Fuentes
        - Tambien se pueden agregar desde aca, recomendable usar Google fonts
- La forma en que se encolan los archivos depende del orden en como se quiere que se carguen a la hora de alguien entre a la pagina