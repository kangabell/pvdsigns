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
		<div class="logo">
			<h1>
			<?php
			if ( has_custom_logo() ) {
				the_custom_logo();
			} else {
				bloginfo();
			}
			?>
			</h1>
			<p><?php bloginfo('description'); ?></p>
		</div>
		<?php echo get_search_form(); ?>
	</header>
	<main>