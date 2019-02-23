<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="page-header">
		<?php
		echo get_the_term_list( $post->ID, 'neighborhoods', '<p class="neighborhoods">', '', '</p>' );
		the_title( '<h1 class="page-title">', '</h1>' );
		if ( 'post' === get_post_type() ) :
		?>
			<p class="meta">
				<?php
				echo 'Posted by ' . get_the_author_posts_link() . ' | ';
				the_date();
				?>
			</p>
		<?php
		endif;
		?>
	</div>
	<?php
	the_content();
	the_tags('<p>', ' / ', '</p>');
	?>

<?php endwhile; endif; ?>
		  
<?php get_footer(); ?>