<?php
get_header();
global $post;
?>
<div class="container">
	<div class="page-content">

<!-- This sets the $curauth variable -->

    <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>

    <h2 class="title-section">Here are the lastest posts of the: <span>@<?php echo $curauth->nickname; ?></span></h2>

<!-- The Loop -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    ?>
    <article class="post">
    <?php get_template_part( 'includes/template/post-resume', 'page' ); ?>
    </article>
    <?php endwhile; 
    else: ?>
        <p><?php _e('No posts by this author.'); ?></p>

    <?php endif; ?>

<!-- End Loop -->


	</div>
</div>
<?php get_footer();?>