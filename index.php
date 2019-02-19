<!DOCTYPE html>
<html>
<head>
	<title>PVD Signs &#8211; Old-Fashioned Signage in Providence, Rhode Island</title>
	<style type="text/css">

		@font-face {
		    font-family: 'BLOKK';
		    src: url('BLOKK/BLOKKNeue-Regular.eot');
		    src: url('BLOKK/BLOKKNeue-Regular.eot?#iefix') format('embedded-opentype'),
		         url('BLOKK/BLOKKNeue-Regular.woff2') format('woff2'),
		         url('BLOKK/BLOKKNeue-Regular.woff') format('woff'),
		         url('BLOKK/BLOKKNeue-Regular.otf') format('opentype'),
		         url('BLOKK/BLOKKNeue-Regular.ttf') format('truetype'),
		         url('BLOKK/BLOKKNeue-Regular.svg#BLOKKRegular') format('svg');
		    font-weight: normal;
		    font-style: normal;
		}

		body {
			font-family: helvetica;
		}

		* {
			box-sizing: border-box;
		}

		p,
		li {
			font-family: "BLOKK";
		}

		a {
			text-decoration: none;
			font-weight: bold;
		}

		.button {
			border: 1px solid;
			padding: 0.5rem;
		}

		main {
			display: grid;
			grid-template-columns: repeat(3, 33%);
			grid-template-rows: repeat(15, 5rem);
			grid-column-gap: 1rem;
			grid-row-gap: 1rem;
			max-width: 1500px;
			margin: 0 auto;
		}

		img { /* image fills grid cell */
			width: 100%;
			height: 100%;
		}

		.flex {
			display: flex;
			flex-wrap: wrap;
		}

		.img-featured {
			grid-row: span 3;
		}

		.featured {
			grid-column: 2;
			grid-row: span 4;
			display: flex;
			flex-wrap: wrap;
		}

		.featured img {
			margin: 1rem;
			width: 42%;
			height: 20%;
		}

		.about {
			grid-column: 2;
			grid-row: 5 / span 2;
		}

		.submit {
			grid-row: 4 / span 2;
		}

		.supplement {
			grid-row: 6 / span 2;
		}

		.recent {
			grid-column: 2 / span 2;
			grid-row: 7 / span 6;
		}

		.thumbnail {
			padding: 0.5rem;
			width: 25%;
		}

		.neighborhoods {
			grid-column: 3;
			grid-row: span 5;
		}

		.tags {
			grid-column: 1;
		}

	</style>
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