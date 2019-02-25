<?php get_header(); ?>

<?php
if (have_posts()) :
?>
	<div class="page-header">
		<h1 class="page-title"><?php the_archive_title(); ?></h1>
		<div class="archive-description"><?php the_archive_description();?></div>
	</div>
<?php
	get_template_part('partials/loop');
else :
	echo 'Sorry, no posts found.';
endif;
?>
		  
<?php get_footer(); ?>