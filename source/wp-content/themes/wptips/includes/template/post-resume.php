	<h1><a href="<?php echo get_the_permalink();?>" title="<?php echo get_the_title(); ?>"> <span class="post-number"><?php echo Utils::zero_fill( intval( get_field('tip_number') ), 2 ); ?></span> <span class="title"><?php echo get_the_title(); ?></span></a></h1>
	<span class="post-date"><i class="fa fa-calendar-o"></i> <?php echo get_the_date('d/m/Y'); ?></span>
	<span class="post-user"><i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" title="">@<?php echo get_the_author(); ?></a></span>
	<?php if (!empty(get_field('wordpress_version'))): ?><span><i class="fa fa-wordpress"></i> Tested version: <?php echo get_field('wordpress_version');?></span><?php endif; ?>
	<span class="post-read">
	(<?php echo Utils::time_to_read(get_the_content());?> min read)
	</span>
	<p class="summary"><?php the_excerpt(); ?></p>