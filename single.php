<?php get_header(); ?>

<?php
$related_items = get_field('related_items');
?>

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
	<?php
	if( $related_items ):
	?>
		<div class="related-items">
			<h2><?php _e('Related', 'pvdsigns'); ?></h2>
		<?php
		foreach( $related_items as $post ):
			setup_postdata($post);
			get_template_part('partials/tile');
	    endforeach;
	    wp_reset_postdata();
	    ?>
    	</div>
    <?php
	endif;
	?>

<?php endwhile; endif; ?>
		  
<?php get_footer(); ?>