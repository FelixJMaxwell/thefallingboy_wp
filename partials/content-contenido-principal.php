<article <?php post_class("pagina-principal"); ?>>
    <?php if(in_category('textos')) : ?>
        <div class="row">
            <div class="col-6 post-informacion">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?> on <?php the_category('-'); ?></small>
            </div>

            <div class="col-6 post-contenido">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if(in_category('imagenes')) : ?>
        <?php
            $images =& get_children( array (
                'post_parent' => $post->ID,
                'post_type' => 'attachment',
                'post_mime_type' => 'image'
            ));

            if ( !empty($images) ) {
                echo '<div class="post-imagenes">';
                    the_content();
                echo '</div>';
            }
        ?>
    <?php endif; ?>

    <?php if(in_category('proyecto')) : ?>
        <div class="row">
            <div class="col-6 post-informacion">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?> on <?php the_category('-'); ?></small>
            </div>

            <div class="col-6 post-contenido">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if(in_category('uncategorized')) : ?>
        <div class="row">
            <div class="col-6 post-informacion">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?> on <?php the_category('-'); ?></small>
            </div>

            <div class="col-6 post-contenido">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endif; ?>
    </article>

    <div class="col-12">
    <div class="separator"></div>
</div>