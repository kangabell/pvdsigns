<?php get_header(); ?>

<?php
if (have_posts()) :
?>
	<div class="page-header">
		<h1 class="page-title">
			<?php printf( esc_html__( 'Search Results for: %s', '_s' ), '<span>' . get_search_query() . '</span>' ); ?>
		</h1>
	</div>
<?php
	get_template_part('partials/loop');
else :
	echo 'Sorry, no posts found.';
endif;
?>
		  
<?php get_footer(); ?>