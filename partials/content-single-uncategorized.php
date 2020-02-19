<div class="post-uncategorized-single">
    <div class="row row-uncategorized-post-single">
        <div class="col-4 post-informacion">
            <div class="posicion-informacion">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?> on <?php the_category('-'); ?></small>
            </div>
        </div>
        <div class="col-8 post-contenido">
            <?php the_content(); ?>
        </div>
    </div>
</div>