<?php
/*
Template Name: Front Page
*/

$featured_ids = get_field('featured_items', false, false);
$locations = get_nav_menu_locations();
$menu1_id = $locations[ 'home-menu-1' ] ;
$menu1_object = wp_get_nav_menu_object( $menu1_id );
$menu2_id = $locations[ 'home-menu-2' ] ;
$menu2_object = wp_get_nav_menu_object( $menu2_id );

?>

<?php get_header(); ?>

<div class="featured-large">
	<?php // first Featured Item
	$args = array(
		'posts_per_page' => 1,
		'post__in' => $featured_ids,
        'orderby' => 'post__in',
		'ignore_sticky_posts' => true
	);
	query_posts ($args);
	if (have_posts()) : while (have_posts()) : the_post();
		get_template_part('partials/tile');
	endwhile; endif;
	wp_reset_query();
	?>
</div>

<div class="featured-medium">
	<?php // second Featured Item
	$args = array(
		'posts_per_page' => 1,
		'post__in' => $featured_ids,
        'orderby' => 'post__in',
		'ignore_sticky_posts' => true,
		'offset' => 1
	);
	query_posts ($args);
	if (have_posts()) : while (have_posts()) : the_post();
		get_template_part('partials/tile');
	endwhile; endif;
	wp_reset_query();
	?>
</div>
<div class="recent">
	<div class="flex">
		<?php
		$args = array(
			'posts_per_page' => 12,
			'orderby' => 'modified'
		);
		query_posts ($args);
		if (have_posts()) : while (have_posts()) : the_post();
		    get_template_part('partials/tile');
		endwhile; endif;
		wp_reset_query();
		?>
	</div>
</div>
<div class="menu-1">
	<h2><?php echo $menu1_object->name; ?></h2>
	<?php
	wp_nav_menu( array( 'theme_location' => 'home-menu-1' ) );
	?>
</div>
<div class="menu-2">
	<h2><?php echo $menu2_object->name; ?></h2>
	<?php
	wp_nav_menu( array( 'theme_location' => 'home-menu-2' ) );
	?>
</div>
<div class="show-all">
	<a class="button" href="<?php echo get_post_type_archive_link('post'); ?>"><?php _e( 'Show All Posts', 'pvdsigns' ); ?></a>
</div>

<?php get_footer(); ?>