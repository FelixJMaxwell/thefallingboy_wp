<?php get_header(); ?>

<div class="main-index">
    <!-- <h1>category-textos.php</h1> -->

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
		'category_name' => 'textos',
		'order' => 'DESC', // 'ASC'
		'orderby' => 'date' // modified | title | name | ID | rand
	);

	$custom_query = new WP_Query( $custom_query_args );
	
	/*  Se muestra el contenido del post en turno
	el codigo esta contenido dentro de partials/content */
	if ( $custom_query->have_posts() ) :
		while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
			<article <?php post_class(); ?>>
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
				</article>

				<div class="col-12">
				<div class="separator"></div>
			</div>
	<?php endwhile; ?>
		
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