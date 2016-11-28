<?php
get_header();
global $post;
?>
<div class="container">
	<div class="page-content">
		<h1><?php the_title();?></h1>
		<?php echo apply_filters( 'the_content', $post->post_content );?>
	</div>
</div>
<?php get_footer();?>