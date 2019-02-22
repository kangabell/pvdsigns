<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="wrap">
			<div class="logo">
				<h1><a href="<?php echo get_home_url(); ?>"><?php bloginfo(); ?></a></h1>
			</div>
			<?php echo get_search_form(); ?>
		</div>
	</header>
	<main>
		<div class="wrap">