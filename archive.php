<?php get_header(); ?>

<?php
if (have_posts()) :
?>
	<div class="page-header">
		<h1 class="page-title"><?php the_archive_title(); ?></h1>
		<div class="archive-description"><?php the_archive_description();?></div>
	</div>
	<div class="flex">
	<?php
	while (have_posts()) : the_post();
		get_template_part('partials/tile');
	endwhile;
	?>
	</div>
	<div class="pagination">
		<?php posts_nav_link(' ','&#8592; Older Posts', 'Newer Posts &#8594;'); ?>
	</div>
<?php
else :
	echo 'Sorry, no posts found.';
endif;
?>
		  
<?php get_footer(); ?>