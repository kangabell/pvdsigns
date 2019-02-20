<?php
/*
Template Name: Front Page
*/

$locations = get_nav_menu_locations();
$menu1_id = $locations[ 'home-menu-1' ] ;
$menu1_object = wp_get_nav_menu_object( $menu1_id );
$menu2_id = $locations[ 'home-menu-2' ] ;
$menu2_object = wp_get_nav_menu_object( $menu2_id );

?>

<?php get_header(); ?>

<div class="featured">
	<?php
	if ( have_rows('featured_items') ): while ( have_rows('featured_items') ) : the_row();
    $post = get_sub_field('item');
    setup_postdata($post);
    ?>
		<a class="thumbnail" href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    <?php
    wp_reset_postdata();
	endwhile; endif;
	?>
</div>
<div class="about">
	<h2>About</h2>
	<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla sed tellus metus. Aliquam feugiat neque in fermentum venenatis. Nunc vestibulum nec diam sit amet posuere. In posuere sem tortor, et auctor ante efficitur at.</p>
</div>
<div class="submit">
	<h2>Submit a Photo</h2>
	<p>Vivamus maximus tellus ut massa blandit, at ullamcorper augue pharetra. Quisque sit amet risus sit amet orci placerat egestas tempor at urna!</p>
	<a href="#" class="button">Submit</a>
</div>
<div class="supplement">
	<img src="https://place-hold.it/500x250&text=supplement">
</div>
<div class="recent">
	<h2>Recently Updated</h2>
	<div class="flex">
		<?php
		$args = array(
			'posts_per_page' => 16,
			'ignore_sticky_posts' => true
		);
		query_posts ($args);
		if (have_posts()) : while (have_posts()) : the_post();
		?>
		    <a class="thumbnail" href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	    <?php
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

<?php get_footer(); ?>