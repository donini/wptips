<?php get_header();?>

<?php
// to solve problem about paging in front-page
if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) {
    $paged = get_query_var('page');
} else {
    $paged = 1;
}
$args = array(
  'paged' => esc_attr($paged),
  'posts_per_page' => get_option('posts_per_page'),
  'post_type' => 'post',
  'order' => 'DESC',
  'orderby' => 'date'
);

$my_query = new WP_Query( $args );

// Output custom query loop
if ( $my_query->have_posts() ) :
    while ( $my_query->have_posts() ) :
        $my_query->the_post();?>
    <article class="post">
    <?php get_template_part( 'includes/template/post-resume', 'page' ); ?>
    </article>
    <?php endwhile;
endif;

wp_pagenavi( array( 'query' => $my_query ) );
wp_reset_query();
?>
<?php get_footer();?>