<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php
	the_title( '<h1 class="page-title">', '</h1>' );
	echo get_the_term_list( $post->ID, 'neighborhoods', '<p class="neighborhoods">', '', '</p>' );
	the_content();
	the_tags('<p>', ' / ', '</p>');

	?>

<?php endwhile; endif; ?>
		  
<?php get_footer(); ?>