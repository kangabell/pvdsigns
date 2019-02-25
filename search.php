<?php get_header(); ?>

<?php
if (have_posts()) :
?>
	<div class="page-header">
		<h1 class="page-title">
			<?php printf( esc_html__( 'Search Results for: %s', '_s' ), '<span>' . get_search_query() . '</span>' ); ?>
		</h1>
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