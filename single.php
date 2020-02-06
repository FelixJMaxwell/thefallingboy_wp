<?php get_header(); ?>

<!-- <h1>Hola desde single.php</h1> -->

<?php while(have_posts(  )): the_post();?>

    <article <?php post_class(); ?> >
        <?php if (in_category('imagenes')) : ?>
            <div class="post-imagenes">
                <?php the_content() ?>
            </div>
        <?php elseif (in_category('uncategorized')) : ?>
            <div class="post-uncategorized">
                <?php the_content() ?>
            </div>
        <?php elseif (in_category('proyecto')) : ?>
            <div class="post-proyecto">
                <?php the_content() ?>
            </div>
        <?php elseif (in_category('textos')) : ?>
            <div class="post-textos-single">
                <div class="row row-text-post-single">
                    <div class="col-lg-4 post-informacion">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?> on <?php the_category('-'); ?></small>
                    </div>

                    <div class="col-lg-8 post-contenido">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </article>

<?php endwhile; ?>