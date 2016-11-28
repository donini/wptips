<?php get_header(); 
global $post;
?>
<main>
<?php 
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post(); 
      $wp_version = get_field('wordpress_version');
      ?>
      <article class="post">
          <?php get_template_part( 'includes/template/post-resume', 'page' );?>

        <?php echo apply_filters( 'the_content', $post->post_content );?>

      </article>
  <?php
    }
  }
?>
<?php get_template_part( 'includes/template/comments', 'post' );?>
</main>

<?php get_footer(); ?>