<?php
/**
 * PVD SIGNS Functions
 */

if ( ! function_exists( 'pvdsigns_setup' ) ) :

	function pvdsigns_setup() {

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'home-menu' => esc_html__( 'Front Page', 'pvdsigns' ),
		) );

	}
endif;
add_action( 'after_setup_theme', 'pvdsigns_setup' );
