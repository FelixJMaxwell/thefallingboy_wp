<?php get_header(); ?>

<div class="main-index">
    <h1>category-imagenes.php</h1>

<?php
	if ( get_query_var('paged') ) {
		$paged = get_query_var('paged');
	} elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
		$paged = get_query_var('page');
	} else {
		$paged = 1;
	}
	
	$custom_query_args = array(
		'post_type' => 'post', 
		'posts_per_page' => get_option('posts_per_page'),
		'paged' => $paged,
		'post_status' => 'publish',
		'ignore_sticky_posts' => true,
		'category_name' => 'imagenes',
		'order' => 'DESC', // 'ASC'
		'orderby' => 'date' // modified | title | name | ID | rand
	);

	$custom_query = new WP_Query( $custom_query_args );
	
	if ( $custom_query->have_posts() ) :
		while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

            <?php
                // Get the ID of a given category
                $category_id = get_cat_ID( 'imagenes' );
                
                // Get the URL of this category
                $category_link = get_category_link( $category_id );
            ?>

			<article <?php post_class(); ?>>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?> on 
                    <a href="<?php echo esc_url( $category_link ); ?>" 
                        title="category-<?php single_cat_title() ?>"> <?php single_cat_title() ?> </a></small>
				<?php
					$images =& get_children( array (
						'post_parent' => $post->ID,
						'post_type' => 'attachment',
						'post_mime_type' => 'image'
					));

					if ( empty($images) ) {
						// no attachments here}
						$the_excerpt = apply_filters('the_excerpt', get_the_excerpt());
						
						echo '<div class="the_excerpt">'.__($the_excerpt).'</div>';
					} else {
						echo '<div class="post-imagenes">';
						foreach ( $images as $attachment_id => $attachment ) {
							echo wp_get_attachment_image( $attachment_id, 'thumbnail' );
						}
						echo '</div>';
					}
				?>
			</article>

	<?php
	endwhile;
	?>
		
	<?php if ($custom_query->max_num_pages > 1) : // custom pagination  ?>
		<?php
		$orig_query = $wp_query; // fix for pagination to work
		$wp_query = $custom_query;
		?>
		<nav class="prev-next-posts">
			<div class="prev-posts-link">
				<?php echo get_next_posts_link( 'Older Entries', $custom_query->max_num_pages ); ?>
			</div>
			<div class="next-posts-link">
				<?php echo get_previous_posts_link( 'Newer Entries' ); ?>
			</div>
		</nav>
		<?php
		$wp_query = $orig_query; // fix for pagination to work
		?>
	<?php endif; ?>
 
<?php
	wp_reset_postdata(); // reset the query 
else:
	echo '<p>'.__('Sorry, no posts matched your criteria.').'</p>';
endif;
?>


</div>