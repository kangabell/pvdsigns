<?php get_header(); ?>

<?php
if (have_posts()) :
?>
	<h1 class="page-title">
		<?php printf( esc_html__( 'Search Results for: %s', '_s' ), '<span>' . get_search_query() . '</span>' ); ?>
	</h1>
<?php
	while (have_posts()) : the_post();
		get_template_part('partials/tile');
	endwhile;
	the_posts_navigation();
else :
	echo 'Sorry, no posts found.';
endif;
?>
		  
<?php get_footer(); ?>