<?php get_header(); ?>

<div class="main-index">
    <h1>category-imagenes.php</h1>

<!-- <?php
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
			<article <?php post_class(); ?>>
				<?php
					$images =& get_children( array (
						'post_parent' 		=> $post->ID,
						'post_mime_type' 	=> 'image',
					));

					echo '<div class="post-imagenes">';
					foreach ( $images as $attachment_id => $attachment ) {
						/* echo wp_get_attachment_image( $attachment_id, 'thumbnail' ); */
						echo '<a href="'. get_permalink() . '">'. wp_get_attachment_image($attachment_id,  array( "class" => "thumbnail-img" )) .'</a>';
					}
					echo '</div>';

					$media = get_attached_media( 'image' );
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
?> -->


<?php 
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
			<article <?php post_class(); ?>>
			<?php
				$images =& get_children( array(
					'post_parent' 		=> get_the_ID(),
					'post_type'      	=> 'attachment',
					'post_mime_type' 	=> 'image'
				));
				 
				if ( empty( $images ) ) {
					// no attachments here
				} else {
					foreach ( $images as $attachment_id => $attachment ) {
						echo wp_get_attachment_image( $attachment_id, 'full' );
					}
				}
			?>
			</article>

		<?php
		endwhile;
		?>

	<?php endif; ?>	

</div>