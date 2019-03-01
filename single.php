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
			<p class="tags">
				<?php
				the_tags('', ' / ');
				?>
			</p>
		<?php
		endif;
		?>
	</div>
	<div class="page-content">
		<?php
		the_content();
		?>
	</div>

<?php endwhile; endif; ?>
		  
<?php get_footer(); ?>