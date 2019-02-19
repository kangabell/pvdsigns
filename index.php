<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body>
	<main>
		<div class="img-featured">
			<img src="https://place-hold.it/500x350&text=featured">
		</div>
		<div class="featured">
			<img src="https://place-hold.it/120x80&text=featured">
			<img src="https://place-hold.it/120x80&text=featured">
			<img src="https://place-hold.it/120x80&text=featured">
			<img src="https://place-hold.it/120x80&text=featured">
			<img src="https://place-hold.it/120x80&text=featured">
			<img src="https://place-hold.it/120x80&text=featured">
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
				if ( have_posts() ) : while ( have_posts() ) : the_post();
				?>
					<a class="thumbnail" href="<?php the_post_thumbnail_url(); ?>"><?php the_post_thumbnail(); ?></a>
				<?php
				endwhile; endif;
				?>
			</div>
		</div>
		<div class="neighborhoods">
			<h2>Neighborhoods</h2>
			<?php
			wp_nav_menu( array( 'theme_location' => 'home-menu' ) );
			?>
		</div>
		<div class="tags">
			<h2>Tags</h2>
			<ul>
			<?php
			$tags = get_tags();
			foreach ($tags as $tag) {
				$tag_link = get_tag_link( $tag->term_id );
				echo '<li><a href="' . $tag_link . '">' . $tag->name . '</a></li>';
			}
			?>
			</ul>
		</div>
	</main>
</body>
</html>