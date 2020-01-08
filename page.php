<?php get_header(); ?>

<h2>Hola desde page.php<h2>

<?php while(have_posts(  )): the_post();?>

    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>

<?php endwhile; ?>