<a class="thumbnail" href="<?php echo get_permalink(); ?>">
	<?php
	if ( has_post_thumbnail() ) :
		the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title() ) );
	else :
	?>
		<img src="<?php echo get_template_directory_uri() . '/missing.png'; ?>" alt="image missing" />
	<?php
	endif;
	?>
</a>