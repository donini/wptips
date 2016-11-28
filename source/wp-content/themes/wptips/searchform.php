<form action="/" role="search" method="get" id="searchform" class="searchform">
	<div>
		<input type="text" name="s" id="search" placeholder="<?php esc_attr_x( _e('Search for something...'), 'placeholder' ); ?>" value="<?php the_search_query(); ?>" />
		<input type="submit" id="searchsubmit" value="<?php _e('Search'); ?>">
	</div>
</form>