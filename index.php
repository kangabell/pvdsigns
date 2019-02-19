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
			<ul id="menu-main-menu" class="menu"><li id="menu-item-1018" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1018"><a href="http://kangabell.com/pvd/tag/chalkstone/">Chalkstone</a></li>
				<li id="menu-item-1019" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1019"><a href="http://kangabell.com/pvd/tag/charles/">Charles</a></li>
				<li id="menu-item-1010" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1010"><a href="http://kangabell.com/pvd/tag/college-hill/">College Hill</a></li>
				<li id="menu-item-1004" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1004"><a href="http://kangabell.com/pvd/tag/downtown/">Downtown</a></li>
				<li id="menu-item-1005" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1005"><a href="http://kangabell.com/pvd/tag/elmhurst/">Elmhurst</a></li>
				<li id="menu-item-1006" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1006"><a href="http://kangabell.com/pvd/tag/elmwood/">Elmwood</a></li>
				<li id="menu-item-1007" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1007"><a href="http://kangabell.com/pvd/tag/federal-hill/">Federal Hill</a></li>
				<li id="menu-item-1008" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1008"><a href="http://kangabell.com/pvd/tag/fox-point/">Fox Point</a></li>
				<li id="menu-item-1009" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1009"><a href="http://kangabell.com/pvd/tag/jewelry-district/">Jewelry District</a></li>
				<li id="menu-item-1000" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1000"><a href="http://kangabell.com/pvd/tag/lower-south-providence/">Lower South PVD</a></li>
				<li id="menu-item-1001" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1001"><a href="http://kangabell.com/pvd/tag/mount-hope/">Mount Hope</a></li>
				<li id="menu-item-1002" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1002"><a href="http://kangabell.com/pvd/tag/north-main/">North Main</a></li>
				<li id="menu-item-1003" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1003"><a href="http://kangabell.com/pvd/tag/olneyville/">Olneyville</a></li>
				<li id="menu-item-1011" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1011"><a href="http://kangabell.com/pvd/tag/silver-lake/">Silver Lake</a></li>
				<li id="menu-item-997" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-997"><a href="http://kangabell.com/pvd/tag/smith-hill">Smith Hill</a></li>
				<li id="menu-item-1012" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1012"><a href="http://kangabell.com/pvd/tag/south-elmwood/">South Elmwood</a></li>
				<li id="menu-item-1013" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1013"><a href="http://kangabell.com/pvd/tag/upper-south-providence/">Upper South PVD</a></li>
				<li id="menu-item-1015" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1015"><a href="http://kangabell.com/pvd/tag/valley/">Valley</a></li>
				<li id="menu-item-1014" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1014"><a href="http://kangabell.com/pvd/tag/washington-park/">Washington Park</a></li>
				<li id="menu-item-1016" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1016"><a href="http://kangabell.com/pvd/tag/west-broadway/">West Broadway</a></li>
				<li id="menu-item-1017" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1017"><a href="http://kangabell.com/pvd/tag/west-end/">West End</a></li>
			</ul>
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