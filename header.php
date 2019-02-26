<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="site-header">
		<div class="wrap">
			<a class="logo" href="<?php echo get_home_url(); ?>">
				<h1><?php bloginfo(); ?></h1>
				<p><?php bloginfo( 'description' ); ?></p>
			</a>
			<?php echo get_search_form(); ?>
		</div>
	</header>
	<main>
		<div class="wrap">