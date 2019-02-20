<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php
	if ( has_post_thumbnail() ) :
		get_template_part('partials/tile');
	else :
	?>
		<a href="<?php echo get_permalink(); ?>">
			<?php the_excerpt(); ?>
		</a>
	<?php
	endif;
	?>

<?php endwhile; endif; ?>
		  
<?php get_footer(); ?>