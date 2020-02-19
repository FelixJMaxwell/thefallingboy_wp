<?php get_header(); ?>

<!-- <h1>Hola desde single.php</h1> -->

<?php while(have_posts(  )): the_post();?>

    <article <?php post_class(); ?> >
        <?php if (in_category('imagenes')) : ?>
            <?php get_template_part('partials/content','single-imagenes'); ?>
        <?php elseif (in_category('uncategorized')) : ?>
            <?php get_template_part('partials/content','single-uncategorized'); ?>
        <?php elseif (in_category('proyecto')) : ?>
            <?php get_template_part('partials/content','single-proyectos'); ?>
        <?php elseif (in_category('textos')) : ?>
            <?php get_template_part('partials/content','single-textos'); ?>
        <?php endif; ?>
    </article>

<?php endwhile; ?>