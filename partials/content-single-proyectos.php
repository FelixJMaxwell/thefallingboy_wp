<div class="post-proyecto">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?> on <?php the_category('-'); ?></small>
    <?php the_content() ?>
</div>