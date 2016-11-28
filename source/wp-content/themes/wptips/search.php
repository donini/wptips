<?php
get_header();
global $post;
?>
<div class="container">
	<div class="page-content">
		<h2 class="title-section"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
		<?php
		    global $query_string;
		    $query_args = explode("&", $query_string);
		    $search_query = array();

		    foreach($query_args as $key => $string) {
		      $query_split = explode("=", $string);
		      $search_query[$query_split[0]] = urldecode($query_split[1]);
		    } // foreach

		    $the_query = new WP_Query($search_query);
		    if ( $the_query->have_posts() ) : 
		    ?>
		    <!-- the loop -->

		    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<article class="post">
			<?php get_template_part( 'includes/template/post-resume', 'page' ); ?>
			</article>

		    <?php endwhile; ?>
		    <!-- end of the loop -->

		    <?php wp_reset_postdata(); ?>

		<?php else : ?>
		    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
</div>
<?php get_footer();?>