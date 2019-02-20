<?php get_header(); ?>

<?php
if (have_posts()) :
	while (have_posts()) : the_post();
		get_template_part('partials/tile');
	endwhile;
	the_posts_navigation();
else :
	echo 'Sorry, no posts found.';
endif;
?>
		  
<?php get_footer(); ?>