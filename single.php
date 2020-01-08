<?php get_header(); ?>

<!-- <h1>Hola desde single.php</h1> -->

<?php while(have_posts(  )): the_post();?>

    <?php if (in_category('imagenes')) : ?>
        <div class="post-imagenes">
            <?php the_content() ?>
        </div>
    <?php endif; ?>

<?php endwhile; ?>